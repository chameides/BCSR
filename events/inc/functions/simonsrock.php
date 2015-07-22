<?php
function sr_theme_hc_header(){
    global $com, $hc_cfg, $hc_lang_core, $meta, $expire, $last_mod;
    
    $title = ($meta['title']) ? $meta['title'].' - ' : '';

    echo ($expire != '') ? '<meta name="expires" content="'.date("r",strtotime($expire)).'">
' : '';
    echo ($last_mod != '') ? '<meta name="last-modified" content="'.date("r",strtotime($last_mod)).'">
' : '';

    $cmnts = ($hc_cfg[106] == 1 && $hc_cfg[56] == 1 && $hc_cfg[25] != '') ? '<link rel="alternate" type="application/rss+xml" title="'.CalName.' '.$hc_lang_core['Comments'].'" href="http://' . $hc_cfg[25] . '.disqus.com/latest.rss" />' : '';
    $can = (!defined('HCCanURL')) ? '' : '
<link rel="canonical" href="'.HCCanURL.'" />';

    $rss = ($hc_cfg[106] == 1) ? '
<link rel="alternate" type="application/rss+xml" title="'.CalName.' '.$hc_lang_core['All'].'" href="' . CalRoot . '/rss/" />
<link rel="alternate" type="application/rss+xml" title="'.CalName.' '.$hc_lang_core['Newest'].'" href="' . CalRoot . '/rss/?s=1" />
<link rel="alternate" type="application/rss+xml" title="'.CalName.' '.$hc_lang_core['Featured'].'" href="' . CalRoot . '/rss/?s=3" />
<link rel="alternate" type="application/rss+xml" title="'.CalName.' '.$hc_lang_core['Popular'].'" href="' . CalRoot . '/rss/?s=2" />':'';

    echo ($hc_cfg[7] == 1) ? '<meta name="robots" content="all, index, follow" />' : '<meta name="robots" content="noindex, nofollow" />';
    echo '
<meta name="description" content="'.substr(str_replace("\"","'",strip_tags($meta['desc'])),0,150).'" />
<meta name="keywords" content="'.$meta['keywords'].'" />
<title>' . $title . CalName. '</title>
<meta name="generator" content="Helios Calendar ' . $hc_cfg[49] . '" /> <!-- leave this for stats -->
<link rel="search" type="application/opensearchdescription+xml" href="'.CalRoot.'/opensearch.php" title="'.CalName.'" />'.$rss.$cmnts.$can;
}

function sr_shared_getCategories($frmName, $columns, $query = NULL, $showLinks = 1){
    global $hc_cfg, $hc_lang_config, $hc_lang_core;

    if(!isset($query))
        $query = "SELECT c.PkID, c.CategoryName, c.ParentID, c.CategoryName as Sort, NULL as Selected
                FROM " . HC_TblPrefix . "categories c 
                    LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (c.PkID = ec.CategoryID)
                WHERE c.ParentID = 0 AND c.IsActive = 1
                GROUP BY c.PkID, c.CategoryName, c.ParentID
                UNION SELECT c.PkID, c.CategoryName, c.ParentID, c2.CategoryName as Sort, NULL as Selected
                FROM " . HC_TblPrefix . "categories c 
                    LEFT JOIN " . HC_TblPrefix . "categories c2 ON (c.ParentID = c2.PkID) 
                    LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (c.PkID = ec.CategoryID) 
                WHERE c.ParentID > 0 AND c.IsActive = 1
                GROUP BY c.PkID, c.CategoryName, c.ParentID, c2.CategoryName
                ORDER BY Sort, ParentID, CategoryName";
    $result = doQuery($query);
    if(!hasRows($result))
        return 0;

    $cnt = 1;
    echo '
        <div class="catCol">';
    while($row = mysql_fetch_row($result)){
        if($cnt > ceil(mysql_num_rows($result) / $columns) && $row[2] == 0){
            echo ($cnt > 1) ? '
        </div>' : '';
            echo '
        <div class="catCol">';
            $cnt = 1;}

        $sub = ($row[2] != 0) ? ' class="sub"' : '';
        $check = ($row[4] != '' ) ? 'checked="checked" ' : '';

        echo '
            <label for="catID_' . $row[0] . '"'.$sub.'><input name="catID[]" id="catID_'.$row[0].'" type="checkbox" '.$check.'value="'.$row[0].'" />'.cOut(substr($row[1],3)).'</label>';
        ++$cnt;
    }
    echo '
        </div>';

    if($cnt == 0 || $showLinks == 0)
        return 0;

    echo '
        <div class="catCtrl">
            [ <a href="javascript:;" onclick="checkAllArray(\'' . $frmName . '\', \'catID[]\');">' . $hc_lang_core['SelectAll'] . '</a>
            &nbsp;|&nbsp; <a href="javascript:;" onclick="uncheckAllArray(\'' . $frmName . '\', \'catID[]\');">' . $hc_lang_core['DeselectAll'] . '</a> ]
        </div>';
}

function sr_forms_news_edit(){
    global $hc_cfg, $hc_lang_news, $hc_captchas, $hc_lang_core;

    if(isset($_GET['msg'])){
        switch ($_GET['msg']){
            case "1" :
                feedback(1,$hc_lang_news['Feed03']);
                break;
            case "2" :
                feedback(2,$hc_lang_news['Feed05']);
                break;
        }
    }

    echo '<p>' . $hc_lang_news['EditInstruct'] . '</p>

    <form name="frmEventNewsletter" id="frmEventNewsletter" method="post" action="' . CalRoot . '/news-edit.php" onsubmit="return validate();">';

    if($hc_cfg[65] > 0 && in_array(4, $hc_captchas)){
        echo '
    <fieldset>
        <legend>' . $hc_lang_core['CapLegend'] . '</legend>';
        buildCaptcha();
    echo '
    </fieldset>';
    }
    echo '
    <fieldset>
        <legend>' . $hc_lang_news['RequestLink'] . '</legend>
        <label for="hc_fz">' . $hc_lang_news['Email'] . '</label>
        <input name="hc_fz" id="hc_fz" type="email" size="45" maxlength="50" placeholder="'.$hc_lang_news['PlaceEmailEdit'].'" value="" required="required" />

        <label for="hc_fy">' . $hc_lang_news['IWant'] . '</label>
        <select name="hc_fy" id="hc_fy">
            <option value="0">' . $hc_lang_news['IWant0'] . '</option>
            <option value="1">' . $hc_lang_news['IWant1'] . '</option>
        </select>
        </fieldset>
    '.fakeFormFields().'
    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="'.$hc_lang_news['SendEditReg'].'" />
    </form>';
}

function sr_forms_news_signup(){
    global $hc_cfg, $hc_lang_config, $hc_lang_news, $hc_captchas, $hc_lang_core;

    if(isset($_GET['d'])){
        $g = cIn(strip_tags($_GET['d']));
        $result = doQuery("SELECT PkID FROM " . HC_TblPrefix . "subscribers WHERE GUID = '".$g."' AND GUID != '' AND IsConfirm = 1");
        if(!hasRows($result))
            return 0;
        echo '
    <p>'.$hc_lang_news['DeleteNotice'].'</p>
    <form name="frmEventNewsletter" id="frmEventNewsletter" method="post" action="' . CalRoot . '/news-edit.php">
    <input name="dID" id="dID" type="hidden" value="'.$g.'" />
    <div class="newsTools"><input type="submit" name="submit" id="submit" value="'.$hc_lang_news['CancelReg'].'" /></div>
    </form>';
        return 0;}

    $t = (isset($_GET['t']) && is_numeric($_GET['t'])) ? cIn(strip_tags($_GET['t'])) : 0;
    if(isset($hc_lang_news['ThankYou'.$t])){
        echo $hc_lang_news['ThankYou'.$t];
        return 0;}

    $submit = $hc_lang_news['SubmitReg'];
    $uID = $occupation = 0;
    $format = 2;
    $firstname = $lastname = $email = $zipcode = $birthyear = $gender = $refer = $yrOpts = '';
    $query = NULL;

    $g = (isset($_GET['u']) && $_GET['u'] != '') ? cIn(strip_tags($_GET['u'])) : '';
    $result = doQuery("SELECT * FROM " . HC_TblPrefix . "subscribers WHERE GUID = '" . $g . "' AND GUID != '' AND IsConfirm = 1");
    $notice = $hc_lang_news['SubInstruct'];
    if(hasRows($result)){
        $notice = $hc_lang_news['SubInstruct2'];
        $submit = $hc_lang_news['UpdateReg'];
        $uID = mysql_result($result,0,0);
        $firstname = mysql_result($result,0,1);
        $lastname = mysql_result($result,0,2);
        $email = mysql_result($result,0,3);
        $occupation = mysql_result($result,0,4);
        $zipcode = mysql_result($result,0,5);
        $addedby = mysql_result($result,0,8);
        $birthyear = mysql_result($result,0,11);
        $gender = mysql_result($result,0,12);
        $refer = mysql_result($result,0,13);
        $format = mysql_result($result,0,14);
        $query = "SELECT c.PkID, c.CategoryName, c.ParentID, c.CategoryName as Sort, uc.UserID as Selected
                FROM " . HC_TblPrefix . "categories c
                    LEFT JOIN " . HC_TblPrefix . "categories c2 ON (c.PkID = c2.PkID)
                    LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (c.PkID = ec.CategoryID)
                    LEFT JOIN " . HC_TblPrefix . "subscriberscategories uc ON (uc.CategoryID = c.PkID AND uc.UserID = '" . $uID . "')
                WHERE c.ParentID = 0 AND c.IsActive = 1
                GROUP BY c.PkID, c.CategoryName, c.ParentID, uc.UserID
                UNION
                SELECT c.PkID, c.CategoryName, c.ParentID, c2.CategoryName as Sort, uc.UserID as Selected
                FROM " . HC_TblPrefix . "categories c
                    LEFT JOIN " . HC_TblPrefix . "categories c2 ON (c.ParentID = c2.PkID)
                    LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (c.PkID = ec.CategoryID)
                    LEFT JOIN " . HC_TblPrefix . "subscriberscategories uc ON (uc.CategoryID = c.PkID AND uc.UserID = '" . cIn($uID) . "')
                WHERE c.ParentID > 0 AND c.IsActive = 1
                GROUP BY c.PkID, c.CategoryName, c.ParentID, c2.CategoryName, uc.UserID
                ORDER BY Sort, ParentID, CategoryName";
    }

    if(isset($_GET['msg'])){
        switch ($_GET['msg']){
            case "1" :
                feedback(2,$hc_lang_news['Feed04']);
                break;
        }
    }

    $yearSU = date("Y") - 14;
    for($x=0;$x<=80;$x++){
        $yrOpts .= '<option'.(($yearSU == $birthyear) ? ' selected="selected"' : '').' value="'.$yearSU.'">'.$yearSU.'</option>';
        --$yearSU;}

    echo '
    '.$notice.'

    <form name="frmEventNewsletter" id="frmEventNewsletter" method="post" action="'.CalRoot.'/news-signup.php" onsubmit="return validate();">
    <input name="uID" id="uID" type="hidden" value="'.$uID.'" />
    <input name="gID" id="gID" type="hidden" value="'.$g.'" />';

    if($hc_cfg[65] > 0 && in_array(4, $hc_captchas)){
        echo '
    <fieldset>
        <legend>' . $hc_lang_core['CapLegend'] . '</legend>';
        buildCaptcha();
    echo '
    </fieldset>';
    }
    echo '
    <fieldset>
        <legend>'.$hc_lang_news['Subscriber'].'</legend>
        <label for="hc_f1">'.$hc_lang_news['FName'].'</label>
        <input name="hc_f1" id="hc_f1" type="text" size="20" maxlength="50" placeholder="'.$hc_lang_news['PlaceFName'].'" value="'.$firstname.'" required="required" />
        <label for="hc_f2">'.$hc_lang_news['LName'].'</label>
        <input name="hc_f2" id="hc_f2" type="text" size="30" maxlength="50" placeholder="'.$hc_lang_news['PlaceLName'].'" value="'.$lastname.'" required="required" />
        <label for="hc_f3">'.$hc_lang_news['Email'].'</label>'
        .(($email == '') ? '<input name="hc_f3" id="hc_f3" type="email" size="45" maxlength="75" placeholder="'.$hc_lang_news['PlaceEmail'].'" value="'.$email.'" required="required" />' : 
        '
        <span class="output">'.$email.'</span>
        <input type="hidden" name="hc_f3" id="hc_f3" value="'.$email.'" />').'
        <label for="hc_fa">'.$hc_lang_news['Birth'].'</label>
        <select name="hc_fa" id="hc_fa">
            <option value="0">'.$hc_lang_news['Birth0'].'</option>
            '.$yrOpts.'
        </select>
        <label for="occupation">'.$hc_lang_news['Occupation'].'</label>
        ';
        include(HCLANG.'/'.$hc_lang_config['OccupationFile']);
        echo '
        <label for="hc_fb">'.$hc_lang_news['Gender'].'</label>
        <select name="hc_fb" id="hc_fb">
            <option value="0">'.$hc_lang_news['Gender0'].'</option>
            <option'.(($gender == 1) ? ' selected="selected"' : '').' value="1">'.$hc_lang_news['GenderF'].'</option>
            <option'.(($gender == 2) ? ' selected="selected"' : '').' value="2">'.$hc_lang_news['GenderM'].'</option>
        </select>
        <label for="hc_fc">'.$hc_lang_news['Referral'].'</label>
        <select name="hc_fc" id="hc_fc">
            <option value="0">'.$hc_lang_news['Referral0'].'</option>
            <option'.(($refer == 1) ? ' selected="selected"' : '').' value="1">'.$hc_lang_news['Referral1'].'</option>
            <option'.(($refer == 2) ? ' selected="selected"' : '').' value="2">'.$hc_lang_news['Referral2'].'</option>
            <option'.(($refer == 3) ? ' selected="selected"' : '').' value="3">'.$hc_lang_news['Referral3'].'</option>
            <option'.(($refer == 4) ? ' selected="selected"' : '').' value="4">'.$hc_lang_news['Referral4'].'</option>
            <option'.(($refer == 5) ? ' selected="selected"' : '').' value="5">'.$hc_lang_news['Referral5'].'</option>
            <option'.(($refer == 6) ? ' selected="selected"' : '').' value="6">'.$hc_lang_news['Referral6'].'</option>
            <option'.(($refer == 7) ? ' selected="selected"' : '').' value="7">'.$hc_lang_news['Referral7'].'</option>
        </select>
        <label for="hc_f4">'.$hc_lang_news['Postal'].'</label>
        <input name="hc_f4" id="hc_f4" type="text" size="12" maxlength="10" placeholder="'.$hc_lang_news['PlacePostal'].'" value="'.$zipcode.'" />
    </fieldset>
    <fieldset>
        <legend>'.$hc_lang_news['Subscription'].'</legend>
        <label class="blank">&nbsp;</label>
        <span class="output">'.$hc_lang_news['CategoriesLabel'].'</span>
        <label>'.$hc_lang_news['Categories'].'</label>';		
        sr_shared_getCategories('frmEventNewsletter', $hc_cfg['CatCols'], $query);
    echo '
        <label for="format">'.$hc_lang_news['LinkFormat'].'</label>
        <select name="format" id="format">
            <option'.(($format == 0) ? ' selected="selected"' : '').' value="0">'.$hc_lang_news['LinkFormat0'].'</option>
            <option'.(($format == 1) ? ' selected="selected"' : '').' value="1">'.$hc_lang_news['LinkFormat1'].'</option>
            <option'.(($format == 2) ? ' selected="selected"' : '').' value="2">'.$hc_lang_news['LinkFormat2'].'</option>
        </select>
    </fieldset>';
    $result = doQuery("SELECT mg.PkID, mg.Name, mg.Description, sg.UserID
                    FROM " . HC_TblPrefix . "mailgroups mg
                        LEFT JOIN " . HC_TblPrefix . "subscribersgroups sg ON (mg.PkID = sg.GroupID AND sg.UserID = '" . $uID . "')
                    WHERE mg.IsActive = 1 AND mg.PkID > 1 AND mg.IsPublic = 1
                    ORDER BY Name");
    if(hasRows($result)){
    echo '
    <fieldset class="frm_grp">
        <legend>'.$hc_lang_news['GroupLabel'].'</legend>
        <label for="grpID_1"><input disabled="disabled" checked="checked" name="grpID[]" id="grpID_1" type="checkbox" value="1" /><b>'.$hc_lang_news['GenericNews'].'</b><p>'.$hc_lang_news['GenericNewsDesc'].'</p></label>';
        $cnt = 0;
        while($row = mysql_fetch_row($result)){
            $hl = ($cnt % 2 == 0) ? ' class="hl"' : '';
            echo '
        <label for="grpID_'.$row[0].'"'.$hl.'><input name="grpID[]" id="grpID_'.$row[0].'" type="checkbox" value="'.$row[0].'"'.(($row[3] == $uID && $uID > 0) ? ' checked="checked"' : '').'/>'.cOut('<b>'.$row[1].'</b><p>'.$row[2]).'</p></label>';
            ++$cnt;
        }
    echo '
    </fieldset>';
    }
    echo '
    <div class="newsTools"><input type="submit" class="btn btn-primary" name="submit" id="submit" value="'.$submit.'" /></div>
    </form>';
}
function sr_forms_search(){
    global $hc_cfg, $hc_lang_core, $hc_lang_search, $hc_lang_config;

    $region = ($hc_lang_config['AddressRegion'] != 0) ? ' | <a tabindex="-1" href="javascript:;" onclick="toggleMe(2)" class="legend">'.$hc_lang_config['RegionTitle'] . '</a>' : '';

    echo '
    <p>'.$hc_lang_search['SearchLabel'].'</p>

    <form name="frmEventSearch" id="frmEventSearch" method="post" action="'.CalRoot.'/index.php?com=searchresult" onsubmit="return validate();">
    <input type="hidden" id="locPreset" name="locPreset" value="0" />
    <input type="hidden" id="locPresetName" name="locPresetName" value="" />
    <fieldset>
        <legend>'.$hc_lang_search['DateRange'].'</legend>
        <label>'.$hc_lang_search['Dates'].'</label>
        <input name="startDate" id="startDate" type="text" size="12" maxlength="10" value="'.strftime($hc_cfg[24],strtotime(SYSDATE)).'" required="required" />
        <a href="javascript:;" onclick="calx.select(document.getElementById(\'startDate\'),\'cal1\',\''.$hc_cfg[51].'\');return false;" id="cal1" class="ds calendar" tabindex="-1"></a>
        <span class="output">&nbsp;&nbsp;'.$hc_lang_search['To'].'&nbsp;&nbsp;</span>
        <input name="endDate" id="endDate" type="text" size="12" maxlength="10" value="'.strftime($hc_cfg[24], strtotime(SYSDATE)+($hc_cfg[53]*86400)).'" required="required" />
        <a href="javascript:;" onclick="calx.select(document.getElementById(\'endDate\'),\'cal2\',\''.$hc_cfg[51].'\');return false;" id="cal2" class="ds calendar" tabindex="-1"></a>
    </fieldset>
    <fieldset>
        <legend>'.$hc_lang_search['KeywordLabel'].'</legend>
        <label for="keyword">'.$hc_lang_search['Keywords'].'</label>
        <input name="keyword" id="keyword" type="text" size="50" maxlength="50" placeholder="'.$hc_lang_search['PlaceKeywords'].'" value="" speech x-webkit-speech />
    </fieldset>
    <fieldset>
        <legend>
            <a tabindex="-1" href="javascript:;" onclick="toggleMe(0);" class="legend">' . $hc_lang_search['LocationLabel'] . '</a>
            | <a tabindex="-1" href="javascript:;" onclick="toggleMe(1);" class="legend">' . $hc_lang_search['CityLabel'] . '</a>
            '.$region.'
            | <a tabindex="-1" href="javascript:;" onclick="toggleMe(3)" class="legend">' . $hc_lang_search['PostalLabel'] . '</a>
        </legend>
        <div id="location_div">';
            location_select(false);
    echo '
        </div>
        <div id="city_div" style="display:none;">
            <label for="city">'.$hc_lang_search['City'].'</label>';
    $f = ($hc_cfg[11] == 1) ? 'a':'';
    if(!file_exists(HCPATH.'/cache/selCity'.$f.'.php'))
        buildCache(4,$hc_cfg[11]);
    include(HCPATH.'/cache/selCity'.$f.'.php');
    echo '
        </div>
        <div id="region_div" style="display:none;">
            <label for="locState">'.$hc_lang_config['RegionLabel'].'</label>';	
    $state = $hc_cfg[21];
    $regSelect = $hc_lang_search['RegSelect'];
    $stateDisabled = 1;
    include(HCLANG.'/'.$hc_lang_config['RegionFile']);
    echo '
        </div>
        <div id="postal_div" style="display:none;">
            <label for="postal">'.$hc_lang_search['Postal'].'</label>';
    if(!file_exists(HCPATH.'/cache/selPostal'.$f.'.php'))
        buildCache(5,$hc_cfg[11]);
    include(HCPATH.'/cache/selPostal'.$f.'.php');
    echo '
        </div>
    </fieldset>
    <fieldset>
        <legend>'.$hc_lang_search['CategoryLabel'].'</legend>
        <label>'.$hc_lang_search['Categories'].'</label>';
    sr_shared_getCategories('frmEventSearch', $hc_cfg['CatCols'],NULL,$hc_cfg['CatLinks']);
    echo '
    </fieldset>
    <fieldset>
        <legend>'.$hc_lang_search['RecurringLabel'].'</legend>
        <label for="recurSet">'.$hc_lang_search['RecurSet'].'</label>
        <select name="recurSet" id="recurSet">
            <option value="0">'.$hc_lang_search['RecurSet0'].'</option>
            <option value="1">'.$hc_lang_search['RecurSet1'].'</option>
        </select>
    </fieldset>
    <input type="submit" name="submit" class="btn btn-primary" id="submit" value="'.$hc_lang_search['BeginSearch'].'" />
    </form>
    <div id="dsCal"></div>';
}

function sr_forms_get_form(){
    global $hc_cfg, $eID, $lID;

    if(HCCOM == '')
        return 0;

    switch(HCCOM){
        case 'send':
            send_to_friend();
            break;
        case 'signup':
            sr_forms_news_signup();
            break;
        case 'edit':
            sr_forms_news_edit();
            break;
        case 'filter':
            filter();
            break;
        case 'search':
            sr_forms_search();
            break;
        case 'searchresult':
            search_result();
            break;
        case 'submit':
            if($eID > 0 || isset($_GET['sID']))
                submit_update();
            else
                submit();
            break;
        case 'rsvp':
            rsvp();
            break;
    }
}

function sr_get_side($which = ''){
    global $hc_lang_core;

    $which = cIn(strip_tags($which));
    if(!file_exists(HCPATH . '/themes/' . $_SESSION['Theme'].'/side2'.$which.'.php')){
        echo '<b>'.$_SESSION['Theme'].'</b> '.$hc_lang_core['Missing'].' <i>side'.$which.'.php</i>';
        exit(-1);}
    include_once(HCPATH . '/themes/' . $_SESSION['Theme'] . '/side2'. $which . '.php');
}

function sr_theme_mini_search($holder = '',$button = 0){
    global $hc_lang_core;
    echo '
    <form name="hc_search" id="hc_search" method="post" action="'.CalRoot.'/index.php?com=searchresult"><input type="search" name="hc_search_keyword" id="hc_search_keyword" value=""'.(($holder != '') ? ' placeholder="'.$holder.'"':'').' required="required" speech x-webkit-speech />'
        .(($button == 1) ? '<input type="submit" name="hc_search_submit" id="hc_search_submit" value="'.$hc_lang_core['GoSearch'].'" />':'').
        '<span><a href="'.CalRoot.'/index.php?com=search" rel="nofollow">'.$hc_lang_core['AdvSearch'].'</a> | <a class="red" href="https://projectfork.simons-rock.edu/event-publicity-form">Submit an Event</a></span>
    </form>';
}

function sr_theme_cal_filter($mnu = 1, $cols = 1){
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
        
        //added to allow for filtering of KAC Class events
        $unwanted_cats = [35,37,38,39,40,41];
        $checked_cats = explode(",", $_SESSION['hc_favCat']);
        
        for($i = 0; $i < count($unwanted_cats); $i++){
            if (in_array($unwanted_cats[$i], $checked_cats)){
                $unwanted_cats[$i] = NULL; 
            }
        }
        
        $check = ($row[4] != '' && !in_array($row[0], $unwanted_cats)) ? 'checked="checked" ' : '';

        echo '
        <label for="catID_' . $row[0] . '"'.$sub.'><input onclick="document.getElementById(\'hcFilter\').submit();return false;" name="catID[]" id="catID_'.$row[0].'" type="checkbox" '.$check.'value="'.$row[0].'" />'.substr(cOut($row[1]),3).'</label>';
        ++$cnt;
    }
    echo '
    </div>
    </form>';
}

function sr_event_browse_valid($sort_featured = 1, $nav_function = 'event_browse_nav'){
    global $lID, $hc_cfg, $hc_lang_event, $favQ1, $favQ2, $resultEB, $myNav;

    $location = $lQuery = '';
    if($lID > 0){
        $location = '&amp;lID=' . $lID;
        $lQuery = " AND e.LocID = '" . $lID . "'";
    }
    
    //added to allow for filtering of KAC Class events
    $unwanted_cats = [35,37,38,39,40,41];
    $unwanted_cats = implode(",",$unwanted_cats);
    $custom_filter = (isset($_SESSION['hc_favCat'])) ? '' : ' AND c.PkID NOT IN ('.cIn($unwanted_cats).') ' ;

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
        $myNav = call_user_func($nav_function,$startDate,$endDate,$window,$location);

        $resultEB = doQuery("SELECT e.PkID, e.Title, e.StartDate, e.StartTime, e.EndTime, e.TBD, e.Image, e.IsFeature, e.HideDays, 
                            e.LocID, e.LocationName, e.LocationCity, e.LocationState, e.LocCountry,
                            l.Name, l.City, l.State, l.Country, e.Cost, e.SeriesID, GROUP_CONCAT(c.CategoryName), e.Description
                        FROM " . HC_TblPrefix . "events e
                            LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (e.PkID = ec.EventID)
                            LEFT JOIN " . HC_TblPrefix . "categories c ON (ec.CategoryID = c.PkID)
                            LEFT JOIN " . HC_TblPrefix . "locations l ON (e.LocID = l.PkID) 
                        WHERE e.StartDate BETWEEN '" . date("Y-m-d", $sqlStart) . "' AND '" . date("Y-m-d", $sqlEnd) . "'"
                        .$lQuery.$favQ1.$favQ2." AND e.IsActive = 1 AND e.IsApproved = 1".$custom_filter."
                        GROUP BY e.PkID, e.Title, e.StartDate, e.StartTime, e.EndTime, e.TBD, e.Image, e.IsFeature, e.HideDays, e.LocID, e.LocationName, e.LocationCity, e.LocationState, e.LocCountry, l.Name, l.City, l.State, l.Country, e.Cost, e.SeriesID
                        ORDER BY e.StartDate, ".($sort_featured == 1 ? "e.IsFeature DESC, ":"")."e.TBD, e.StartTime, e.Title");
    }

}

function sr_colorizer($row_number){
    switch ($row_number % 4){
        case 1:
			return "teal";
			break;
		case 2:
			return "yellow";
			break;
		case 3:
			return "gray";
			break;
		case 0:
			return "red";
			break;
    }
}

function sr_event_browse($show_images = 0){
    global $lID, $hc_cfg, $hc_lang_event, $favQ1, $favQ2, $resultEB, $myNav;

    $location = ($lID > 0) ? '&amp;lID='.$lID : '';
    $cnt = $date = 0;
    $row_number = 1;
    echo $myNav;

    if(!hasRows($resultEB)){
        no_event_notice();
        return 0;}

    while($row = mysql_fetch_row($resultEB)){
        
        //echo print_r($row);
        
        $color_class = sr_colorizer($row_number);
        
        $description = ($hc_cfg[107] > 0) ? clean_truncate($row[21],$hc_cfg[107]) : $row[21];
        
        $categories = explode(",",$row[20]);//filtering out ACE
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
        $category = '<h4>' . $category . '</h4>';

        if(($date != $row[2])){
            $date = $row[2];
            echo ($cnt > 0) ? '</ul>' : '';
            echo '<h2>' . stampToDate($row[2], '%A, %B %d, %Y') . '</h2><ul>';
            $cnt = 1;
        }

        $limit = ($row[8] > 0) ? cOut($row[8]) : $hc_cfg[134];
        $expire = ($limit > 0) ? date("Y-m-d", (strtotime($date) + ($limit*86400))) : '';

        $cls = ($cnt % 2 == 0) ? 'hl' : '';
        $cls .= ($row[7] > 0) ? ' featured' : '';

        if($row[5] == 0){
            $time = ($row[3] != '') ? stampToDate($row[3], $hc_cfg[23]) : '';
            $time .= ($row[4] != '') ? ' - ' . stampToDate($row[4], $hc_cfg[23]) : '';
            //$stamp = date("Y-m-d\Th:i:00",strtotime($row[2] . trim(' '.$row[3]))) . HCTZ;
            $stamp = stampToDate($row[2], '%A, %B %d'); //$hc_cfg[14]
        } else {
            $time = ($row[5] == 1) ? $hc_lang_event['AllDay'] : $hc_lang_event['TBA'];
            $stamp = $row[2];
            $stamp = stampToDate($row[2], '%A, %B %d');
        }
        echo '
        <li '.($cls != '' ? 'class="'.$color_class.' '.trim($cls).'" ':'class="'.$color_class.'"').'itemscope itemtype="http://schema.org/Event">
            <a href="'.CalRoot . '/index.php?eID='.$row[0].$location.'">'
            .(($show_images == 1 && $row[6] != '') ? '<div class="event-image-container"><img itemprop="image" src="'.$row[6].'" class="eimage_b" /></div>':'').'<div class="event-content-container">'. $category . '<h3 itemprop="name">'.cOut($row[1]).'</h3><div class="date-time">
            <span itemprop="startDate" datetime="'.$stamp.'">'. $stamp . ', ' .$time.'</span>
            <span class="location"><i class="fa fa-map-marker"></i> ' . $row[14] . '</span></div><p>'
            .cOut($description) . '<span class="readmore">READ MORE</span></p></div></a></li>';
        ++$cnt;
        ++$row_number;
    }
    echo '
        </ul>
    '.$myNav;
}
function sr_news_link_archive(){
	global $hc_lang_news;
	$result = doQuery("SELECT PkID, Subject, SentDate FROM " . HC_TblPrefix . "newsletters");
		if(hasRows($result)){
	echo '<div class="newsTools">
	<a href="'.CalRoot.'/index.php?com=archive" class="icon news_a">'.$hc_lang_news['NewsOpt0'].'</a></div>';
	}
}
?>