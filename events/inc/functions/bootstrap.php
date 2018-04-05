<?php
/**
 * @package Helios Calendar
 * @license GNU General Public License version 2 or later; see LICENSE
 */
	if(!defined('isHC')){exit(-1);}
		/**
	 * Output breadcrumb navigation for current page.
	 * @since 2.0.0
	 * @version 2.0.0
	 * @param array $crumbs array of breadcrumbs ($link => $text)
	 * @param integer $limit [optional] text length limit, crumb text truncated to not exceed this length (Default:50)
	 * @return datatype description
	 	<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Calendar</a></li>
		  <li class="active">Event</li>
		</ol>
	 */
	function ou_build_breadcrumb($crumbs,$limit = 50){		
		if(!is_array($crumbs))
			return 0;
		echo '
	<ol class="breadcrumb">';
		foreach($crumbs as $link => $text){
			echo ($link != 'NULL') ? '
		<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'.$link.'" itemprop="url"><span itemprop="title">'.clean_truncate($text,$limit).'</span></a><span class="arrow"><span>&nbsp;</span></span></li>' : '
		<li class="empty">'.$text.'</li>';
		}
		echo '
	</ol>';
	}
	/**
	 * Generates event browse navigation links.
	 * @since 2.0.0
	 * @version 2.2.1
	 * @param integer $prev unix timestamp of previous date
	 * @param integer $next unix timestamp of next date
	 * @param integer $window Number of days being browsed
	 * @param string $location Location URL Argument w/ID "&amp;lID=X" (Preserves Browse by Location)
	 * @return string Browse Navigation HTML Markup
	 */
	function event_browse_bs_nav($prev,$next,$window,$location){
		global $lID, $hc_cfg, $hc_lang_event;
		
		$m = ($window == 0) ? '&amp;m=1' : '';
		$pLink = ($window > 518400) ? date("U", mktime(0,0,0,HCMONTH-1,1,HCYEAR)) : $prev - ($window + 86400);
		$fltr = (isset($_SESSION['hc_favCat']) || isset($_SESSION['hc_favCity'])) ? ' hc_filt_active' : '';
		$bak = ($hc_cfg['First'] >= $prev || (HCDATE <= SYSDATE && $hc_cfg[11] == 0)) ? 
				'<li><a href="#" title="'.$hc_lang_event['BrowseBack'].'" /><i class="fa fa-chevron-left"></i> Previous</a></li>':
				'<li><a href="'.CalRoot.'?d='.date("Y-m-d",$pLink).$location.$m.'" title="'.$hc_lang_event['BrowseBack'].'" /><i class="fa fa-chevron-left"></i> Previous</a></li>';
		$fwd = ($hc_cfg['Last'] > $next) ? 
				'<li><a href="'.CalRoot.'?d='.date("Y-m-d",($next+86400)).$location.$m.'" title="'.$hc_lang_event['BrowseForward'].'" />Next <i class="fa fa-chevron-right"></i></a></li>':
				'<li><a href="#" title="'.$hc_lang_event['BrowseForward'].'" />Next <i class="fa fa-chevron-right"></i></a></li>';
		$loc = ($lID > 0) ? '<a href="'.CalRoot.'/index.php?com=location&lID='.$lID.'" rel="nofollow" ><i class="fa fa-location"></i></a>' : '';
		
		return '
		<nav>
		<ul class="nav nav-pills">
			'.$loc.'
			<li><a href="'.CalRoot.'/index.php?b=2'.$location.'" rel="nofollow" title="'.$hc_lang_event['ALTBrowseD'].'" />Day</a></li>
			<li><a href="'.CalRoot.'/index.php?b=0'.$location.'" rel="nofollow" title="'.$hc_lang_event['ALTBrowseW'].'" />Week</a></li>
			<li><a href="'.CalRoot.'/index.php?b=1'.$location.'" rel="nofollow" title="'.$hc_lang_event['ALTBrowseM'].'" />Month</a></li>
			<li><a href="'.CalRoot.'/index.php?com=filter'.$location.'" rel="nofollow" title="' . $hc_lang_event['Filter'] . '" />By City &amp; Category</a></li>
			<li><a href="' . CalRoot . '/?d='.SYSDATE.$location.$m.'" rel="nofollow" title="' . $hc_lang_event['Home'] . '" />This Week</a></li>
			'.$bak.'
			'.$fwd.'
		</ul>
		</nav>';
	}
		/**
	 * Output event categories as buttons.
	 * @since 2.0.0
	 * @version 2.0.0
	 * @param integer $event Event ID
	 * @return void
	 */
	function cat_buttons($event){
		$result = doQuery("SELECT c.PkID, c.CategoryName
						FROM " . HC_TblPrefix . "eventcategories ec
							LEFT JOIN " . HC_TblPrefix . "categories c ON (ec.CategoryID = c.PkID)
						WHERE c.IsActive = 1 AND ec.EventID = '" . cIn($event) . "'
						ORDER BY c.CategoryName");
		if(!hasRows($result))
			return 0;
		echo '
		<ul class="list-inline">';
		while($row = mysql_fetch_row($result)){
			echo '
		<li><a class="btn btn-xs btn-success" itemprop="eventType" href="'.CalRoot.'/index.php?com=searchresult&amp;t='.$row[0].'" rel="nofollow">'.cOut($row[1]).'</a></li>';
		}
		echo '
		</ul>';

	}
	/**
	 * Validate current browse options against available events and build nav markup string & event browse results object. If invalid redirect to browse default (current week/month - depeneding on default settings).
	 * @since 2.1.0
	 * @version 2.2.1
	 * @param integer $sort_featured Sort featured events first before all other events occuring on each day. 0 = List events chronologically regardless of featured status, 1 = List featured events first. (Default: 1)
	 * @param string $nav_function [optional] Browse Navigation function to use. (Default: event_browse_bs_nav)
	 * @return void 
	 */	
	function event_browse_bs_valid($sort_featured = 1, $nav_function = 'event_browse_bs_nav'){
		global $lID, $hc_cfg, $hc_lang_event, $favQ1, $favQ2, $resultEB, $mybsNav;
		
		$location = $lQuery = '';
		if($lID > 0){
			$location = '&amp;lID=' . $lID;
			$lQuery = " AND e.LocID = '" . $lID . "'";
		}
		
		if(isset($_GET['m']) || $_SESSION['BrowseType'] == 2){
			$sqlStart = $sqlEnd = strtotime(HCDATE);
			$startDate = $endDate = strtotime(HCDATE);
			$window = 0;
		} else {
			if($_SESSION['BrowseType'] == 1){
				$window = (date("t", strtotime(HCDATE)) - 1) * 86400;
				$remove = ($hc_cfg[48] == 0) ? (date("j", strtotime(HCDATE)) - 1) * 86400 : 0;
			} else {
				$window = 6 * 86400;
				$remove = ($hc_cfg[48] == 0) ? (date("w", strtotime(HCDATE)) - 1) * 86400 : 0;}
			
			$startDate = (strtotime(HCDATE) - $remove);
			$endDate = $sqlEnd = ($startDate + $window);
			$sqlStart = (HCDATE != SYSDATE) ? $startDate : strtotime(SYSDATE);
		}
		
		if($endDate < $hc_cfg['First'] && $startDate != $hc_cfg['First']){
			go_home();
		} else {
			$mybsNav = call_user_func($nav_function,$startDate,$endDate,$window,$location);
			
			$resultEB = doQuery("SELECT DISTINCT e.PkID, e.Title, e.StartDate, e.StartTime, e.EndTime, e.TBD, e.Image, e.IsFeature, e.HideDays, 
								e.LocID, e.LocationName, e.LocationCity, e.LocationState, e.LocCountry,
								l.Name, l.City, l.State, l.Country, e.Cost, e.SeriesID, e.Description
							FROM " . HC_TblPrefix . "events e
								LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (ec.EventID = e.PkID)
								LEFT JOIN " . HC_TblPrefix . "locations l ON (e.LocID = l.PkID)
							WHERE e.StartDate BETWEEN '" . date("Y-m-d", $sqlStart) . "' AND '" . date("Y-m-d", $sqlEnd) . "'"
							.$lQuery.$favQ1.$favQ2." AND e.IsActive = 1 AND e.IsApproved = 1
							GROUP BY e.PkID, e.Title, e.StartDate, e.StartTime, e.EndTime, e.TBD, e.Image, e.IsFeature, e.HideDays, e.LocID, e.LocationName, e.LocationCity, e.LocationState, e.LocCountry, l.Name, l.City, l.State, l.Country, e.Cost, e.SeriesID
							ORDER BY e.StartDate, ".($sort_featured == 1 ? "e.IsFeature DESC, ":"")."e.TBD, e.StartTime, e.Title");
							
			
		}
		
	}
	function flexslider($show_images = 0){
		global $lID, $hc_cfg, $hc_lang_event, $favQ1, $favQ2;
		$resultFB = doQuery("SELECT DISTINCT e.PkID, e.Title, e.StartDate, e.StartTime, e.EndTime, e.TBD, e.Image, e.IsFeature, e.HideDays, e.IsBillboard, e.SeriesID, e.Description
							FROM " . HC_TblPrefix . "events e
							WHERE e.StartDate > date(now()) AND e.IsActive = 1 AND e.IsApproved = 1 AND e.IsBillboard = 1
							GROUP BY e.Title, e.SeriesID
							ORDER BY e.StartDate, e.TBD, e.StartTime, e.Title Limit 5");
		if(!hasRows($resultFB)){
			//no_event_notice();
			//print_r($resultFB);
			return 0;}
			
		echo '
		<div class="flexslider">
		<ul class="slides">';
		while($row = mysql_fetch_row($resultFB)){
			$limit = ($row[8] > 0) ? cOut($row[8]) : $hc_cfg[134];
			$expire = ($limit > 0) ? date("Y-m-d", (strtotime($date) + ($limit*86400))) : '';
			
			$desc = $row[11];
			$desc = strip_tags(html_entity_decode($desc));
			//$desc = preg_replace("/<img[^>]+\>/i", "", $desc);
			//$desc = preg_replace('~</?p[^>]*>~i','', $desc);
			$desc = (strlen($desc) >= 350) ? clean_truncate($desc,350) : $desc;

			
			if($row[5] == 0){
				$time = ($row[3] != '') ? stampToDate($row[3], $hc_cfg[23]) : '';
				$time .= ($row[4] != '') ? ' - ' . stampToDate($row[4], $hc_cfg[23]) : '';
				$stamp = date("Y-m-d\Th:i:00",strtotime($row[2] . trim(' '.$row[3]))) . HCTZ;
			} else {
				$time = ($row[5] == 1) ? $hc_lang_event['AllDay'] : $hc_lang_event['TBA'];
				$stamp = date("Y-m-d",strtotime($row[2]));}
			echo '<li class="panel-heading"><h3 ><a itemprop="url" href="'.CalRoot . '/index.php?eID='.$row[0].$location.'"'.(($expire <= SYSDATE) ? ' rel="nofollow"':'').'><span itemprop="name">'.cOut($row[1]).'</span></a><span class="badge pull-right">' . stampToDate($row[2], $hc_cfg[14]) . '</span></h3>
			      <a itemprop="url" href="'.CalRoot . '/index.php?eID='.$row[0].$location.'"'.(($expire <= SYSDATE) ? ' rel="nofollow"':'').'>'.(($show_images == 1 && $row[6] != '') ? '
				<img alt="'.cOut($row[1]).'" itemprop="image" src="'.$row[6].'" class="img-thumbnail pull-left" />':'').'</a> '.$desc.'</li>';
			++$cnt;
		}
		echo '</ul>
		</div>';
	}

	/**
	 * Output event browse navigation links & event list by date.
	 * @since 2.0.0
	 * @version 2.1.0
	 * @param integer $show_images Include event images with browse output. 0 = Do NOT include images, 1 = Include images. (Default: 0)
	 * @param string $nav_function [optional] Browse Navigation function to use. (Default: event_browse_bs_nav)
	 * @return void
	 */
	function event_browse_bs($show_images = 0){
		global $lID, $hc_cfg, $hc_lang_event, $favQ1, $favQ2, $resultEB, $mybsNav;
		
		$location = ($lID > 0) ? '&amp;lID='.$lID : '';
		$cnt = $date = 0;
		
		echo $mybsNav;
		
		if(!hasRows($resultEB)){
			no_event_notice();
			return 0;}
		
		while($row = mysql_fetch_row($resultEB)){
		
			$limit = ($row[8] > 0) ? cOut($row[8]) : $hc_cfg[134];
			$expire = ($limit > 0) ? date("Y-m-d", (strtotime($date) + ($limit*86400))) : '';
			$eID = $row[0];
			
			if ($row[7] > 0){
				$cls = ' panel-primary';
			}else{
				$cls = ' panel-default';}
			
			$desc = $row[20];
			$desc = strip_tags(html_entity_decode($desc));
			//$desc = preg_replace("/<img[^>]+\>/i", "", $desc);
			//$desc = preg_replace('~</?p[^>]*>~i','', $desc);
			$desc = (strlen($desc) >= $hc_cfg[107]) ? clean_truncate($desc,$hc_cfg[107]) : $desc;
			
			$marker = $row[14];
			$marker = ($row[14] != '') ? '<a href="'.CalRoot .'/index.php?com=location&amp;lID='.$row[9].'"><span class="pull-right"><i class="fa  fa-map-marker"></i> '. $row[14] .'</span></a>' : $marker;
			
			if($row[5] == 0){
				$time = ($row[3] != '') ? stampToDate($row[3], $hc_cfg[23]) : '';
				$time .= ($row[4] != '') ? ' - ' . stampToDate($row[4], $hc_cfg[23]) : '';
				$stamp = date("Y-m-d\Th:i:00",strtotime($row[2] . trim(' '.$row[3]))) . HCTZ;
			} else {
				$time = ($row[5] == 1) ? $hc_lang_event['AllDay'] : $hc_lang_event['TBA'];
				$stamp = date("Y-m-d",strtotime($row[2]));
			}

			echo '
			<div class="panel'.$cls.' event-item">
			<div class="panel-heading"><h4 class="panel-title"><a itemprop="url" href="'.CalRoot . '/index.php?eID='.$row[0].$location.'"'.(($expire <= SYSDATE) ? ' rel="nofollow"':'').'><span itemprop="name">'.cOut($row[1]).'</span></a><span class="badge pull-right">' . stampToDate($row[2], $hc_cfg[14]) . '</span></h4></div>
			<div '.($cls != '' ? 'class="panel-body '.trim($cls).'" ':'').'itemscope itemtype="http://schema.org/Event">
				'.(($show_images == 1 && $row[6] != '') ? ' <a itemprop="url" href="'.CalRoot . '/index.php?eID='.$row[0].$location.'"'.(($expire <= SYSDATE) ? ' rel="nofollow"':'').'>
				<img alt="'.cOut($row[1]).'" itemprop="image" src="'.$row[6].'" class="img-thumbnail pull-left" /></a>':'').'
				<p>'.$desc.'</p><div>';
				cat_buttons($row[0]);
			echo	'</div></div>				
			<div class="panel-footer panel-info"><time itemprop="startDate" datetime="'.$stamp.'">'.$time.'</time>'.$marker.'</div>
			</div>';
			++$cnt;
		}
		echo $mybsNav;
	}

	/**
	 * Output mini search form (keyword only search).
	 * @since 2.0.0
	 * @version 2.2.1
	 * @param string $holder placeholder for input textbox
	 * @param integer $button [optional] 0 = do NOT output button, 1 = include "search events" form submit button (Default:0)
	 * @return void
	 */
	function ou_mini_search($holder = '',$button = 0){
		global $hc_lang_core;
		echo '
		<form class="navbar-form navbar-right" name="hc_search" id="hc_search" method="post" action="'.CalRoot.'/index.php?com=searchresult">
			<div class="form-group">
			<span class="pull-right"><a href="'.CalRoot.'/index.php?com=search" rel="nofollow">'.$hc_lang_core['AdvSearch'].'</a></span>
			<input class="form-control" type="search" name="hc_search_keyword" id="hc_search_keyword" value=""'.(($holder != '') ? ' placeholder="'.$holder.'"':'').' required="required" speech x-webkit-speech />
			'.(($button == 1) ? '<input type="submit" name="hc_search_submit" id="hc_search_submit" value="'.$hc_lang_core['GoSearch'].'" />':'').'
			</div>
		</form>';
	}
	/**
	 * Output filter menu & checkboxes.
	 * @since 2.0.0
	 * @version 2.0.0
	 * @param integer $mnu [optional] 0 = do NOT output menu, 1 = include menu in output (Default:1)
	 * @param integer $cols [optional] number of output columns (Default:1)
	 * @return void
	 */
	function ou_cal_filter($mnu = 1, $cols = 1){
		global $hc_cfg, $hc_lang_core;
		
		require_once(HCLANG.'/public/filter.php');
		
		$cQuery = (isset($_SESSION['hc_favCat'])) ? " AND c.PkID IN (".cIn($_SESSION['hc_favCat']).") " : '';
		
		$result = doQuery("SELECT c.PkID, c.CategoryName, c.ParentID, c.CategoryName as Sort, c2.PkID as Selected
						FROM " . HC_TblPrefix . "categories c 
							LEFT JOIN " . HC_TblPrefix . "categories c2 ON (c.PkID = c2.PkID ".$cQuery.")
							LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (c.PkID = ec.CategoryID)
						WHERE c.ParentID = 0 AND c.IsActive = 1
						GROUP BY c.PkID, c.CategoryName, c.ParentID, c2.PkID
						UNION 
						SELECT c.PkID, c.CategoryName, c.ParentID, c2.CategoryName as Sort, c3.PkID as Selected
						FROM " . HC_TblPrefix . "categories c 
							LEFT JOIN " . HC_TblPrefix . "categories c2 ON (c.ParentID = c2.PkID)
							LEFT JOIN " . HC_TblPrefix . "categories c3 ON (c.PkID = c3.PkID ".$cQuery.")
							LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (c.PkID = ec.CategoryID)
						WHERE c.ParentID > 0 AND c.IsActive = 1
						GROUP BY c.PkID, c.CategoryName, c.ParentID, c2.CategoryName, c3.PkID
						ORDER BY Sort, ParentID, CategoryName");
		if(!hasRows($result))
			return 0;
		
		$cols = ($cols > 0) ? $cols : 1;
		$cnt = 1;
		echo (($mnu == 1) ? '<span>
			[ <a href="javascript:;" onclick="checkAllArray(\'hcFilter\', \'catID[]\');document.getElementById(\'hcFilter\').submit();return false;" rel="nofollow">'.$hc_lang_core['AllLink'].'</a>
			| <a href="javascript:;" onclick="uncheckAllArray(\'hcFilter\', \'catID[]\');document.getElementById(\'hcFilter\').submit();return false;" rel="nofollow">'.$hc_lang_core['NoneLink'].'</a> ]
		</span>':'').'
		<form name="hcFilter" id="hcFilter" method="post" action="'.CalRoot.'/filter.php">
		<input name="r" id="r" type="hidden" value="1" />
		<div class="catCol">';
		while($row = mysql_fetch_row($result)){
			if($cnt > ceil(mysql_num_rows($result) / $cols) && $row[2] == 0){
				echo ($cnt > 1) ? '
			</div>' : '';
				echo '
			<div class="catCol">';
				$cnt = 1;}
			
			$sub = ($row[2] != 0) ? ' class="sub"' : '';
			$check = ($row[4] != '') ? 'checked="checked" ' : '';
			
			echo '
			<label for="catID_' . $row[0] . '"'.$sub.'><input onclick="document.getElementById(\'hcFilter\').submit();return false;" name="catID[]" id="catID_'.$row[0].'" type="checkbox" '.$check.'value="'.$row[0].'" />'.cOut($row[1]).'</label>';
			++$cnt;
		}
		echo '
		</div>
		</form>';
	}
	/**
	Output submit event and login as buttons
	*/
	function ou_button_menu(){
		$menu = ou_button_menu_items();
		
		echo '<nav>
		<ul class="nav nav-pills nav-stacked ">';
		foreach($menu as $id => $opts){
			echo '
			<li><a href="'.$opts[0].'" class="menu '.$opts[2].'">'.$opts[1].'</a></li>';}
		echo '
		</ul>
		</nav>';
	}
	function ou_button_menu_items(){
		global $hc_cfg, $hc_lang_core;
	if($hc_cfg[1] == 1)
			$menu_items['submit'] = array(CalRoot.'/index.php?com=submit', $hc_lang_core['Submit'],'hc_mnu_sb');
		if(user_check_status()){
				$menu_items['user_account'] = array(CalRoot.'/index.php?com=acc', $hc_lang_core['Account'],'hc_mnu_usr hc_mnu_usr_ac');
				$menu_items['user_signout'] = array(CalRoot.'/signout.php', $hc_lang_core['SignOut'],'hc_mnu_usr hc_mnu_usr_so');
			} elseif(($hc_cfg[113]+$hc_cfg[114]+$hc_cfg[115]) > 0 && !user_check_status()){
				$menu_items['user_signin'] = array(CalRoot.'/index.php?com=signin', $hc_lang_core['SignIn'],'hc_mnu_usr hc_mnu_usr_si');
			}
		return $menu_items;

	}
	
	/**
	 * Output public calendar menu default markup.
	 * @since 2.0.0
	 * @version 2.2.1
	 * @return void
	 */
	function ou_cal_menu(){
		$menu = ou_cal_menu_items();
		
		echo '<nav>
		<ul class="nav nav-pills nav-stacked ">';
		foreach($menu as $id => $opts){
			echo '
			<li><a href="'.$opts[0].'" class="menu '.$opts[2].'">'.$opts[1].'</a></li>';}
		echo '
		</ul>
		</nav>';
	}
	/**
	 * Generate public calendar menu option array. Structure: Item Name => array(link url,link text,default core css classes)
	 * @since 2.0.0
	 * @version 2.2.1
	 * @return array menu
	 */
	function ou_cal_menu_items(){
		global $hc_cfg, $hc_lang_core;
		
		$menu_items['home'] = array(CalRoot.'/index.php', $hc_lang_core['Events'], 'hc_mnu_e');
		if($hc_cfg[45] == 1 && ($hc_cfg[42] != '' && $hc_cfg[43] != ''))
			$menu_items['venues'] = array(CalRoot.'/index.php?com=location', $hc_lang_core['Locations'],'hc_mnu_v');
		if($hc_cfg[1] == 1)
			$menu_items['submit'] = array(CalRoot.'/index.php?com=submit', $hc_lang_core['Submit'],'hc_mnu_sb');
		$menu_items['search'] = array(CalRoot.'/index.php?com=search', $hc_lang_core['Search'], 'hc_mnu_se');
		if($hc_cfg[54] == 1)
			$menu_items['newsletter'] = array(CalRoot.'/index.php?com=newsletter', $hc_lang_core['Newsletter'],'hc_mnu_n');
		$menu_items['tools'] = array(CalRoot.'/index.php?com=tools', $hc_lang_core['Tools'],'hc_mnu_t');
		if($hc_cfg[97] == 1)
			$menu_items['digest'] = array(CalRoot.'/index.php?com=digest', $hc_lang_core['WhatsNew'],'hc_mnu_d');
		if(user_check_status()){
			$menu_items['user_account'] = array(CalRoot.'/index.php?com=acc', $hc_lang_core['Account'],'hc_mnu_usr hc_mnu_usr_ac');
			$menu_items['user_signout'] = array(CalRoot.'/signout.php', $hc_lang_core['SignOut'],'hc_mnu_usr hc_mnu_usr_so');
		} elseif(($hc_cfg[113]+$hc_cfg[114]+$hc_cfg[115]) > 0 && !user_check_status()){
			$menu_items['user_signin'] = array(CalRoot.'/index.php?com=signin', $hc_lang_core['SignIn'],'hc_mnu_usr hc_mnu_usr_si');
		}
		
		return $menu_items;
		
	}
/**
	 * Output wall calendar style monthly mini-calendar. Writes cache files if not currently available.
	 * @since 2.0.0
	 * @version 2.0.0
	 * @param string $date [optional] calendar month to create (Default: current browse date)
	 * @return void
	 */
	function ou_mini_cal_month($date = ''){
		global $lID, $favQ1, $favQ2, $hc_cfg, $hc_lang_config;
		
		$year = HCYEAR;
		$month = HCMONTH;
		if($date != ''){
			$year = date("Y",strtotime($date));
			$month = date("m",strtotime($date));
		}
		
		if(!file_exists(HCPATH.'/cache/mcal_'.$year.'_'.$month)){
			ob_start();
			$fp = fopen(HCPATH.'/cache/mcal_'.$year.'_'.$month, 'w');
			
			$stopDay = date("t", mktime(0,0,0,$month,1,$year));
			$locSaver = $lQuery = $opts = $dow = '';
			$events = array();
			$result = doQuery("SELECT DISTINCT e.StartDate
							FROM " . HC_TblPrefix . "events e
								LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (ec.EventID = e.PkID)
								LEFT JOIN " . HC_TblPrefix . "locations l ON (e.LocID = l.PkID)
							WHERE e.StartDate BETWEEN '" . date("Y-m-d", mktime(0,0,0,$month,1,$year)) . "' AND '" . date("Y-m-d", mktime(0,0,0,$month+1,0,$year)) . "'
							AND e.IsActive = 1 AND e.IsApproved = 1
							ORDER BY e.StartDate");
			
			if(hasRows($result))
				while($row = mysql_fetch_row($result)){
					$events[] = stampToDate($row[0], $hc_cfg[93]);
				}
			
			$navBack = date("Y-m-d", mktime(0,0,0,$month-1,1,$year));
			$navFrwd = date("Y-m-d", mktime(0,0,0,$month+1,1,$year));
			$bak = ($hc_cfg['First'] > strtotime(HCDATE) || (HCDATE <= SYSDATE && $hc_cfg[11] == 0)) ?
				'<a href="#" rel="nofollow">&lt;</a>' :
				'<a href="'.CalRoot . '/?d='.$navBack.$locSaver.'" rel="nofollow">&lt;</a>';
			$fwd = ($hc_cfg['Last'] > strtotime($navFrwd)) ? 
					'<a href="'.CalRoot.'/?d='.$navFrwd.$locSaver.'" rel="nofollow">&gt;</a>':
					'<a href="#" rel="nofollow">&gt;</a>';
			$jmp = ($hc_cfg[11] == 1) ? 12 : 0;
			$stop = $jmp + 12;
			$jumpMonth = date("n", mktime(0,0,0,$month-$jmp,1,$year));
			$jumpYear = date("Y", mktime(0,0,0,$month-$jmp,1,$year));
			$sysDay = date("d", strtotime(SYSDATE));
			$sysMonth = date("m", strtotime(SYSDATE));
			$sysYear = date("y", strtotime(SYSDATE));
			$actJump = date("Y-m-d",mktime(0,0,0,$month,1,$year));
			
			$i = 0;
			while($i <= $stop){
				$jmpDate = date("Y-m-d", mktime(0,0,0,$jumpMonth+$i,1,$jumpYear));
				$select = ($jmpDate == $actJump) ? ' selected="selected"' : '';
				$opts .= '
						<option value="'.CalRoot.'/?d='.$jmpDate.$locSaver.'&amp;b=1"'.$select.'>'.strftime($hc_cfg[92], mktime(0,0,0,$jumpMonth + $i,1,$jumpYear)).'</option>';
				++$i;
			}
			$i = 0;
			while($i < 7){
				$dow .= '
					<td class="dow">' . $hc_lang_config['MiniCalDays'][($hc_cfg[22] + $i) % 7] . '</td>';
				++$i;
			}
			echo '
			<form name="frmJump" id="frmJump" action="#">
			<table class="mini-cal table table-bordered">
				<tr>
					<td class="nav">'.$bak.'</td>
					<td class="title" colspan="5">
					<select name="jumpMonth" id="jumpMonth" aria-label="Select Month for Event Range" onchange="window.location.href=this.value;">'.$opts.'	
					</select>
					</td>
					<td class="nav">'.$fwd.'</td>
				</tr>
				<tr>
					'.$dow.'
				</tr>
				<tr>';
			$i = 0;
			$fillCnt = (((date("w", mktime(0,0,0,$month,1,$year)) - $hc_cfg[22]) + 7) % 7);
			while($i < $fillCnt){
				echo '
					<td class="blank">&nbsp;</td>';
				++$i;
			}
			$i = 1;
			while($i <= $stopDay){
				echo ($i > 1 && ($i + $fillCnt) % 7 == 1) ? '
				</tr>
				<tr>' : '';
				if(in_array($i, $events)) {
					$cell = (SYSDATE == date("Y-m-d",mktime(0,0,0,$month,$i,$year))) ? 'today' : 'events';
					echo '
					<td class="'.$cell.'"><a href="' . CalRoot . '/index.php?d='.$year.'-'.$month.'-'.$i.'&amp;m=1'.$locSaver.'" rel="nofollow">'.strftime($hc_cfg[93], mktime(0,0,0,$month,$i,$year)).'</a></td>';
				} else {
					$cell = (SYSDATE == date("Y-m-d",mktime(0,0,0,$month,$i,$year))) ? 'today' : 'empty';
					echo '
					<td class="'.$cell.'">'.strftime($hc_cfg[93], mktime(0,0,0,$month,$i,$year)).'</td>';
				}
				++$i;
			}
			$i = ($i + $fillCnt - 1) % 7;
			while($i < 7 && $i != 0){
				echo '
					<td class="blank">&nbsp;</td>';
				++$i;
			}
			echo '
				</tr>
			</table>
			</form>';
			fwrite($fp, ob_get_contents());
			fclose($fp);
			ob_end_clean();
		}
		include(HCPATH.'/cache/mcal_'.$year.'_'.$month);
	}
?>