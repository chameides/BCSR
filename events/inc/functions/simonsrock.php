<?php

    /**
     * Output Event Submission Form
     * @since 2.0.0
     * @version 2.2.1
     * @return void
     */
    function sr_forms_submit(){
        global $hc_cfg, $hc_captchas, $hc_lang_submit, $hc_lang_config, $hc_lang_core, $hc_time;
        
        if(isset($_GET['msg'])){
            switch(cIn(strip_tags($_GET['msg']))){
                case 1 :
                    feedback(1, $hc_lang_submit['Feed01']);
                    echo '
        <p>' . $hc_lang_submit['ThankYou'] . '</p>
        <p><a href="' . CalRoot . '/index.php?com=submit">' . $hc_lang_submit['ClickSubmitAgain'] . '</a></p>
        <p><a href="' . CalRoot . '/">' . $hc_lang_submit['ClickToBrowse'] . '</a></p>';
                    return -1;
                    break;
            }
        }
        echo '
        <p>' . $hc_lang_submit['Notice'] . '</p>
        <p>(<span class="req2">*</span>) = '.$hc_lang_submit['Required2'].'<br />
        (<span class="req3">*</span>) = '.$hc_lang_submit['Required3'].'</p>
        
        <form id="frmEventSubmit" name="frmEventSubmit" method="post" action="'.CalRoot.'/event-submit.php" onsubmit="return validate();">';
        
        if($hc_cfg[65] > 0 && in_array(1, $hc_captchas)){
            echo '
        <fieldset>
            <legend>' . $hc_lang_core['CapLegend'] . '</legend>';
            buildCaptcha();
        echo '
        </fieldset>';}
        
        $user_id = 0;
        $user_net = $user_name = $user_email = $user_categories = '';
        if(user_check_status()){
            $resultU = doQuery("SELECT PkID, NetworkType, NetworkName, Email, Categories FROM " . HC_TblPrefix . "users WHERE PkID = '".cIn($_SESSION['UserPkID'])."'");
            if(hasRows($resultU)){
                $user_id = cOut(mysql_result($resultU,0,0));
                $user_net = cOut(mysql_result($resultU,0,1));
                $user_name = cOut(mysql_result($resultU,0,2));
                $user_email = cOut(mysql_result($resultU,0,3));
                $user_categories = cOut(mysql_result($resultU,0,4));
                
                switch($user_net){
                    case 1:
                        $user_net = 'twitter.png';
                        break;
                    case 2:
                        $user_net = 'facebook.png';
                        break;
                    case 3:
                        $user_net = 'google.png';
                        break;
                }
            }
        }
        
        $si_notice = (($hc_cfg[113]+$hc_cfg[114]+$hc_cfg[115]) > 0 && !user_check_status()) ? '
            <label>&nbsp;</label>
            <p>'.$hc_lang_submit['SignInNotice'].'</p>' : '';
        
        echo (($user_id > 0 && $user_net != '' && $user_name != '' && $user_email != '') ? '
        <fieldset>
            <legend>'.$hc_lang_submit['ContactInfo'].'</legend>
            <p>Event contact information is not displayed in the event listing. If you’d like the information to appear, please add it to the event description.</p>
            <label for="submitName">'.$hc_lang_submit['Name'].'</label>
            <span class="output submit_user">
                <img src="'.CalRoot.'/img/share/'.$user_net.'" width="16" height="16" alt="" /> '.$user_name.'
                <input name="submitName" id="submitName" type="hidden" value="'.$user_name.'" />
            </span>
            <label for="submitEmail">'.$hc_lang_submit['Email'].'</label>
            <span class="output submit_user">
                '.$user_email.'
                <input name="submitEmail" id="submitEmail" type="hidden" value="'.$user_email.'" />
            </span>
            <input name="submitID" id="submitID" type="hidden" value="'.$user_id.'" />
        </fieldset>' : '
        <fieldset>
            <legend>'.$hc_lang_submit['ContactInfo'].'</legend>
            '.$si_notice.'
	    <p>Event contact information is not displayed in the event listing. If you’d like the information to appear, please add it to the event description.</p>
            <label for="submitName">'.$hc_lang_submit['Name'].'</label>
            <input name="submitName" id="submitName" type="text" size="25" maxlength="50" required="required" placeholder="'.$hc_lang_submit['PlaceSubName'].'" value="" />
            <label for="submitEmail">'.$hc_lang_submit['Email'].'</label>
            <input name="submitEmail" id="submitEmail" type="email" size="35" maxlength="75" required="required" placeholder="'.$hc_lang_submit['PlaceSubEmail'].'" value="" />
            <input name="submitID" id="submitID" type="hidden" value="0" />
        </fieldset>');
        
        echo '
        <fieldset>
            <legend>'.$hc_lang_submit['EventDetails'].'</legend>
            <label for="eventTitle">'.$hc_lang_submit['Title'].'</label>
            <input name="eventTitle" id="eventTitle" type="text" size="55" maxlength="42" required="required" placeholder="'.$hc_lang_submit['PlaceTitle'].'" value="" />
            <div class="col-md-12 row">
                <p></p>
                <p><strong>'.$hc_lang_submit['Description'].'</strong></p>
                <p>'.$hc_lang_submit['DescriptionHelper'].'</p>
            </div>  
            <textarea name="eventDescription" id="eventDescription" rows="20" placeholder="'.$hc_lang_submit['PlaceDesc'].'" class="mce_edit"></textarea>
            <label for="cost">'.$hc_lang_submit['Cost'].'</label>
            <input name="cost" id="cost" type="text" size="25" maxlength="50" placeholder="'.$hc_lang_submit['PlaceCost'].'" value="" />
        </fieldset>
        <fieldset>
            <legend>'.$hc_lang_submit['DateTime'].'</legend>
            <label for="eventDate">'.$hc_lang_submit['EventDate'].'</label>
            <input name="eventDate" id="eventDate" type="text" size="12" maxlength="10" required="required" value="'.strftime($hc_cfg[24],strtotime(SYSDATE)).'" />
            <a href="javascript:;" onclick="calx.select(document.getElementById(\'eventDate\'),\'cal1\',\''.$hc_cfg[51].'\');return false;" id="cal1" class="ds calendar" tabindex="-1"></a>
            <label>'.$hc_lang_submit['StartTime'].'</label>
            <input name="startTimeHour" id="startTimeHour" type="text" size="2" maxlength="2" required="required" value="'.date($hc_time['format'],strtotime(SYSDATE.' '.SYSTIME)).'" />
            <span class="frm_ctrls">
                <a href="javascript:;" onclick="chngClock(document.getElementById(\'startTimeHour\'),1,'.$hc_time['input'].')" class="time tup" tabindex="-1"></a>
                <a href="javascript:;" onclick="chngClock(document.getElementById(\'startTimeHour\'),-1,'.$hc_time['input'].')" class="time tdown" tabindex="-1"></a>
            </span>
            <input name="startTimeMins" id="startTimeMins" type="text" size="2" maxlength="2" required="required" value="00" />
            <span class="frm_ctrls">    
                <a href="javascript:;" onclick="chngClock(document.getElementById(\'startTimeMins\'),5,59)" class="time tup" tabindex="-1"></a>
                <a href="javascript:;" onclick="chngClock(document.getElementById(\'startTimeMins\'),-5,59)" class="time tdown" tabindex="-1"></a>
            </span>';
            if($hc_time['input'] == 12){
                echo '
            <select name="startTimeAMPM" id="startTimeAMPM">
                <option '.((date("A") == 'AM') ? 'selected="selected" ' : '').'value="AM">'.$hc_lang_submit['AM'].'</option>
                <option '.((date("A") == 'PM') ? 'selected="selected" ' : '').'value="PM">'.$hc_lang_submit['PM'].'</option>
            </select>';}
            echo '
            <label>'.$hc_lang_submit['EndTime'].'</label>
            <input name="endTimeHour" id="endTimeHour" type="text" size="2" maxlength="2" value="'.date($hc_time['format'],strtotime(SYSDATE.' '.SYSTIME." +1 hour")).'" required="required" />
            <span class="frm_ctrls">    
                <a href="javascript:;" onclick="chngClock(document.getElementById(\'endTimeHour\'),1,'.$hc_time['input'].')" class="time tup" tabindex="-1"></a>
                <a href="javascript:;" onclick="chngClock(document.getElementById(\'endTimeHour\'),-1,'.$hc_time['input'].')" class="time tdown" tabindex="-1"></a>
            </span>
            <input name="endTimeMins" id="endTimeMins" type="text" size="2" maxlength="2" value="00" required="required" />
            <span class="frm_ctrls">
                <a href="javascript:;" onclick="chngClock(document.getElementById(\'endTimeMins\'),5,59)" class="time tup" tabindex="-1"></a>
                <a href="javascript:;" onclick="chngClock(document.getElementById(\'endTimeMins\'),-5,59)" class="time tdown" tabindex="-1"></a>
            </span>';
            if($hc_time['input'] == 12){
                echo '
            <select name="endTimeAMPM" id="endTimeAMPM">
                <option '.((date("A") == 'AM') ? 'selected="selected" ' : '').'value="AM">'.$hc_lang_submit['AM'].'</option>
                <option '.((date("A") == 'PM') ? 'selected="selected" ' : '').'value="PM">'.$hc_lang_submit['PM'].'</option>
            </select>';}
            echo '
            <span class="frm_ctrls">
                <label for="ignoreendtime"><input name="ignoreendtime" id="ignoreendtime" type="checkbox" onclick="togEndTime(this.checked);" />'.$hc_lang_submit['NoEndTime'].'</label>
            </span>
            <label class="blank">&nbsp;</label>
            <span class="frm_ctrls">
                <label for="overridetime"><input type="checkbox" name="overridetime" id="overridetime" onclick="togOverride();" />'.$hc_lang_submit['Override'].'</label>
                <label for="specialtimeall"><input disabled="disabled" type="radio" name="specialtime" id="specialtimeall" value="allday" checked="checked" />'.$hc_lang_submit['AllDay'].'</label>
            </span>
            <label>'.$hc_lang_submit['Recur'].'</label>
            <span class="frm_ctrls">
                <label for="recurCheck"><input name="recurCheck" id="recurCheck" type="checkbox" onclick="togRecur();toggleMe(document.getElementById(\'recur_inpts\'));" /> '.$hc_lang_submit['RecurCheck'].'</label>
            </span>
            <div id="recur_inpts" style="display:none;">
                <label class="blank">&nbsp;</label>
                <span class="frm_ctrls">
                    <label for="recurType1"><input name="recurType" id="recurType1" type="radio" value="daily" disabled="disabled" checked="checked" onclick="togArray(recOpts,\'daily\')" />'.$hc_lang_submit['RecDaily'].'</label>
                    <label for="recurType2"><input name="recurType" id="recurType2" type="radio" value="weekly" disabled="disabled" onclick="togArray(recOpts,\'weekly\')" />'.$hc_lang_submit['RecWeekly'].'</label>
                    <label for="recurType3"><input name="recurType" id="recurType3" type="radio" value="monthly" disabled="disabled" onclick="togArray(recOpts,\'monthly\')" />'.$hc_lang_submit['RecMonthly'].'</label>
                </span>
                <div id="daily" class="frm_ctrls">
                    <label for="recDaily1"><input name="dailyOptions" id="recDaily1" type="radio" checked="checked" disabled="disabled" value="EveryXDays" />'.$hc_lang_submit['Every'].'</label><input id="dailyDays" name="dailyDays" type="number" min="1" max="31" size="3" maxlength="2" value="1" disabled="disabled" />'.$hc_lang_submit['xDays'].'<br />
                    <label for="recDaily2"><input name="dailyOptions" id="recDaily2" type="radio" disabled="disabled" value="WeekdaysOnly" />'.$hc_lang_submit['Daily2'].'</label>
                </div>
                <div id="weekly" class="frm_ctrls" style="display:none;">
                    '.$hc_lang_submit['Every'].'<input name="recWeekly" id="recWeekly" type="number" min="1" max="52" size="3" maxlength="2" value="1" />'.$hc_lang_submit['xWeeks'].'<br />
                    <label for="recWeeklyDay_0"><input id="recWeeklyDay_0" name="recWeeklyDay[]" type="checkbox" value="0" />'.$hc_lang_submit['Sun'].'</label>
                    <label for="recWeeklyDay_1"><input id="recWeeklyDay_1" name="recWeeklyDay[]" type="checkbox" value="1" />'.$hc_lang_submit['Mon'].'</label>
                    <label for="recWeeklyDay_2"><input id="recWeeklyDay_2" name="recWeeklyDay[]" type="checkbox" value="2" />'.$hc_lang_submit['Tue'].'</label>
                    <label for="recWeeklyDay_3"><input id="recWeeklyDay_3" name="recWeeklyDay[]" type="checkbox" value="3" />'.$hc_lang_submit['Wed'].'</label>
                    <label for="recWeeklyDay_4"><input id="recWeeklyDay_4" name="recWeeklyDay[]" type="checkbox" value="4" />'.$hc_lang_submit['Thu'].'</label>
                    <label for="recWeeklyDay_5"><input id="recWeeklyDay_5" name="recWeeklyDay[]" type="checkbox" value="5" />'.$hc_lang_submit['Fri'].'</label>
                    <label for="recWeeklyDay_6"><input id="recWeeklyDay_6" name="recWeeklyDay[]" type="checkbox" value="6" />'.$hc_lang_submit['Sat'].'</label>
                </div>
                <div id="monthly" class="frm_ctrls" style="display:none;">
                    <input name="monthlyOption" id="monthlyOption1" type="radio" checked="checked" value="Day" />'.$hc_lang_submit['Day'].'<input name="monthlyDays" id="monthlyDays" type="number" min="1" max="31" size="3" maxlength="2" value="'.date("d").'" />'.$hc_lang_submit['ofEvery'].'<input name="monthlyMonths" id="monthlyMonths" type="number" min="1" max="12" size="3" maxlength="2" value="1" />'.$hc_lang_submit['Months'].'
                    <br />
                    <span class="frm_ctrls">
                        <input name="monthlyOption" id="monthlyOption2" type="radio" value="Month" />
                        <select name="monthlyMonthOrder" id="monthlyMonthOrder">
                            <option value="1">'.$hc_lang_submit['First'].'</option>
                            <option value="2">'.$hc_lang_submit['Second'].'</option>
                            <option value="3">'.$hc_lang_submit['Third'].'</option>
                            <option value="4">'.$hc_lang_submit['Fourth'].'</option>
                            <option value="0">'.$hc_lang_submit['Last'].'</option>
                        </select>
                        <select name="monthlyMonthDOW" id="monthlyMonthDOW">
                            <option '.((date("w") == 0) ? 'selected="selected"' : '').'value="0">'.$hc_lang_submit['Sun'].'</option>
                            <option '.((date("w") == 1) ? 'selected="selected"' : '').'value="1">'.$hc_lang_submit['Mon'].'</option>
                            <option '.((date("w") == 2) ? 'selected="selected"' : '').'value="2">'.$hc_lang_submit['Tue'].'</option>
                            <option '.((date("w") == 3) ? 'selected="selected"' : '').'value="3">'.$hc_lang_submit['Wed'].'</option>
                            <option '.((date("w") == 4) ? 'selected="selected"' : '').'value="4">'.$hc_lang_submit['Thu'].'</option>
                            <option '.((date("w") == 5) ? 'selected="selected"' : '').'value="5">'.$hc_lang_submit['Fri'].'</option>
                            <option '.((date("w") == 6) ? 'selected="selected"' : '').'value="6">'.$hc_lang_submit['Sat'].'</option>
                        </select>
                        '.$hc_lang_submit['ofEvery'].'<input name="monthlyMonthRepeat" id="monthlyMonthRepeat" type="number" min="1" max="12" size="3" maxlength="2" value="1" />'.$hc_lang_submit['Months'].'
                    </span>
                </div>
                <label for="recurEndDate">'.$hc_lang_submit['RecurUntil'].'</label>
                <input name="recurEndDate" id="recurEndDate" type="text" disabled="disabled" size="10" maxlength="10" required="required" value="" />
                <a href="javascript:;" onclick="calx.select(document.getElementById(\'recurEndDate\'),\'cal2\',\''.$hc_cfg[51].'\');return false;" id="cal2" class="ds calendar" tabindex="-1"></a>
                <label class="blank">&nbsp;</label>
                <div id="recur_chk">
                    <a href="javascript:;" onclick="confirmRecurDates();">'.$hc_lang_submit['ConfirmDate'].'</a>
                </div>
            </div>
        </fieldset>';
        
        
        if($hc_cfg[29] == 1){
        echo '
        <fieldset>
            <legend>'.$hc_lang_submit['EventCat'].'</legend>
            <div class="col-md-12 row">
                <p>'.$hc_lang_submit['CategoriesHelper'].'</p>
            </div>';
        
            $query = (($user_categories != '') ? "SELECT c.PkID, c.CategoryName, c.ParentID, c.CategoryName as Sort, NULL as Selected
                    FROM " . HC_TblPrefix . "categories c 
                        LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (c.PkID = ec.CategoryID)
                    WHERE c.ParentID = 0 AND c.IsActive = 1 AND c.PkID IN (".$user_categories.")
                    GROUP BY c.PkID, c.CategoryName, c.ParentID
                    UNION SELECT c.PkID, c.CategoryName, c.ParentID, c2.CategoryName as Sort, NULL as Selected
                    FROM " . HC_TblPrefix . "categories c 
                        LEFT JOIN " . HC_TblPrefix . "categories c2 ON (c.ParentID = c2.PkID) 
                        LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (c.PkID = ec.CategoryID) 
                    WHERE c.ParentID > 0 AND c.IsActive = 1 AND c.PkID IN (".$user_categories.")
                    GROUP BY c.PkID, c.CategoryName, c.ParentID, c2.CategoryName
                    ORDER BY Sort, ParentID, CategoryName" : NULL);
            
            sr_shared_getCategories('frmEventSubmit',$hc_cfg['CatCols'],$query,$hc_cfg['CatLinks']);
        echo '
        </fieldset>';}
        echo '
        <fieldset>
            <legend>'.$hc_lang_submit['LocationLabel'].'</legend>
            <!--input type="hidden" id="locPreset" name="locPreset" value="0" /-->
            <input type="hidden" id="locPresetName" name="locPresetName" value="" />';
            //location_select();
        echo '
	    <label for="locPreset">Location*</label>
	    <select id="locPreset" name="locPreset" style="max-width:500px;">'.sr_get_locations().'</select>
            <!--div id="custom_notice" style="display:none;">
                <label class="blank">&nbsp;</label>
                <b>'.$hc_lang_core['PresetLoc'].'</b>
            </div>
            <div id="custom">
                <label for="locName">'.$hc_lang_submit['Name'].'</label>
                <input name="locName" id="locName" type="text" size="25" maxlength="50" required="required" placeholder="'.$hc_lang_submit['PlaceLocName'].'" value="" />
                <label for="locAddress">'.$hc_lang_submit['Address'].'</label>
                <input name="locAddress" id="locAddress" type="text" size="30" maxlength="75" placeholder="'.$hc_lang_submit['PlaceLocAddress'].'" value="" /><span class="output req2">*</span>
                <label for="locAddress2">'.$hc_lang_submit['Address2'].'</label>
                <input name="locAddress2" id="locAddress2" type="text" size="25" maxlength="75" placeholder="'.$hc_lang_submit['PlaceLocAddress2'].'" value="" />';
            $inputs = array(1 => array('City','locCity','PlaceLocCity'),2 => array('Postal','locZip','PlaceLocPostal'));
            $first = ($hc_lang_config['AddressType'] == 1) ? 1 : 2;
            $second = ($first == 1) ? 2 : 1;
            echo '
                <label for="' . $inputs[$first][1] . '">' . $hc_lang_submit[$inputs[$first][0]] . '</label>
                <input name="' . $inputs[$first][1] . '" id="' . $inputs[$first][1] . '" type="text" size="20" maxlength="50" placeholder="'.$hc_lang_submit[$inputs[$first][2]].'" value="" /><span class="output req2">*</span>';
            if($hc_lang_config['AddressRegion'] != 0){
                echo '<div class="frmOpt">';
                echo '<label for="locState">' . $hc_lang_config['RegionLabel'] . '</label>';
                $regSelect = $hc_lang_submit['PlaceLocRegion'];
                $state = $hc_cfg[21];
                include(HCLANG.'/'.$hc_lang_config['RegionFile']);
                echo '<span class="output req2">*</span></div>';}
            
            echo '<label for="'.$inputs[$second][1].'">'.$hc_lang_submit[$inputs[$second][0]].'</label>
                <input name="'.$inputs[$second][1].'" id="'.$inputs[$second][1].'" type="text" size="20" maxlength="50" placeholder="'.$hc_lang_submit[$inputs[$second][2]].'" value="" /><span class="output req2">*</span>
                <label for="locCountry">'.$hc_lang_submit['Country'].'</label>
                <input name="locCountry" id="locCountry" type="text" size="10" maxlength="50" placeholder="'.$hc_lang_submit['PlaceLocCountry'].'" value="" />
            </div-->
        </fieldset>
        <!--fieldset>
            <legend>'.$hc_lang_submit['ContactLabel'].'</legend>
            <label for="contactName">'.$hc_lang_submit['Name'].'</label>
            <input name="contactName" id="contactName" type="text" size="20" maxlength="50" placeholder="'.$hc_lang_submit['PlaceContactName'].'" value="" /><span class="output req3">*</span>
            <label for="contactEmail">'.$hc_lang_submit['Email'].'</label>
            <input name="contactEmail" id="contactEmail" type="text" size="30" maxlength="75" placeholder="'.$hc_lang_submit['PlaceContactEmail'].'" value="" /><span class="output req3">*</span>
            <label for="contactPhone">'.$hc_lang_submit['Phone'].'</label>
            <input name="contactPhone" id="contactPhone" type="tel" size="20" maxlength="25" placeholder="'.$hc_lang_submit['PlaceContactPhone'].'" value="" />
            <label for="contactURL">'.$hc_lang_submit['Website'].'</label>
            <input name="contactURL" id="contactURL" type="url" maxlength="100" placeholder="'.$hc_lang_submit['PlaceContactURL'].'" value="" />
        </fieldset-->
        <fieldset>
            <legend>'.$hc_lang_submit['MessageLabel'].'</legend>
            <label for="goadminmessage">'.$hc_lang_submit['Include'].'</label>
            <input name="goadminmessage" id="goadminmessage" type="checkbox" value="" onclick="togThis(this,document.getElementById(\'adminmessage\'));" />
            <div class="col-md-12 row">
                <p></p>
                <p><strong>'.$hc_lang_submit['Message'].'</strong></p>
                <p>'.$hc_lang_submit['MessageHelper'].'</p>
            </div>
            <textarea name="adminmessage" id="adminmessage" rows="7" disabled="disabled" required="required" placeholder="'.$hc_lang_submit['PlaceMsgAdmin'].'"></textarea>
        </fieldset>
        <input name="submit" id="submit" type="submit" value="'.$hc_lang_submit['SubmitEvent'].'" />
        </form>
        <div id="dsCal"></div>';
        makeTinyMCE('',0,0,'eventDescription');
    }

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

/* function sr_shared_getCategories($frmName, $columns, $query = NULL, $showLinks = 1){
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
}*/

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
	<label for="catID">Category</label>
        <select name="catID[]" size="'.mysql_num_rows($result).'" required  multiple>';
    while($row = mysql_fetch_row($result)){

        echo '<option value="'.$row[0].'">'.cOut(substr($row[1],3)).'</option>';
        ++$cnt;
    }
    echo '
        </select>';

    if($cnt == 0 || $showLinks == 0)
        return 0;

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

    /**
     * Output Event Search Results
     * @since 2.0.0
     * @version 2.0.0
     * @return void
     */
    function sr_forms_search_result(){
        global $hc_cfg, $hc_lang_search;
        
        $sQuery = $rQuery = $link = $date = '';
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $startDate = (isset($_POST['startDate'])) ? strtotime(dateToMySQL(cIn(strip_tags($_POST['startDate'])), $hc_cfg[24])) : strtotime(SYSDATE);
            $endDate = (isset($_POST['endDate'])) ? strtotime(dateToMySQL(cIn(strip_tags($_POST['endDate'])), $hc_cfg[24])) : (strtotime(SYSDATE) + (86400 * $hc_cfg[53]));
            $keyword = (isset($_POST['keyword'])) ? strip_tags(str_replace("'","\"",$_POST['keyword'])) : '';
            $keyword .= (isset($_POST['hc_search_keyword'])) ? strip_tags(str_replace("'","\"",urldecode($_POST['hc_search_keyword']))) : '';
            $location = (isset($_POST['locPreset'])) ? cIn(strip_tags($_POST['locPreset'])) : '';
            $city = (isset($_POST['city'])) ? cIn(strip_tags($_POST['city'])) : '';
            $state = (isset($_POST['locState'])) ? cIn(strip_tags($_POST['locState'])) : '';
            $postal = (isset($_POST['postal'])) ? cIn(strip_tags($_POST['postal'])) : '';
            $catIDs = (isset($_POST['catID'])) ? implode(',',array_filter($_POST['catID'],'is_numeric')) : '';
            $doRecur = (isset($_POST['recurSet']) && $_POST['recurSet'] == 1) ? 1 : 0;
        } else {
            $startDate = (isset($_GET['s'])) ? cIn(strip_tags(urldecode($_GET['s']))) : strtotime(SYSDATE);
            $endDate = (isset($_GET['e'])) ? cIn(strip_tags(urldecode($_GET['e']))) : (strtotime(SYSDATE) + (86400 * $hc_cfg[53]));
            $keyword = (isset($_GET['k'])) ? strip_tags(str_replace("\"","'",html_entity_decode(urldecode($_GET['k'])))) : '';
            $location = (isset($_GET['l'])) ? cIn(strip_tags(urldecode(cIn($_GET['l'])))) : '';
            $city = (isset($_GET['c'])) ? cIn(strip_tags(urldecode($_GET['c']))) : '';
            $state = (isset($_GET['st'])) ? cIn(strip_tags(urldecode($_GET['st']))) : '';
            $postal = (isset($_GET['p'])) ? cIn(strip_tags(urldecode($_GET['p']))) : '';
            $catIDs = (isset($_GET['t'])) ? implode(',',array_filter(explode(',',urldecode($_GET['t'])),'is_numeric')) : '';
            $doRecur = (isset($_GET['r']) && $_GET['r'] == 1) ? 1 : 0;
        }
        if($keyword != ''){
            $sQuery .= " AND MATCH(e.Title,e.LocationName,e.Description) AGAINST('" . cIn($keyword,0) . "' IN BOOLEAN MODE) ";
            $link .= "&amp;k=" . urlencode(cleanXMLChars(cOut($keyword),1));
        }
        if(is_numeric($location) && $location > 0){
            $sQuery .= " AND l.PkID = '" . $location  . "'";
            $link .= "&amp;l=" . urlencode($location);
        }
        if($city != ''){
            $sQuery .= " AND (l.IsActive = 1 OR l.IsActive is NULL) AND (e.LocationCity = '" . cIn($city) . "' OR l.City = '" . cIn($city) . "')";
            $link .= "&amp;c=" . urlencode($city);
        }
        if($state != ''){
            $sQuery .= " AND (e.LocationState = '" . cIn($state) . "' or l.State = '" . cIn($state) . "')";
            $link .= "&amp;st=" . urlencode($state);
        }
        if($postal != ''){
            $sQuery .= " AND (e.LocationZip = '" . cIn($postal) . "' or l.Zip = '" . cIn($postal) . "')";
            $link .= "&amp;p=" . urlencode(cIn($postal));
        }
        if($catIDs != ''){
            $sQuery .= " AND (ec.CategoryID In(" . cIn($catIDs) . "))";
            $link .= "&amp;t=" . urlencode($catIDs);
        }
        if($doRecur == 1)
            $rQuery = " AND e.SeriesID IS NULL 
                        UNION
                        SELECT e.PkID, e.Title, e.StartDate, e.StartTime, e.EndTime, e.TBD, e.Image, e.IsFeature, e.HideDays, 
                            e.LocID, e.LocationName, e.LocationCity, e.LocationState, e.LocCountry,
                            l.Name, l.City, l.State, l.Country, e.Cost, e.SeriesID, GROUP_CONCAT(c.CategoryName), e.Description, l.Address2
                        FROM " . HC_TblPrefix . "events e
                            LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (ec.EventID = e.PkID)
                            LEFT JOIN " . HC_TblPrefix . "events e2 ON (e.SeriesID = e2.SeriesID AND e2.StartDate BETWEEN '" . date("Y-m-d",$startDate) . "' AND '" . date("Y-m-d",$endDate) . "' AND e.StartDate > e2.StartDate)
                            LEFT JOIN " . HC_TblPrefix . "locations l ON (e.LocID = l.PkID)
                            LEFT JOIN " . HC_TblPrefix . "categories c ON (ec.CategoryID = c.PkID)
                        WHERE
                            e2.StartDate IS NULL AND e.StartDate BETWEEN '" . date("Y-m-d",$startDate) . "' AND '" . date("Y-m-d",$endDate) . "'"
                            .$sQuery." AND e.IsActive = 1 AND e.IsApproved = 1 AND e.SeriesID IS NOT NULL 
                        GROUP BY e.SeriesID, e.PkID";
        if($doRecur == 0)
            $rQuery = " GROUP BY e.PkId";

            
        $startDate = ($startDate == '' || !is_numeric($startDate)) ? strtotime(SYSDATE) : $startDate;
        $endDate = ($endDate == '' || !is_numeric($endDate)) ? strtotime(SYSDATE)+($hc_cfg[53]*86400) : $endDate;
        
        $result = doQuery("SELECT e.PkID, e.Title, e.StartDate, e.StartTime, e.EndTime, e.TBD, e.Image, e.IsFeature, e.HideDays, 
                            e.LocID, e.LocationName, e.LocationCity, e.LocationState, e.LocCountry,
                            l.Name, l.City, l.State, l.Country, e.Cost, e.SeriesID, GROUP_CONCAT(c.CategoryName), e.Description, l.Address2
                        FROM " . HC_TblPrefix . "events e
                            LEFT JOIN " . HC_TblPrefix . "eventcategories ec ON (ec.EventID = e.PkID)
                            LEFT JOIN " . HC_TblPrefix . "locations l ON (e.LocID = l.PkID)
                            LEFT JOIN " . HC_TblPrefix . "categories c ON (ec.CategoryID = c.PkID)
                        WHERE e.StartDate BETWEEN '" . date("Y-m-d",$startDate) . "' AND '" . date("Y-m-d",$endDate) . "'"
                        .$sQuery." AND e.IsActive = 1 AND e.IsApproved = 1"
                        .$rQuery." ORDER BY StartDate, TBD, StartTime, Title");
        if(!hasRows($result)){
            echo '
            <p>' . $hc_lang_search['NoResults'] . '</p>
            <p><a href="'.CalRoot.'/index.php?com=search">'.$hc_lang_search['SearchAgain'].'</a></p>';
            return 0;}
        
        echo '<p>'.$hc_lang_search['ResultLabel']. ' [<a href="'.CalRoot.'/index.php?com=searchresult&amp;r='.$doRecur."&amp;s=".urlencode($startDate)."&amp;e=".urlencode($endDate).$link.'">'.$hc_lang_search['ResultLink'].'</a>]';
        
        $cnt = 0;
        $row_number = 1;
        $show_images = 1;

        echo '<div id="events">';
        while($row = mysql_fetch_row($result)){
            if (is_null($row[0])) continue; //two matches in query lead to a null
            // if(($date != $row[2])){
            //     $date = $row[2];
            //     echo ($cnt > 0) ? '
            // </ul>' : '';
            //     echo '
            // <header>' . stampToDate($row[2], $hc_cfg[14]) . '</header>
            // <ul>';
            //     $cnt = 1;
            // }

            // $hl = ($cnt % 2 == 0) ? ' class="hl"' : '';
            // if($row[5] == 0){
            //     $time = ($row[3] != '') ? stampToDate($row[3], $hc_cfg[23]) : '';
            //     $time .= ($row[4] != '') ? ' - ' . stampToDate($row[4], $hc_cfg[23]) : '';
            //     $stamp = date("Y-m-d\Th:i:00.0",strtotime($row[2] . trim(' '.$row[3]))) . HCTZ;
            // } else {
            //     $time = ($row[5] == 1) ? $hc_lang_search['AllDay'] : $hc_lang_search['TBA'];
            //     $stamp = date("Y-m-d",strtotime($row[2]));}
            // echo '
            // <li'.$hl.'><time datetime="'.$stamp.'">'.$time.'</time><a href="'.CalRoot . '/index.php?eID='.$row[0].'">'.cOut($row[1]).'</a></li>';
            // ++$cnt;
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
                echo '<h2>' . stampToDate($row[2], '%A, %B %e, %Y') . '</h2><ul>';
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
                $stamp = stampToDate($row[2], '%A, %B %e'); //$hc_cfg[14]
            } else {
                $time = ($row[5] == 1) ? $hc_lang_event['AllDay'] : $hc_lang_event['TBA'];
                $stamp = $row[2];
                $stamp = stampToDate($row[2], '%A, %B %e');
            }
            echo '
            <li '.($cls != '' ? 'class="'.$color_class.' '.trim($cls).'" ':'class="'.$color_class.'"').'itemscope itemtype="http://schema.org/Event">
                <a href="'.CalRoot . '/index.php?eID='.$row[0].'">' //$location var removed for search results
                .'<div class="event-content-container">'. $category . '<h3 itemprop="name">'.cOut($row[1]).'</h3><div class="date-time">
                <span itemprop="startDate" datetime="'.$stamp.'">'. $stamp . ', ' .$time.'</span>
                <span class="location"><i class="fa fa-map-marker"></i> ' . $row[14] .  (($row[22] != '') ? ' - ' . $row[22] : '') . '</span></div><p>'
                .strip_tags(cOut($description, '<br>')) . '<span class="readmore">&nbsp;Read more</span></p></div>'
                .(($show_images == 1 && $row[6] != '') ? '<div class="event-image-container" style="background-image: url('. $row[6] .'); min-width:'
                . ((strlen($row[1]) > 43) ? 325 : 287 ) .'px;"></div>':'').'</a></li>';
            ++$cnt; 
            ++$row_number; //<img itemprop="image" src="'.$row[6].'" class="eimage_b" />
        }
        echo '</ul></div>';
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
            sr_forms_search_result();
            break;
        case 'submit':
            if($eID > 0 || isset($_GET['sID']))
                submit_update();
            else
                sr_forms_submit();
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
        '<span>
            <a href="'.CalRoot.'/index.php?com=search" rel="nofollow">'.$hc_lang_core['AdvSearch'].'</a><p></p>
        </span>
            <h4 class="spotlight">Submit Campus Event</h4>
            <span>
            <a href="http://simons-rock.edu/events/index.php?com=submit">Add an Event</a><br>
            <a href="https://docs.google.com/a/simons-rock.edu/forms/d/e/1FAIpQLSevptmoT_XcN0bkLyA-4xopvYfFUpoBaCXcJi-6ipylXpvYAg/viewform" rel="nofollow">Edit a Published Event</a>
            </span>
            
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
                            l.Name, l.City, l.State, l.Country, e.Cost, e.SeriesID, GROUP_CONCAT(c.CategoryName), e.Description, l.Address2
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

//listings on events
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
            echo '<h2>' . stampToDate($row[2], '%A, %B %e, %Y') . '</h2><ul>';
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
            $stamp = stampToDate($row[2], '%A, %B %e'); //$hc_cfg[14]
        } else {
            $time = ($row[5] == 1) ? $hc_lang_event['AllDay'] : $hc_lang_event['TBA'];
            $stamp = $row[2];
            $stamp = stampToDate($row[2], '%A, %B %e');
        }
        echo '
        <li '.($cls != '' ? 'class="'.$color_class.' '.trim($cls).'" ':'class="'.$color_class.'"').'itemscope itemtype="http://schema.org/Event">
            <a href="'.CalRoot . '/index.php?eID='.$row[0].$location.'">'
            .'<div class="event-content-container">'. $category . '<h3 itemprop="name">'.cOut($row[1]).'</h3><div class="date-time">
            <span itemprop="startDate" datetime="'.$stamp.'">'. $stamp . ', ' .$time.'</span>
            <span class="location"><i class="fa fa-map-marker"></i> ' . $row[14] .  (($row[22] != '') ? ' - ' . $row[22] : '') . '</span></div><p>'
            .strip_tags(str_replace("</p><p>", "<br />", cOut($description)), '<br>') . '<span class="readmore">&nbsp;READ MORE</span></p></div>'
                .(($show_images == 1 && $row[6] != '') ? '<div class="event-image-container" style="background-image: url('. $row[6] .'); min-width:'
                . ((strlen($row[1]) > 43) ? 325 : 287 ) .'px;"></div>':'').'</a></li>'; 

                //'<span class="readmore">&nbsp;READ MORE</span></p></div>'.(($show_images == 1 && $row[6] != '') ? '<div class="event-image-container"><img itemprop="image" src="'.$row[6].'" class="eimage_b" /></div>':'').'</a></li>'
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

function sr_get_locations(){
	$html = "";
	$q = "SELECT PkID, Name, Address, Address2, City, State, Country, Zip FROM hc_locations ORDER BY Name";
	$result = doQuery($q);
    $html .= '<option value="default">Please choose location</option>';
	while($row=mysql_fetch_row($result)){
		$text = $row[1].((!empty($row[3]))?' - '.$row[3]:'').((!empty($row[2]))?' - '.$row[2]:'').((!empty($row[4]) && !empty($row[5]))?' - '.$row[4].', '.$row[5]:'');
		$html .= '<option value="'.$row[0].'">'.$text.'</option>';
	} 

	return $html; 
}
?>
