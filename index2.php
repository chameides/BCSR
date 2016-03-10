<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simon's Rock: Where Independent Minds Get Their Start</title>
    
    <!-- keep this include right before the closing head tag -->
	<?php include '_inc/head-js-css.php'; ?>

<style>

#introduction {
	background-image:url(/_images/video/homepage-hero-background.jpg);
}
#challenge_inspire {
	background-image:url(/_images/home/sec_place_bg.jpg);
}

</style>

  </head>
  <body id="home" class="has-hero">

  
<?php include '_inc/nav.php'; ?>
    
    

	<section id="introduction">
	<!--
	<script>
    	//document.getElementById('introduction').style.opacity="0";
    </script>
	-->
	
		<div id="intro_vidbg" class="container vidbg">
		  <video id="intro_background_video" class="video-js vjs-default-skin background-video" loop="loop" preload="auto" muted="muted" width="640" height="264" poster="/_images/video/homepage-hero-background.jpg" data-setup="{}">
			<source src="/_images/video/homepage-hero-background.mp4" type='video/mp4' />
			<source src="/_images/video/homepage-hero-background.webm" type='video/webm' />
			<source src="/_images/video/homepage-hero-background.ogv" type='video/ogg' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		  </video>
		</div>
		
		<!--
		<div id="intro_1" class="container abscontainer">
		
			<div class="intro_sub">
			
				<h1 id="intro_h1_1">Where Independent Minds Get Their Start</h1>
			
				<p id="intro_p_1" class="paragraph">At Simon’s Rock, everything is connected. Really.</p>
			
			</div>
			
		</div> --><!-- / intro_1 -->
		
		<div id="intro_2" class="container abscontainer">

			<div class="intro_sub">
			
				<h1 id="intro_h1_2">Where Independent Minds Get <span style="white-space:nowrap">Their Start</span></h1>
			
				<p id="intro_p_2"><span class="welcome-p2">If you’re on the verge of 11th or 12th grade and certain you don’t
				want more of the same, Simon’s Rock can show you what education is like when every moment matters.
				We’re
				the only residential college experience designed for thoughtful, exceptionally motivated students who are 
				ready to start college&nbsp;early.</span></p>

				<a href="video.php" type="button" class="btn btn-primary">Watch Video</a>

			</div>

	    </div><!-- / intro_2 -->
	    
	    <i id="intro_arrow_down" class="fa fa-angle-down"></i>
	
	</section>
	
	<section id="introduction2mobile">
		<div class="container">
			<h1>Where Independent Minds Get <span style="white-space:nowrap">Their Start</span></h1>
			<p><span class="welcome-p2">If you’re on the verge of 11th or 12th grade and certain you don’t
				want more of the same, Simon’s Rock can show you what education is like when every moment matters.
				We’re
				the only residential college experience designed for thoughtful, exceptionally motivated students who are 
				ready to start college&nbsp;early.</span></p>
		</div>
	</section>
	<?php /*
	
	<!--
		Section to be added via CMS if an annoucement is to be made.
		
		Retain the section#announcements, div.container-fluid, and div.row;
		everything inside of that can be removed or changed.
		
	-->
	
	<section id="announcements">
		<div class="container-fluid">
		<div class="row">
	
			<div class="col-md-12">
			
				<h2>This is an h2 over a two-col layout</h2>
		
			</div>

			<div class="col-md-6">
		
				<p class="intro-paragraph">
				This is a p.intro-paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus elementum sodales. Phasellus facilisis
				mattis est sed hendrerit. Quisque quam ligula, aliquam in dolor quis, iaculis viverra erat. Donec lacinia nisi sit amet
				pulvinar efficitur. 
				</p>
			</div>
	
			<div class="col-md-6">
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus elementum sodales. Phasellus facilisis
				mattis est sed hendrerit. Quisque quam ligula, aliquam in dolor quis, iaculis viverra erat. Donec lacinia nisi sit amet
				pulvinar efficitur. Donec suscipit lacus felis, egestas commodo quam ultricies ac. Nam elementum sapien eu tellus
				ultrices, in mollis diam convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
				Curae;
				</p>
		
				<p>
				Duis vel libero vel ante varius consequat vel vel orci. Maecenas cursus ac justo at tempus. Integer ac lectus libero.
				Cras eget ligula augue. Aenean dapibus consequat nibh vel tristique. Quisque vehicula sodales sapien et pulvinar.
				Vivamus rutrum lacus vel sollicitudin efficitur. Pellentesque at nulla vitae orci pulvinar aliquam nec in risus.
				Maecenas aliquam rutrum auctor. 
				</p>
			</div>

		</div>
		</div>
	
	</section>
	*/ ?>
	
	<section id="reputations_outcomes">
	
		<div class="container-fluid">
			
			<!-- 
			The number of items in each row should be roughly equal, 
			but don't need to be exactly equal in width or quantity;
			the js animator handler will adjust the horizontal motion
			so that there won't be a gap.
			
			Each .ro-module div can accommodate either an image, 
			or an H4 and a small amount of text.
			
			Colors are assigned sequentially via CSS.
			-->
			
			<div class="row first-reputations-row"><!-- 16 -->
				<div class="row-inner">
					<div id="first_rep_row_original">
						<div class="ro-module single">
							<img src="/_images/home/sec2-photo1.jpg" class="img-responsive" alt="placeholder">
						</div>
						<div class="ro-module double">
							<h4>275 Acres</h4>
							<p>Our wooded campus is in the heart of the Berkshires, an area known for its natural beauty and rich cultural life.</p>
						</div>
						<div class="ro-module single">
							<img src="/_images/home/sec2-photo3.png" class="img-responsive" alt="placeholder">
						</div>
						<div class="ro-module single">
							<h4>24/7</h4>
							<p>Availability of our professional residence directors who live in each residence hall. </p>
						</div>
						<div class="ro-module double">
							<h4>45 &amp; 27</h4>
							<p>Number of states and countries our students come from (respectively).</p>
						</div>
						<div class="ro-module single">
							<h4>41</h4>
							<p>Number of concentrations (our version of majors).</p>
						</div>
						<div class="ro-module single">
							<h4>95<sup>%</sup></h4>
							<p>Percentage of full-time faculty holding highest degree in their field.</p>
						</div>
						<div class="ro-module double">
							<h4>30<sup>%</sup></h4>
							<p>Percentage of Rockers who are students of color. Princeton Review ranked us #3 in the nation for “lots of race/class interaction.” </p>
						</div>
						<div class="ro-module single">
							<h4>#1</h4>
							<p>Number 1 Small Town in America, as ranked by <em>Smithsonian Magazine</em>.</p>
						</div>
						<div class="ro-module double">
							<figure class="quote">
								 <blockquote>“One of America’s smartest colleges.”</blockquote>
								 <figcaption><cite><em>Business Insider</em> picked Simon’s Rock as a top choice “if you want to be among the most intelligent students in America.”</cite></figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row second-reputations-row"><!-- 12 -->
				<div class="row-inner">
					<div id="second_rep_row_original">
						<div class="ro-module single">
							<img src="/_images/home/sec2-photo2.jpg" class="img-responsive" alt="placeholder">
						</div>
						<div class="ro-module single">
							<h4>8:1</h4>
							<p>Our student–faculty ratio.</p>
						</div>
						<div class="ro-module double">
							<h4>400</h4>
							<p>Number of full-time students. Ninety percent live on campus.</p>
						</div>
						<div class="ro-module double">
							<h4>2.5 hours</h4>
							<p>Our distance from Boston (west) or New York (north).</p>
						</div>
						<div class="ro-module single">
							<h4>16.5</h4>
							<p>Average age of Simon’s Rock students when they enter.</p>
						</div>
						<div class="ro-module single">
							<h4>11</h4>
							<p>Average class size.</p>
						</div>
						<div class="ro-module double">
							<h4>41<sup>%</sup> / 59<sup>%</sup></h4>
							<p>Male / Female</p>
						</div>
						<div class="ro-module single">
							<h4>85<sup>%</sup></h4>
							<p>Percentage of students receiving financial aid.</p>
						</div>
						<div class="ro-module single">
							<h4>1</h4>
							<p>Minimum weekly meetings with your advisor.</p>
						</div>
						<div class="ro-module double">
							<h4>16.5</h4>
							<p>Average age of Simon’s Rock students when they enter.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="viewall_container drop_on_mobile"><a id="reps_outcomes_btn" class="btn btn-primary">View All</a></div>
			<button class="btn btn-link reputations_outcomes_btn leftbtn"><i class="fa fa-chevron-left"></i></button>
			<button class="btn btn-link reputations_outcomes_btn rightbtn"><i class="fa fa-chevron-right"></i></button>
		
		</div>
	
	</section>
	
	<section id="interested_in">
		
		<div id="interested_in_vidbg" class="container vidbg">
		  <!-- If this section will have static backgrounds, use the following as your development guide: -->
			<div id="interested_in_background_video_science" class="interested_in_static_img" style="background-image:url(/_images/home/science-computing-math.jpg)"></div>
			<div id="interested_in_background_video_social" class="interested_in_static_img" style="background-image:url(/_images/home/social-political-studies.jpg)"></div>
			<div id="interested_in_background_video_arts" class="interested_in_static_img" style="background-image:url(/_images/home/performing-and-visual-arts.jpg)"></div>
			<div id="interested_in_background_video_language" class="interested_in_static_img" style="background-image:url(/_images/home/languages-and-literature.jpg)"></div>
			<div id="interested_in_background_video_everything" class="interested_in_static_img" style="background-image:url(/_images/home/everything.jpg)"></div>
			
		  <!-- If this section will have video backgrounds, use the following as your development guide: -->
		  <!--
		  <video id="interested_in_background_video_science" class="video-js vjs-default-skin background-video" preload="auto" muted="true" width="640" height="264" poster="/_images/video/building.jpg" data-setup="{}">
			<source src="/_images/video/building.m4v" type='video/mp4' />
			<source src="/_images/video/building.webm" type='video/webm' />
			<source src="/_images/video/building.ogv" type='video/ogg' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		  </video>
		  <video id="interested_in_background_video_social" class="video-js vjs-default-skin background-video" preload="auto" muted="true" width="640" height="264" poster="/_images/video/ceiling.jpg" data-setup="{}">
			<source src="/_images/video/ceiling.m4v" type='video/mp4' />
			<source src="/_images/video/ceiling.webm" type='video/webm' />
			<source src="/_images/video/ceiling.ogv" type='video/ogg' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		  </video>
		  <video id="interested_in_background_video_arts" class="video-js vjs-default-skin background-video" preload="auto" muted="true" width="640" height="264" poster="/_images/video/dog.jpg" data-setup="{}">
			<source src="/_images/video/dog.m4v" type='video/mp4' />
			<source src="/_images/video/dog.webm" type='video/webm' />
			<source src="/_images/video/dog.ogv" type='video/ogg' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		  </video>
		  <video id="interested_in_background_video_language" class="video-js vjs-default-skin background-video" preload="auto" muted="true" width="640" height="264" poster="/_images/video/printer.jpg" data-setup="{}">
			<source src="/_images/video/printer.m4v" type='video/mp4' />
			<source src="/_images/video/printer.webm" type='video/webm' />
			<source src="/_images/video/printer.ogv" type='video/ogg' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		  </video>
		  <video id="interested_in_background_video_everything" class="video-js vjs-default-skin background-video" preload="auto" muted="true" width="640" height="264" poster="/_images/video/whiteboard.jpg" data-setup="{}">
			<source src="/_images/video/whiteboard.m4v" type='video/mp4' />
			<source src="/_images/video/whiteboard.webm" type='video/webm' />
			<source src="/_images/video/whiteboard.ogv" type='video/ogg' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		  </video>
		  -->
		</div>

		<div class="container abscontainer" id="callouts_abscontainer">
			<div class="row">
				<div class="col-md-6">
					<h2>I'm interested in:</h2>
					<div class="interested_in_btn_container_parent">
						<div class="interested_in_btn_container_child">
							<div id="interested_in_btn_container_replicant">
								<button id="interested_in_science_btn" class="interested_in interested_in_science_btn btn btn-link">Science, Mathematics &<br>Computing</button>
								<button id="interested_in_social_btn" class="interested_in interested_in_social_btn btn btn-link">Social & Political<br>Studies</button>
								<button id="interested_in_arts_btn" class="interested_in interested_in_arts_btn btn btn-link">Performing &<br>Visual Arts</button>
								<button id="interested_in_language_btn" class="interested_in interested_in_language_btn btn btn-link">Languages &<br>Literature</button>
								<button id="interested_in_everything_btn" class="interested_in interested_in_everything_btn btn btn-link">Everything</button>
							</div>
							<div id="interested_in_container_clones">
							</div>
						</div>
					</div>
				</div><!-- col-md-6 -->
				<div class="col-md-6">
					<div class="callout-container" id="science_callout_container">
						<div class="callout-inner">
							<div class="callout-inner-inner">
								<small>CLASS SPOTLIGHT</small>
								<h3>Science 101</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
								dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
					
								<a href="#" class="btn btn-primary">SCIENCE, MATHEMATICS, <br class="hide-for-small">&amp; COMPUTING</a>
							</div>
						</div>
					</div><!-- callout-container -->
					<div class="callout-container" id="social_callout_container">
						<div class="callout-inner">
							<div class="callout-inner-inner">
								<small>CLASS SPOTLIGHT</small>
								<h3>Social 101</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
								dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
					
								<a href="#" class="btn btn-primary">SOCIAL &AMP; POLITICAL STUDIES</a>
							</div>
						</div>
					</div><!-- callout-container -->
					<div class="callout-container" id="arts_callout_container">
						<div class="callout-inner">
							<div class="callout-inner-inner">
								<small>CLASS SPOTLIGHT</small>
								<h3>Dance 101</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
								dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
					
								<a href="#" class="btn btn-primary">PERFORMING & VISUAL ARTS</a>
							</div>
						</div>
					</div><!-- callout-container -->
					<div class="callout-container" id="language_callout_container">
						<div class="callout-inner">
							<div class="callout-inner-inner">
								<small>CLASS SPOTLIGHT</small>
								<h3>Literature 101</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
								dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
					
								<a href="#" class="btn btn-primary">LANGUAGES &AMP; LITERATURE</a>
							</div>
						</div>
					</div><!-- callout-container -->
					<div class="callout-container" id="everything_callout_container">
						<div class="callout-inner">
							<div class="callout-inner-inner">
								<small>CLASS SPOTLIGHT</small>
								<h3>Everything 101</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
								dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
					
								<a href="#" class="btn btn-primary">EVERYTHING</a>
							</div>
						</div>
					</div><!-- callout-container -->
				</div>
			</div><!-- row -->
		</div>

	</section>

<?php include '_inc/rockers-link.php'; ?>
	
	<section id="challenge_inspire">

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12" id="challenge_inspire_content">
					<a href="video.php" class="btn btn-link playbutton"><i class="fa fa-play"></i></a>
					<h1>A Place to Challenge and Inspire</h1>
					<div class="viewall_container">
						<a class="btn btn-primary">DISCOVER OUR CAMPUS</a>
					</div>
				</div>
			</div><!-- /row -->
		</div><!-- / .container-fluid -->
	</section>

<?php include '_inc/events_carousel.php'; ?>

	<section id="updates">
	
		<div class="container">
		
			<!-- filter the news by subject: Alumni, Students, Faculty & Staff (Alumni will be selected by default). -->
		
			<h2>
				What Our 
				<span id="update_subject">
					<button id="update_subject_btn" class="btn btn-link"></button>
					<span id="update_subject_pseudo_drop">
						<button class="btn btn-link" id="update_subject_pseudo_drop_alumni">Alumni</button>
						<button class="btn btn-link" id="update_subject_pseudo_drop_students">Students</button>
						<button class="btn btn-link" id="update_subject_pseudo_drop_facultystaff">Faculty &amp; Staff</button>
					</span>
				</span>
				Are Up To:
			</h2>
			
			<!-- Populate each list with items and links, leaving the list's IDs intact: -->
			<div id="updates_list_wrapper">
				<ul id="updates_alumni">
					<li><a href="#">NY Times calls Professor Peter Filkin’s translation of The Wall a “patiently loyal rendering”</a></li>
					<li><a href="#">Researching criminal justice at Princeton</a></li>
					<li><a href="#">“Fun Home” will transfer to Broadway in 2015</a></li>
				</ul>

				<ul id="updates_students">
					<li><a href="#">Student headline #1</a></li>
					<li><a href="#">Student headline 2 - Researching criminal justice at Princeton</a></li>
					<li><a href="#">Student headline 3 - “Fun Home” will transfer to Broadway in 2015</a></li>
				</ul>

				<ul id="updates_facultystaff">
					<li><a href="#">Faculty/staff headline #1</a></li>
					<li><a href="#">Faculty Update: Researching criminal justice at Princeton</a></li>
					<li><a href="#">This headline is going to run to multiple lines in order to demonstrate that the height of the container 
					can be set at run/load time. You probably wouldn't actually want a headine this long, but
					the container needs to be able to accommodate.</a></li>
				</ul>
			</div>
			
			<div class="viewall_container">
				<a href="#" class="btn btn-primary">VIEW MORE</a>
			</div>

	    </div><!-- /.container -->

	</section>


	<div class="modal fade" id="introVideoModal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">[Title]</h4>
		  </div>
		  <div class="modal-body">
			<iframe width="1280" height="720" src="https://www.youtube.com/embed/YysT-Fe1RT8" frameborder="0" allowfullscreen></iframe>
		  </div>
		  <div class="modal-footer">
			<a href="#" class="btn btn-primary">CTA LINK</a>
		  </div>
		</div>
	  </div>
	</div>


	<div class="modal fade" id="challengeInspireVideoModal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">A Place to Challenge and Inspire</h4>
		  </div>
		  <div class="modal-body">
			<iframe width="1280" height="720" src="https://www.youtube.com/embed/YysT-Fe1RT8" frameborder="0" allowfullscreen></iframe>
		  </div>
		  <div class="modal-footer">
			<a href="#" class="btn btn-primary">CTA LINK</a>
		  </div>
		</div>
	  </div>
	</div>


<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php'; ?>

	<script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  	<script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.js"></script>
  	<!--<script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.debug.js"></script>-->

	<script>

		/*
		$( window ).load(function() {
						
		});
		*/
		
		$( document ).ready(function() {
		
			//console.log('doc ready');
			
			function squidgevid() {
				var windwidth = $('#intro_vidbg').width();
				var vidwidth = $('#intro_background_video').width();
				//alert(vidwidth);
				var vidoffset = vidwidth/2;
				// document.getElementById('intro_background_video_html5_api').style.marginLeft = '-' + vidoffset + 'px';
				var negativevidoffsetpx = '-' + vidoffset + 'px';
				$('.vidbg video').css({'marginLeft':negativevidoffsetpx,'left':'50%'});
				$('#introduction').animate({opacity:1},750,function(){
					//console.log('faded in');
					$('video').get(0).play();
				});
				setTimeout(function(){ 
					$('#introduction video').fadeTo('slow', 0.5); 
				}, 3000);
				
			}
			squidgevid();
			

			$('#introVideoModal').on('hidden.bs.modal', function (e) {
				$('#introduction video').get(0).play();
			});
			$('#introVideoModal').on('show.bs.modal', function (e) {
				$('#introduction video').get(0).pause();
			});
			
			$( '#first_rep_row_original' ).clone().appendTo( '#reputations_outcomes .first-reputations-row .row-inner' );
			$( '#first_rep_row_original' ).clone().prependTo( '#reputations_outcomes .first-reputations-row .row-inner' );
			$( '#second_rep_row_original' ).clone().appendTo( '#reputations_outcomes .second-reputations-row .row-inner' );
			$( '#second_rep_row_original' ).clone().prependTo( '#reputations_outcomes .second-reputations-row .row-inner' );
			
			$('.first-reputations-row .row-inner').width(0);
			$('.first-reputations-row #first_rep_row_original div').each(function(i){
				var additionalWidth = $(this).width();
				$('.first-reputations-row .row-inner').width( $('.first-reputations-row .row-inner').width() + additionalWidth );
			});
			var firstRepRowWidth = $('.first-reputations-row .row-inner').width();
			$('.first-reputations-row .row-inner').css('left','-750px');
			
			$('.second-reputations-row .row-inner').width(0);
			$('.second-reputations-row #second_rep_row_original div').each(function(i){
				var additionalWidth = $(this).width();
				$('.second-reputations-row .row-inner').width( $('.second-reputations-row .row-inner').width() + additionalWidth );
			});
			var secondRepRowWidth = $('.second-reputations-row .row-inner').width();
			$('.second-reputations-row .row-inner').css('left','-1600px');
			// if you can fit 3+, advance by 2 - if screen size is above or equal to 1125
			// if you can fit 2+, advance by 1 - if screen size is below 1125
			
			if ( $(window).width() >= 1125 ) {
				//console.log('wide');
				var advWidth = $(window).width()/2;
			} else {
				//console.log('less wide');
				var advWidth = $(window).width()/3;
			}
			$('.reputations_outcomes_btn.leftbtn').click(function(){
				var reputationsCurrentLeft = $('.first-reputations-row .row-inner').offset().left;
				if ( reputationsCurrentLeft <= (0 - advWidth) ) {
					$(this).css('display','none');
					var reputationsNewLeft = reputationsCurrentLeft + advWidth;
					$('.first-reputations-row .row-inner, .second-reputations-row .row-inner').animate({
						left:reputationsNewLeft
					},750, function(){
						$('.reputations_outcomes_btn.leftbtn').css({'opacity':'0','display':'block'}).animate({opacity:'0.4'},250);
						shuffleRepsOutcomes(reputationsNewLeft,firstRepRowWidth,secondRepRowWidth);
					});
				}
			});
			$('.reputations_outcomes_btn.rightbtn').click(function(){
				var reputationsCurrentLeft = $('.first-reputations-row .row-inner').offset().left;
				// if current left offset plus screen width is greater than element width...
				if ( ( (reputationsCurrentLeft * -1) + $(window).width() ) < firstRepRowWidth ) {
					$(this).css('display','none');
					var reputationsNewLeft = reputationsCurrentLeft - (advWidth/2);
					$('.first-reputations-row .row-inner, .second-reputations-row .row-inner').animate({
						left:reputationsNewLeft
					},750, function(){
						$('.reputations_outcomes_btn.rightbtn').css({'opacity':'0','display':'block'}).animate({opacity:'0.4'},250);
						shuffleRepsOutcomes(reputationsNewLeft,firstRepRowWidth,secondRepRowWidth);
					});
				}
			});
			function shuffleRepsOutcomes(reputationsNewLeft,firstRepRowWidth,secondRepRowWidth) {
				if ( (reputationsNewLeft * -1) < firstRepRowWidth*.33 ) {
					// move the element exactly one third its width to the left so that we're looking at the middle
					$('.first-reputations-row .row-inner').css({'left':reputationsNewLeft - (firstRepRowWidth/3)});
					$('.second-reputations-row .row-inner').css({'left':reputationsNewLeft - (secondRepRowWidth/3)});
				} else if ( ( (reputationsNewLeft * -1) >= firstRepRowWidth*.33 ) && ( (reputationsNewLeft * -1) < firstRepRowWidth*.66 ) ) {
					// hang tight
				} else {
					// move the element exactly one third its width to the right so that we're looking at the middle
					$('.first-reputations-row .row-inner').css({'left':reputationsNewLeft + (firstRepRowWidth/3)});
					$('.second-reputations-row .row-inner').css({'left':reputationsNewLeft + (secondRepRowWidth/3)});
				}
			}
			/* I'm Interested In... functionality */
			$('.callout-container').hide();
			var calloutContainerBottomPadding = '';
			function interested_in_init() {
				//console.log('firing interested_in_init');
				if ( $('#interested_in_vidbg').css('display') == 'none' ) {
					$('.interested_in_btn_container_child button').addClass('btn-block');
					// remove line breaks from the desktop's ferris wheel control
					$('.interested_in_btn_container_child button br').replaceWith(' ');
					calloutContainerBottomPadding = '60px';
				} else {
					if ( ($(window).width() < 1200) && ($('#interested_in_vidbg').css('display') == 'block') ) {
						//console.log('gt 992, lt 1200');
						calloutContainerBottomPadding = '100%';
						$('.callout-container .callout-inner').height( $('#arts_callout_container').width() );
					} 
					else {
						//console.log('gt 1200');
						calloutContainerBottomPadding = '600px';
						$('.callout-container .callout-inner').height( calloutContainerBottomPadding );
					}
				}
				$('#interested_in_vidbg .video-js, .callout-container, .interested_in_static_img').fadeOut();
				$('#interested_in_vidbg #interested_in_background_video_everything').fadeIn(function(){
					showCallout('everything_callout_container','#interested_in_everything_btn');
				});
			}
			interested_in_init();
			function showCallout(container,caller) {
				//console.log('firing showCallout');
				$('.interested_in').removeClass('focused');
				$(caller).addClass('focused');
				$('.callout-container').hide();
				var thiscontainer = '#' + container;
				if ( $(window).width() < 992 ) {
					$(thiscontainer).css({'display':'block','opacity':'0','padding-bottom':calloutContainerBottomPadding});
					$(thiscontainer + ' .callout-inner-inner').css({'display':'none'});
					$(thiscontainer).css({'opacity':'1','padding-bottom':calloutContainerBottomPadding});
					$(thiscontainer + ' .callout-inner-inner').fadeIn();
				} else {
					$(thiscontainer).css({'display':'block','width':calloutContainerBottomPadding,'padding-bottom':calloutContainerBottomPadding,'opacity':'0'});
					$(thiscontainer + ' .callout-inner-inner').css({'display':'none'});
					$(thiscontainer).css({'width':calloutContainerBottomPadding,'padding-bottom':calloutContainerBottomPadding,'opacity':'1'});
					$(thiscontainer + ' .callout-inner-inner').fadeIn(750);
				}
			}
			function sizeCallout() {
				//console.log('firing sizeCallout');
				//console.log('window width ' + $(window).width());
				//console.log('interested_in_vidbg display: ' + $('#interested_in_vidbg').css('display') );
				if ( $('#interested_in_vidbg').css('display') == 'none' ) {
					calloutContainerBottomPadding = '60px';
					$('.callout-container').css({'padding-bottom':calloutContainerBottomPadding});
					$('.interested_in_btn_container_child button').addClass('btn-block');
					$('.callout-container .callout-inner').height( 'auto' );
				} else {
					if ( ($(window).width() < 1200) && ($('#interested_in_vidbg').css('display') == 'block') ) {
						//console.log('gt 992, lt 1200');
						calloutContainerBottomPadding = '100%';
						$('.callout-container .callout-inner').height( $('#arts_callout_container').width() );
					} 
					else {
						calloutContainerBottomPadding = '600px';
						$('.callout-container .callout-inner').height( calloutContainerBottomPadding );
					}
					$('.interested_in_btn_container_child button').removeClass('btn-block');
					$('.callout-container').css({'width':calloutContainerBottomPadding,'padding-bottom':calloutContainerBottomPadding});
				}
			}
			$('.interested_in_btn_container_child').on('click','.interested_in_science_btn', function() {
				$('#interested_in_vidbg .video-js, .interested_in_static_img').fadeOut();
				$('#interested_in_vidbg #interested_in_background_video_science').fadeIn(function(){
					showCallout('science_callout_container','#interested_in_science_btn');
				});
				if ( $('#interested_in .video-js').length > 0 ) {
					$('#interested_in_vidbg #interested_in_background_video_science video').get(0).play();
				}
				
			});
			$('.interested_in_btn_container_child').on('click','.interested_in_social_btn', function() {
				$('#interested_in_vidbg .video-js, .interested_in_static_img').fadeOut();
				$('#interested_in_vidbg #interested_in_background_video_social').fadeIn(function(){
					showCallout('social_callout_container','#interested_in_social_btn');
				});
				if ( $('#interested_in .video-js').length > 0 ) {
					$('#interested_in_vidbg #interested_in_background_video_social video').get(0).play();
				}
			});
			$('.interested_in_btn_container_child').on('click','.interested_in_arts_btn', function() {
				$('#interested_in_vidbg .video-js, .interested_in_static_img').fadeOut();
				$('#interested_in_vidbg #interested_in_background_video_arts').fadeIn(function(){
					showCallout('arts_callout_container','#interested_in_arts_btn');
				});
				if ( $('#interested_in .video-js').length > 0 ) {
					$('#interested_in_vidbg #interested_in_background_video_arts video').get(0).play();
				}
			});
			$('.interested_in_btn_container_child').on('click','.interested_in_language_btn', function() {
				$('#interested_in_vidbg .video-js, .interested_in_static_img').fadeOut();
				$('#interested_in_vidbg #interested_in_background_video_language').fadeIn(function(){
					showCallout('language_callout_container','#interested_in_language_btn');
				});
				if ( $('#interested_in .video-js').length > 0 ) {
					$('#interested_in_vidbg #interested_in_background_video_language video').get(0).play();
				}
			});
			$('.interested_in_btn_container_child').on('click','.interested_in_everything_btn', function() {
				$('#interested_in_vidbg .video-js, .interested_in_static_img').fadeOut();
				$('#interested_in_vidbg #interested_in_background_video_everything').fadeIn(function(){
					showCallout('everything_callout_container','#interested_in_everything_btn');
				});
				if ( $('#interested_in .video-js').length > 0 ) {
					$('#interested_in_vidbg #interested_in_background_video_everything video').get(0).play();
				}
			});
			/*
			var interested_in_btn_container_child_height = $('.interested_in_btn_container_child').innerHeight();
			$('.interested_in_btn_container_child').css('bottom',0);
			var interested_in_scroll_diff = interested_in_btn_container_child_height - $('.interested_in_btn_container_parent').innerHeight();
			$('.interested_in_btn_container_child').scroll(function(){
				if ( $(this).scrollTop() >= (interested_in_scroll_diff-2) ) {
					$( '#interested_in_btn_container_replicant' ).clone().appendTo( '#interested_in_container_clones' );
					interested_in_scroll_diff = interested_in_btn_container_child_height - $('.interested_in_btn_container_parent').innerHeight();
				}
				if ( $(this).scrollTop() <= 1 ) {
					$(this).scrollTop( interested_in_btn_container_child_height );
				}
			});
			*/
			
			
			/* The Rockers row functionality is located in app.js */
			
			/* Events Carousel functionality is located in app.js */
			
			/* News and Updates */
			$('#updates_alumni, #updates_students, #updates_facultystaff').fadeOut();
			function updates_init() {
				var updates_alumni_height = $('#updates_alumni').height();
				var updates_students_height = $('#updates_students').height();
				var updates_facultystaff_height = $('#updates_facultystaff').height();
				var updates_max_height = Math.max(updates_alumni_height,updates_students_height,updates_facultystaff_height);
				$('#updates_list_wrapper').height(updates_max_height);
			}
			updates_init();
			var updateNo = 0;
			
			var updatesAnimating = setInterval(function(){ 
				$('#updates ul').fadeOut(200);
				if (updateNo == 0) {
					$('#updates_alumni').fadeIn('fast');
					$('#update_subject_btn').html('Alumni').fadeTo(0.250,1);
					updateNo++;
				}
				else if (updateNo == 1) {
					$('#updates_students').fadeIn('fast');
					$('#update_subject_btn').html('Students').fadeTo(0.250,1);
					updateNo++;
				}
				else if (updateNo == 2) {
					$('#updates_facultystaff').fadeIn('fast');
					$('#update_subject_btn').html('Faculty &amp; Staff').fadeTo(0.250,1);
					updateNo = 0;
				}
			}, 3500);

			$('#update_subject_btn').click(function(){
				clearInterval(updatesAnimating);
				$('#update_subject_pseudo_drop').fadeIn();
				$(this).width( $('#update_subject_pseudo_drop_facultystaff').width() ).fadeTo(0.250,0.0001);
			});
			$('#update_subject_pseudo_drop').mouseleave(function(){
				$('#update_subject_pseudo_drop').fadeOut();
				$('#update_subject_btn').width('auto').fadeTo(0.250,1);
			});
			$('#update_subject_pseudo_drop button').click(function(){
				$('#updates ul').fadeOut(200);
				if ( $(this).attr('id') == 'update_subject_pseudo_drop_alumni' ) {
					$('#updates_alumni').fadeIn('fast');
					$('#update_subject_btn').html('Alumni').fadeTo(0.250,1);
				}
				if ( $(this).attr('id') == 'update_subject_pseudo_drop_students' ) {
					$('#updates_students').fadeIn('fast');
					$('#update_subject_btn').html('Students').fadeTo(0.250,1);
				}
				if ( $(this).attr('id') == 'update_subject_pseudo_drop_facultystaff' ) {
					$('#updates_facultystaff').fadeIn('fast');
					$('#update_subject_btn').html('Faculty &amp; Staff').fadeTo(0.250,1);
				}
				$('#update_subject_pseudo_drop').fadeOut();
			});

			$(window).on('debouncedresize', function( event ) {
				//console.log('debouncing - intro and interested');
				squidgevid();
				sizeCallout(); // - scrolling causes this to fire.
				updates_init();
			});


		}); // end of the $(document).ready()



		function scrollReputationRowsIntoView(){
			if ( $(window).width() < 768 ) {
				$('.first-reputations-row').scrollLeft( $('.first-reputations-row .row-inner').width()/2 );
				$('.second-reputations-row').scrollLeft( $('.second-reputations-row .row-inner').width()/2 );
				$('.first-reputations-row .row-inner, .second-reputations-row .row-inner').animate({left:0},750);
			} else {
				$('.first-reputations-row .row-inner, .second-reputations-row .row-inner').animate({left:0-($('.ro-module.single').width()*3)},750);
			}
		};

		var controller;
		$(document).ready(function($) {
				
			var isMobile = ( function(a) { return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)) }) ( navigator.userAgent || navigator.vendor || window.opera);

			//console.log('$ ready');
			
			var windowheight = $('#introduction').height();
			
			// init controller
			controller = new ScrollMagic();
			

			if ( $(window).width() < 768 ) {
				//console.log('narrow window');
				var scene1 = new ScrollScene({duration: 1})
					.setPin('#introduction')
					.addTo(controller);
				
				// Scene 4 - pause the video when intro is past the nav
				// build scene
				var scene4 = new ScrollScene({triggerElement: '#introduction', duration: windowheight})
					.on('enter leave', function(e){
						if (e.type == 'leave') {
							$('#introduction video').get(0).pause();
						} else {
							$('#introduction video').get(0).play();
						}
					})
					.addTo(controller);
			
			} else {
				//console.log('wide window');
				/* 
				If the hero were to have a Scroll Magic Reveal, you'd need this code:
				
				// Scene 1 - keep intro in place
				var scene1 = new ScrollScene({duration: windowheight})
					.setPin('#introduction')
					.addTo(controller);


				// Scene 2/Tween 1 - the first intro statement
				// build tween for first intro statement
				var tween_intro_1 = TweenMax.fromTo('#intro_1', 0.5, 
						{'opacity' : '1', 'display' : 'block', 'top' : '0px'},
						{'opacity' : '0', 'display' : 'none', 'top' : '-100px'}
					);
				// build scene
				var scene2 = new ScrollScene({duration: windowheight/2}).setTween(tween_intro_1).addTo(controller);

			
				// Scene 3 / Tween 2 - the second intro statement
				// build tween for second intro statement
				var tween_intro_2 = TweenMax.fromTo('#intro_2', 0.5, 
						{'opacity' : '0', 'display' : 'none', 'top' : '100px'},
						{'opacity' : '1', 'display' : 'block', 'top' : '0px'}
					);
				// build scene
				var scene3 = new ScrollScene({duration: windowheight/2}).setTween(tween_intro_2).addTo(controller);
				// Scene 4 - pause the video when intro is past the nav
				// build scene
				var scene4 = new ScrollScene({triggerElement: '#introduction', duration: windowheight*2})
					.on('enter leave', function(e){
						if (e.type == 'leave') {
							$('#introduction video').get(0).pause();
						} else {
							$('#introduction video').get(0).play();
						}
					})
					.addTo(controller);
					*/
					
					/* If the hero does not have a scroll reveal, 
					we still want to make sure the video pauses when scrolled out of view,
					but the timing doesn't need to be extended: */
				var scene4 = new ScrollScene({triggerElement: '#introduction', duration: windowheight})
					.on('enter leave', function(e){
						if (e.type == 'leave') {
							$('#introduction video').get(0).pause();
						} else {
							$('#introduction video').get(0).play();
						}
					})
					.addTo(controller);
					
					
			} // end if/else ( $(window).width >= 768 )
			
			

			
			// Scene 5 - animate the module rows when Reputations and Outcomes is scrolled into view.
			var scene5 = new ScrollScene({triggerElement: '#reputations_outcomes'})
				.on('enter leave', function(e) {
					scrollReputationRowsIntoView();
					//console.log('scrollReputationRowsIntoView');
				}).addTo(controller);

			if ( $(window).width() >= 768 ) {
				// Scene 6 - pause/play the 'interested in' video when intro is past the nav
				var scene6 = new ScrollScene({triggerElement: '#interested_in', duration: windowheight})
					.on('enter', function(e){
						if ( $('#interested_in .video-js').length > 0 ) {
							$('#interested_in video').get(0).play();
						}
					})
					.on('leave', function(e){
						if ( $('#interested_in .video-js').length > 0 ) {
							$('#interested_in video').get(0).pause();
						}
					})
					.addTo(controller);
				}

			
			
			
			if (!isMobile && $(window).width()>=1200) { 
			// Scene 7 - the "Place to Challenge and Inspire" container
				if ( $(window).width() < $(window).height() ) {
					$('#challenge_inspire').css({'background-size':'auto 150%'});
				}
				var challenge_inspire_height = $('#challenge_inspire').height();
				new ScrollScene({triggerElement:'#challenge_inspire', triggerHook: 'onEnter', duration:challenge_inspire_height})
					.setTween(TweenMax.fromTo('#challenge_inspire', 1, 
						{'background-position': '50% 1%', ease: Linear.easeNone},
						{'background-position': '50% 99%', ease: Linear.easeNone}
						))
					.addTo(controller);
			}
			

			
			
			
			// show indicators (requires debug extension)
			//scene6.addIndicators();
			
		}); // that was the close of the scroll magic js


	</script>

    

  </body>
</html>