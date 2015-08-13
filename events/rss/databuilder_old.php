<?php
/**
 * @package Helios Calendar
 * @license GNU General Public License version 2 or later; see LICENSE
 */
define('isHC',true);
define('isAction',true);
include_once('../loader.php');
include_once(HCLANG.'/public/rss.php');

if($hc_cfg[106] == 0)
    go_home();

$lQuery = $cQuery = $catIDs = $cityNames = '';
$tzRSS = str_replace(':','',HCTZ);

if(isset($_GET['l'])){
    $catIDs = array_filter(explode(',',$_GET['l']),'is_numeric');
    $cats = (count($catIDs) > 0) ? cIn(implode(',',$catIDs)) : '0';
    $lQuery = " AND c.PkID IN (".$cats.")";
}
if(isset($_GET['c'])){
    $cityNames = array_map('cIn',array_map('strip_tags',explode(',',$_GET['c'])));
    $cQuery = " AND (e.LocationCity IN ('".implode("','",$cityNames)."') OR l.City IN ('".implode("','",$cityNames)."'))";
}


$query = "SELECT DISTINCT e.PkID, e.Title, e.Description, e.StartDate, e.StartTime, e.SeriesID, e.Image, e.EndTime, l.Name, c.CategoryName
			FROM " . HC_TblPrefix . "events e
				LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (e.PkID = ec.EventID)
				LEFT JOIN " . HC_TblPrefix . "categories c ON (ec.CategoryID = c.PkID)
				LEFT JOIN " . HC_TblPrefix . "locations l ON (e.LocID = l.PkID)
			WHERE e.IsActive = 1 AND
				e.IsApproved = 1 AND e.StartDate >= '" . cIn(SYSDATE) . "' AND c.IsActive = 1
				".$lQuery.$cQuery;
$query .= ($hc_cfg[33] == 0) ? " AND SeriesID IS NULL UNION " . $query . " AND SeriesID IS NOT NULL GROUP BY e.PkID, e.Title, e.Description, e.StartDate, e.StartTime, e.SeriesID, e.EndTime, l.Name" : '';
$result = doQuery($query . " ORDER BY StartDate, StartTime LIMIT ".$hc_cfg[2]);

/**
$query = "SELECT DISTINCT e.PkID, e.Title, e.Description, e.StartDate, e.StartTime, e.SeriesID, e.Image, e.EndTime, l.Name, GROUP_CONCAT(c.CategoryName)
			FROM " . HC_TblPrefix . "events e
				LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (e.PkID = ec.EventID)
				LEFT JOIN " . HC_TblPrefix . "categories c ON (ec.CategoryID = c.PkID)
				LEFT JOIN " . HC_TblPrefix . "locations l ON (e.LocID = l.PkID)
			WHERE e.IsActive = 1 AND
				e.IsApproved = 1 AND e.StartDate >= '" . cIn(SYSDATE) . "' AND c.IsActive = 1
				".$lQuery.$cQuery;
$query .= ($hc_cfg[33] == 0) ? " AND SeriesID IS NULL UNION " . $query . " AND SeriesID IS NOT NULL GROUP BY e.PkID, e.Title, e.Description, e.StartDate, e.StartTime, e.SeriesID, e.EndTime, l.Name" : '';
$result = doQuery($query . " ORDER BY StartDate, StartTime LIMIT ".$hc_cfg[2]);
**/
header('Content-Type:application/rss+xml; charset=' . $hc_lang_config['CharSet']);
echo '<?xml version="1.0" encoding="'.$hc_lang_config['CharSet'].'"?>
<!-- Generated by Helios Calendar '.$hc_cfg[49].' '.date("\\o\\n Y-m-d \\a\\t H:i:s").' local time. -->
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:oun="http://omniupdate.com/XSL/CustomNews">
<channel>
	<link>'.CalRoot.'/</link>
	<atom:link href="'.CalRoot.'/rss/databuilder.php" rel="self" type="application/rss+xml" />
	<generator>OU Calendar</generator>
	<docs>'.CalRoot.'&#47;index.php&#63;com=tools</docs>
	<description>'.cleanXMLChars($hc_lang_rss['Upcoming']).'</description>';

if(hasRows($result)){
    echo '
	<title>'.cleanXMLChars($hc_lang_rss['Custom']).'</title>';
    $cnt = 0;
    while($row = mysql_fetch_row($result)){
        $description = $row[2];
        $description = strip_tags(html_entity_decode($description));
        $description = ($hc_cfg[107] > 0) ? clean_truncate($description,$hc_cfg[107]) : $description;
        
        $categories = explode(",",$row[9]);//filtering out ACE
        switch (count($categories)){
            case 0:
                $category = 'No Category';
                break;
            case 1:
                $category = substr($categories[0],3);
                break;
            default:
                $category = (substr($categories[0],-4) != '_ACE') ? substr($categories[0],3) : substr($categories[1],3);
                break;
        }
        
        $comment = ($hc_cfg[25] != '') ? '<comments><![CDATA['.CalRoot.'/index.php?eID='.$row[0].'#disqus_thread'.']]></comments>' : '';
        echo '
	<item>
		<title>'.cleanXMLChars(stampToDate(cOut($row[3]), $hc_cfg[24]))." - ".cleanXMLChars(cOut($row[1])).'</title>
		<link><![CDATA['.CalRoot.'/index.php?eID='.$row[0].']]></link>
		<description>'.cleanXMLChars(cOut($description)).'</description>
		'.$comment.'
		<guid>'.CalRoot.'/index.php&#63;eID='.$row[0].'</guid>
		<pubDate>'.cleanXMLChars(stampToDate($row[3].' '.$row[4], "%a, %d %b %Y  %H:%M:%S").' '.$tzRSS).'</pubDate>
        <date>'.cleanXMLChars(stampToDate($row[3], "%B %d")).'</date>
        <startTime>'.date("h:i A",strtotime(stampToDate($row[3].' '.$row[4],"%d %b %Y %H:%M:%S"))).'</startTime>
        <endTime>'.date("h:i A",strtotime(stampToDate($row[3].' '.$row[7],"%d %b %Y %H:%M:%S"))).'</endTime>
        <location>'.$row[8].'</location>
        <category>'.cleanXMLChars($category).'</category>
        <eventName>'.cleanXMLChars(cOut($row[1])).'</eventName>
	</item>';
        ++$cnt;
    }
} else {
    echo '
	<title>'.$hc_lang_rss['RSSSorry'].'</title>
	<item>
		<title>'.$hc_lang_rss['RSSNoEvents'].'</title>
		<link>'.CalRoot.'/</link>
		<description>'.$hc_lang_rss['RSSNoLink'].'</description>
		<guid>' . CalRoot . '/</guid>
	</item>';
}
echo '
</channel>
</rss>';
?>