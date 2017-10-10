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