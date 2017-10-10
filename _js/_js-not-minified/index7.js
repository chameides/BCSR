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