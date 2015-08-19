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
        <p>Subscribe to this calendar <?php global $hc_cfg; if($hc_cfg[54] == 1){ echo '<a class="red" href="/events/index.php?com=newsletter">Email</a> | '; };?> <a class="red" href="/events/rss/">RSS</a> | <a class="red" href="/events/link/ical.php">iCal</a></p>
		<?php //ou_cal_menu();?>

        <div id="filter">
            <?php sr_theme_mini_search('Search Events by Keyword',0);?>
        </div>
        
		<div class="setting"><?php select_language(0);?></div>

		<!-- <p>Theme: <?php select_theme();?></p> -->
		
		<?php theme_links();?>
		
	</aside>