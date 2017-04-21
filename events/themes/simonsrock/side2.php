<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}?>
	<aside>
        <div class="sr-mini-cal-filters">
            <a href="/events/index.php?b=2">Today</a><a href="/events/index.php?b=0">Week</a><a href="/events/index.php?b=1">Month</a>
        </div>
		<?php mini_cal_month();?>
		<br />
        <p><strong>Subscribe to Events</strong><br /><?php global $hc_cfg; if($hc_cfg[54] == 1){ echo '<a class="red" href="http://eepurl.com/bW8t6n">Email</a> | '; };?> <a class="red" href="/events/rss/">RSS</a> | <a class="red" href="/events/link/ical.php">iCal</a></p>
		<?php //ou_cal_menu();?>

        <div id="filter">
 <div style="clear:both;">
        <p><a class="red" href="http://simons-rock.edu/admission/admission-events.php">Simon's Rock Admissions on the Road</a> | <a class="red" href="http://simons-rock.edu/alumni/regional-events.php">Alumni Regional Events</a> | <a class="red" href="http://simons-rock.edu/student-life/campus-experience/kilpatrick-athletic-center/kilpatrick-calendar.php">Kilpatrick Athletic Center Calendar</a></p>
</div>

            <?php sr_theme_mini_search('Search Events by Keyword',0);?>
        </div>
        
		<div class="setting"><?php select_language(0);?></div>

		<!-- <p>Theme: <?php select_theme();?></p> -->
		
		<?php theme_links();?>
		
	</aside>
