<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}?>
	<aside>
		

       <div id="filter">
  
	<span style="clear:both;">
	<h4 class="spotlight margin-top-none">Subscribe to Events</h4>
	<?php global $hc_cfg; if($hc_cfg[54] == 1){ echo '<a href="https://signup.e2ma.net/signup/1864845/1809122/">Email</a> | '; };?> <a href="/events/rss/">RSS</a> | <a href="/events/link/ical.php">iCal</a></p>
	<h4 class="spotlight">Browse by Category</h4>
	<a href="https://simons-rock.edu/events/index.php?com=searchresult&r=0&t=36">Special Events</a><br>
	<a href="https://simons-rock.edu/events/index.php?com=searchresult&r=0&t=24">Admissions - On Campus Events</a><br>
	<a href="https://simons-rock.edu/admission/admission-events.php">Admissions on the Road</a><br>
	<a href="https://simons-rock.edu/events/index.php?com=searchresult&r=0&t=26%2C25%2C27%2C28%2C31">Arts and Academics</a><br>
	<a href="https://simons-rock.edu/events/index.php?com=searchresult&r=0&t=29%2C30%2C33">Student Activities</a><br>
	<a href="https://simons-rock.edu/events/index.php?com=searchresult&r=0&t=45">ACE</a><br>
	<a href="https://simons-rock.edu/events/index.php?com=searchresult&r=0&t=32">Athletics</a><br>
	<a href="https://simons-rock.edu/student-life/campus-experience/kilpatrick-athletic-center/kilpatrick-calendar.php">Kilpatrick Athletic Center Classes and Events</a><br>
	<a href="https://simons-rock.edu/events/index.php?com=searchresult&r=0&t=34">Alumni - On Campus Events</a><br>
	<a href="/alumni/alumni-events/index.php">Alumni Regional Events</a>
	<p></p>
</span>
		<h4 class="spotlight">Search</h4>
		<?php sr_theme_mini_search('Search by Keyword',1);?>
	</div>
</aside>
