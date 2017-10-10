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