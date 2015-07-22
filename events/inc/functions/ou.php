<?php
	/**
	 * Output public calendar menu default markup.
	 * @since 2.0.0
	 * @version 2.2.1
	 * @return void
	 */
	function ou_cal_menu(){
		$menu = cal_menu_items();
		
		echo '<ul>
			<li><a href="https://projectfork.simons-rock.edu/event-publicity-form" class="menu btn btn-primary">Submit Event</a></li>
		</ul>';
	}
	/**
	 * Output weekly dashboard to a page outside of Helios Calendar.
	 * @since 2.0.1
	 * @version 2.0.1
	 * @param binary $submit include submit event link, 0 = hide , 1 = show (Default:1)
	 * @param binary $ical include iCalendar subscription link, 0 = hide, 1 = show (Default:1)
	 * @param binary $rss include All Events rss feed link, 0 = hide, 1 = show (Default:1)
	 * @param binary $end_time include end time in event lists, 0 = hide, 1 = show (Default:1)
	 * @param string $menu_format menu format string, accepts any supported strftime() format parameters (Default:%a %m/%d)
	 * @return void
	 */
	function ou_event_carousel($submit = 1,$ical = 1,$rss = 1, $end_time = 1, $menu_format = '%a %m/%d'){
		global $hc_cfg, $hc_lang_core;
		
		include(HCLANG.'/public/integration.php');
		
		echo "SYSDATE: " . SYSDATE . "\n";

		if(file_exists(HCPATH.'/cache/int14_'.SYSDATE.'.php')){
			if(count(glob(HCPATH.'/cache/int14_*.php')) > 0)
				foreach(glob(HCPATH.'/cache/int14_*.php') as $file){
					unlink($file);
				}
			
			ob_start();
			$fp = fopen(HCPATH.'/cache/int14_'.SYSDATE.'.php', 'w');
			fwrite($fp, "<?php\n//\tHelios Dashboard Integration Events Cache - Delete this file when upgrading.\n");
			
			//link, category, title, start date, end date, start time, end time, location, description
			//array("05/15/2015 - 05/15/2015","1","test event")
			$result = doQuery("SELECT PkID, Title, Description, StartDate, EndDate, StartTime,  EndTime, TBD, LocID, LocationName  FROM " . HC_TblPrefix . "events
WHERE IsActive = 1 AND IsApproved = 1 AND StartDate Between '".SYSDATE."' AND ADDDATE('".SYSDATE."', INTERVAL 14 DAY)
ORDER BY StartDate, TBD, StartTime, Title, LocationName");
			
			if(hasRows($result)){
				$cur_day = -1;
				$cur_date = '';

				fwrite($fp, "\$hc_next14 = array(\n");
				
				while($row = mysql_fetch_row($result)){
					
					print_r($row);
					$ouTitle = $row[1];
					$ouDesc = $row[2];
					$ouLoc = $row[7];
					//echo "\nouLoc: " . $ouLoc;

					if($cur_date = $row[3]){
						++$cur_day;
						$cur_date = $row[3];
						if($cur_day > 0)
							fwrite($fp, "\t),\n");
						
						fwrite($fp, $cur_day." => array(\n");
					}
					
					if($row[6] == 0){
						$time = ($row[4] != '') ? stampToDate($row[4], $hc_cfg[24]) : '';
						$time .= ($row[5] != '' && $end_time == 1) ? ' - ' . stampToDate($row[5], $hc_cfg[24]) : '';
					} else {
						$time = ($row[6] == 1) ? $hc_lang_int['AllDay'] : $hc_lang_int['TimeTBA'];}
					
					
					fwrite($fp, "\t".$row[0] . " => array(\"".$time."\",\"".stampToDate($row[3], $hc_cfg[15])."\",\"".str_replace("\"","'",cOut($row[1]))."\"),\n");

					
				}
				fwrite($fp, "\t),");
			}
			fwrite($fp, "\n)\n?>");
			fwrite($fp, ob_get_contents());
			fclose($fp);
			ob_end_clean();

		}

		include(HCPATH.'/cache/int14_'.SYSDATE.'.php');
		
	}
?>