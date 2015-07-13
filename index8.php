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


#challenge_inspire {
	background-image:url(/_images/home/sec_place_bg.jpg);
}

</style>

  </head>
  <body id="home" class="has-hero">

  
<?php include '_inc/nav.php'; ?>
    
    

	
	<!--
	<script>
    	//document.getElementById('introduction').style.opacity="0";
    </script>
	-->
	
		<!-- Page Hero -->
      <div class="row-full-width full-row-with-video">

        <div class="page-hero-container page-hero-with-video hero-with-nav">
          <div class="page-hero text-center">
            <h1 class="hero-title">Bringing Your Passions Into Focus</h1>
            <p class="hero-text">The subject areas you see here are the intellectual foundation for our 40 interdisciplinary majors—more than many conventional colleges offer.</p>
            <div class="hero-buttons">
              <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#introVideoModal">Watch Video</a>
            </div>
          </div>
        </div>

        <div id="hero-video-container" class="academics">
            <div id="video-wrap">
                <video id="hero-video" preload="metadata" autoplay loop poster="/_images/_why/pond.jpg" style="width: 100%;">
                   <source src="/_images/_why/pond.mp4" type='video/mp4' />
                   <source src="/_images/_why/pond.webm" type='video/webm' />
                   <source src="/_images/_why/pond.ogv" type='video/ogg' />
                </video>
            </div>
        </div>

        <i id="intro_arrow_down" class="fa fa-angle-down"></i>
      
      </div>
      <!-- /Page Hero -->
	

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
	
	<p>hey philip, can you see this?</p>
	
	


	
	



	


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