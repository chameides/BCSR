$(document).ready(function($) {


	function squidgevid() {
		var windwidth = $(window).width();
		var vidwidth = $('#learningliberated video').width();
		var vidoffset = vidwidth/2;
		var negativevidoffsetpx = '-' + vidoffset + 'px';
		$('#learningliberated video').css({'marginLeft':negativevidoffsetpx,'left':'50%'});
	}
	squidgevid();
	
	var isMobileWSR = ( function(a) { return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)) }) ( navigator.userAgent || navigator.vendor || window.opera);
	
	Modernizr.load({
  		test: Modernizr.touch
  	});
	
	var touch;
	var autoscrollvar;
	if (Modernizr.touch){
	   touch = true;
	   $('video').remove();
	   if ($(window).width() >= 992) $('#earlycollege_div1 h1').css({'position':'absolute'});
	} else {
	   touch = false;
	   if ( $('#earlycollege_div1').width() >= 992 ) $('#earlycollege_div1 h1').css({'position':'fixed'});
	}
	
	if ( !isMobileWSR && ( $(window).width() >= 992 ) ) {
		$('#fullpage').fullpage({
			verticalCentered: false,
			resize:false,
			scrollBar:true,
			scrollOverflow:false,
			anchors:[],
			autoScrolling:true,
			scrollingSpeed:1250,
		
			onLeave: function(index, nextIndex, direction) {
				//console.log('index: ' + index + ' | nextIndex ' + nextIndex);
				$('.fader').animate({opacity:0},100);
				// #earlycollege_div 
				if (nextIndex == 1) {
					$('#earlycollege_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!touch) $('#earlycollege_div1 .intro_h1_1').css({'position':'fixed'});
				}
				if (nextIndex == 2) {
					$('#earlycollege_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					if (!touch) $('#earlycollege_div1 .intro_h1_1').css({'position':'fixed'});
					$('#earlycollege_div3 .svg-div').css('opacity',0);
					$('#earlycollege_div3 .svg-div img.candle').css('top','73px');
				}
				if (nextIndex == 3) {
					$('#earlycollege_div3 .svg-div').delay( 750 ).animate({opacity:1},250);
				
					var cd = 250;
					$('#earlycollege_div3 .svg-div .c1' ).delay( cd ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c2' ).delay( cd*1.25 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c3' ).delay( cd*1.5 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c4' ).delay( cd*1.75 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c5' ).delay( cd*2 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c6' ).delay( cd*2.25 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c7' ).delay( cd*2.5 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c8' ).delay( cd*2.75 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c9' ).delay( cd*3 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c10' ).delay( cd*3.25 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c11' ).delay( cd*3.5 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c12' ).delay( cd*3.75 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c13' ).delay( cd*4 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c14' ).delay( cd*4.25 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c15' ).delay( cd*4.5 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c16' ).delay( cd*4.75 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c17' ).delay( cd*5 ).animate({'top':'20px'},250);
				
					if (!isMobileWSR && !touch) {
						$('#learningliberated_div1 video').get(0).pause();
						$('#learningliberated_div1 .background-video').hide();
					}
					$('#earlycollege_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				}
				if (nextIndex >= 3) {
					$('#earlycollege_div1 .intro_h1_1').css({'position':'absolute'});
				}
			
				// #learningliberated_div 
				if (nextIndex == 4) {
					//console.log('firing nextIndex 4');
					if (!touch) $('#learningliberated_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250,function(){
						if (!isMobileWSR && !touch) {
								//queue up video
								setTimeout(function(){ 
									$('#learningliberated_div1 .background-video').show('fast');
									//if not paused
									if (!$("body").hasClass("pause-video")) {
										$('#learningliberated_div1 video').get(0).play();
									}
								}, 750);	
						}					
					});			
					$('#learningliberated_div1 .fader').delay( 750 ).animate({opacity:0.5},250);		
					$('#earlycollege_div3 .svg-div').css('opacity',0);
					$('#earlycollege_div3 .svg-div img.candle').css('top','73px');
				}
				if (nextIndex == 5) {
					//console.log('firing nextIndex 5');
					if (!touch) $('#learningliberated_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250,function(){
						if (!isMobileWSR && !touch) {
							//setTimeout(function(){ $('#learningliberated_div1 video').get(0).pause(); }, 3000);
							$('#learningliberated_div1 video').get(0).pause();
							$('#learningliberated_div1 .background-video').hide();
						}			
					});	
					$('#learningliberated_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					$('#learningliberated_div3 .svg-div').delay( 250 ).animate({opacity:0},50).animate({left:'100%'},50);
				}
				if (nextIndex == 6) {
					$('#learningliberated_div3 .svg-div').delay( 750 ).animate({opacity:1},50).animate({left:0},750);
					$('#learningliberated_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				
				}
				if (nextIndex < 4 || nextIndex >= 6) {
					if (!touch) $('#learningliberated_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}
			
				// #realcollege_div 
				if (nextIndex == 7) {
					$('#realcollege_div1 .fader').delay( 750 ).animate({opacity:0.5},250);				
					$('#learningliberated_div3 .svg-div').delay( 250 ).animate({opacity:0},50).animate({left:'100%'},50);
					if (!touch) $('#realcollege_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				}
				if (nextIndex == 8) {
					$('#realcollege_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					if (!touch) $('#realcollege_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					$('#realcollege_div3 .mortar-fader').height(500);
				}
				if (nextIndex == 9) {
					$('#realcollege_div3 .svg-div').delay( 350 ).animate({opacity:0.5},250);
					$('#realcollege_div3 .mortar-fader').delay( 750 ).animate({'height':'36px'},1250);
					$('#realcollege_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				}
				if (nextIndex < 7 || nextIndex >= 9) {
					if (!touch) $('#realcollege_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}

				// #besurrounded_div 
				if (nextIndex == 10) {
					$('#realcollege_div3 .mortar-fader').height(500);
					if (!touch) $('#besurrounded_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				
					$('#besurrounded_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!isMobileWSR && !touch) $('#besurrounded_div2 video').get(0).pause();
				}
				if (nextIndex == 11) {
					$('#besurrounded_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					if (!isMobileWSR && !touch) {		
						//if not paused
						if (!$("body").hasClass("pause-video")) {
							$('#besurrounded_div2 video').get(0).play();
						}
					}		
					$('#besurrounded_div3 .svg-div-2').css({'-webkit-transition': '-webkit-transform 0s','-moz-transition': '-moz-transform 0s','-ms-transition': '-ms-transform 0s','transition': 'transform 0s'}).removeClass('six-o-clock');
					$('#besurrounded_div3 .svg-div-3').css({'-webkit-transition': '-webkit-transform 0s','-moz-transition': '-moz-transform 0s','-ms-transition': '-ms-transform 0s','transition': 'transform 0s'}).removeClass('t1 t2 t3 t4 t5');
					if (!touch) $('#besurrounded_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				}
				if (nextIndex == 12) {
					//$('#besurrounded_div3 .svg-div').delay( 750 ).animate({opacity:0.5},250);
					if (!isMobileWSR && !touch) $('#besurrounded_div2 video').get(0).pause();
					// clock
					$('#besurrounded_div3 .svg-div').delay( 750 ).animate({opacity:1},250);
					$('#besurrounded_div3 .svg-div-2').css({'-webkit-transition': '-webkit-transform 12s','-moz-transition': '-moz-transform 12s','-ms-transition': '-ms-transform 12s','transition': 'transform 12s'}).delay( 1000 ).addClass('six-o-clock');
					$('#besurrounded_div3 .svg-div-3').css({'-webkit-transition': '-webkit-transform 12s','-moz-transition': '-moz-transform 12s','-ms-transition': '-ms-transform 12s','transition': 'transform 12s'}).delay(000).addClass('t1').delay(7000).addClass('t2').delay(7000).addClass('t3').delay(7000).addClass('t4').delay(7000).addClass('t5');
					$('#besurrounded_div3 .btn').delay( 7500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				}
				if (nextIndex < 10 || nextIndex >= 12) {
					if (!touch) $('#besurrounded_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}
			
				// #jumpstart_div 
				if (nextIndex == 13) {
					$('#jumpstart_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					$('#besurrounded_div3 .svg-div-2').css({'-webkit-transition': '-webkit-transform 0s','-moz-transition': '-moz-transform 0s','-ms-transition': '-ms-transform 0s','transition': 'transform 0s'}).removeClass('six-o-clock');
					$('#besurrounded_div3 .svg-div-3').css({'-webkit-transition': '-webkit-transform 0s','-moz-transition': '-moz-transform 0s','-ms-transition': '-ms-transform 0s','transition': 'transform 0s'}).removeClass('t1 t2 t3 t4 t5');
					if (!touch) { 
						$('#jumpstart_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					}
				}
				if (nextIndex == 14) {
					$('#jumpstart_div2 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!touch) $('#jumpstart_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					$('#jumpstart_div3 img').css({opacity:0});
				}
				if (nextIndex == 15) {
					var srd = 750;
					var sro = 0.7;
					$('#jumpstart_div3 #star1').delay(srd).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star2').delay(srd*2).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star3').delay(srd*2.5).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star4').delay(srd*3).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star5').delay(srd*3.25).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star6').delay(srd*3.5).animate({opacity:sro},srd);
					$('#jumpstart_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);				
				}
				if (nextIndex < 13 || nextIndex >= 15) {
					if (!touch) $('#jumpstart_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}
			
				// #yourpeople_div 
				if (nextIndex == 16) {
					$('#yourpeople_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					$('#jumpstart_div3 img').css({opacity:0});
					if (!touch) $('#yourpeople_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				}
				if (nextIndex == 17) {
					$('#yourpeople_div2 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!touch) $('#yourpeople_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					$('#yourpeople_div3 img').css({opacity:0});
				}
				if (nextIndex == 18) {
					if (!isMobileWSR && !touch) { 
						$('#oncearocker_div1 video').get(0).pause(); 
					}

					var ypsrd = 750;
					var ypsro = 0.7;
					$('#yourpeople_div3 #pin0').delay( ypsrd ).animate({opacity:1},250);
					$('#yourpeople_div3 #pin1').delay(ypsrd*1.25).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin2').delay(ypsrd*1.5).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin3').delay(ypsrd*1.75).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin4').delay(ypsrd*2).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin5').delay(ypsrd*2.25).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin6').delay(ypsrd*2.5).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin7').delay(ypsrd*2.75).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin8').delay(ypsrd*3).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin9').delay(ypsrd*3.25).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin10').delay(ypsrd*3.5).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin11').delay(ypsrd*3.75).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin12').delay(ypsrd*4).animate({opacity:ypsro},ypsrd);

					$('#yourpeople_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				}
				if (nextIndex < 16 || nextIndex >= 18) {
					if (!touch) $('#yourpeople_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}
			
				// #oncearocker_div 
				if (nextIndex == 19) {
					$('#oncearocker_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!isMobileWSR && !touch) {
						//if not paused
						if (!$("body").hasClass("pause-video")) {
							$('#oncearocker_div1 video').get(0).play();
						}
					}
					if (!touch) $('#oncearocker_div1 .intro_h1_1').addClass('light-gray');
					$('#yourpeople_div3 img').css({opacity:0});
					if (!touch) $('#oncearocker_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				}
				if (nextIndex == 20) {
					$('#oncearocker_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					if (!isMobileWSR && !touch) { 
						$('#oncearocker_div1 video').get(0).pause();
					}
					$('#oncearocker_div2 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
					if (!touch) $('#oncearocker_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					if (!touch) $('#oncearocker_div1 .intro_h1_1').removeClass('light-gray').addClass('dark-gray');
				}
				if (nextIndex < 19 || nextIndex >= 21) {
					if (!touch) $('#oncearocker_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
					if (!touch) $('#oncearocker_div1 .intro_h1_1').removeClass('dark-gray').addClass('light-gray');
				}
		
			}/*,
			
			afterLoad: function(anchorLink, index) {
				
			}
			*/

		});

		var windowheight = $(window).height();
		//console.log(windowheight);
	
	
		//console.log(' panel height: '+ $('#earlycollege_div1').height() );
		var p_offset;
		if ( windowheight < 800 ) {
		 	p_offset = $('#earlycollege_div1').height() * 0.6;
		} else {
		 	p_offset = $('#earlycollege_div1').height() * 0.5;
		}
		$('.intro_p_1, .intro_p_2').css({'top':p_offset+'px'});

		var isChrome = !!window.chrome && !!window.chrome.webstore;
	
		$('div.subsection-photo, div.subsection-video').each(function(){
			$(this).attr('data-panel', $(this).attr('id') );
			$(this).prepend('<div class="fader"></div>');
			if (touch || isChrome) {
				$(this).css({'background-attachment':'scroll'});
			}
		});
		$('.sublink').hide();
		$('#earlycollege_div1').addClass('active');
		$('#earlycollege_div1 .fader').delay( 750 ).animate({opacity:0.5},750);
	} // end if (!isMobileWSR) 
	
	else {
		$('html, body').css({'overflow-y':'visible','overflow-x':'hidden'});
		$('div.subsection-photo, div.subsection-video').each(function(){
			$(this).prepend('<div class="fader"></div>');
		});
	}
	$('body,html').scrollTop(0);
	
	// for testing:
	//document.title = '2:35 ' + $('#earlycollege_div2').css('height');
	

	
	// We're going to need some JS to set the absolute positions,
	// heights, etc., of a few items.

	if ( $(window).width() < 768 ) {
		// mobile version of this
	} else {
		$('#why_upbutton').click(function(){
			$.fn.fullpage.moveSectionUp();
		});
		$('#why_downbutton').click(function(){
			$.fn.fullpage.moveSectionDown();
		});

	} // end window width conditional

	var firstloadwidth = $(window).width();
	$(window).on('debouncedresize', function( event ) {
		var secondloadwidth = $(window).width();
		if ( (firstloadwidth <= 767) && (secondloadwidth >= 768) ) {
			location.reload(false);
			//console.log('debouce case 1');
		}
		else if ( (firstloadwidth <= 991) && (secondloadwidth >= 992) ) {
			location.reload(false);
			//console.log('debouce case 2');
		}
		else if ( (firstloadwidth <= 1199) && (secondloadwidth >= 1200) ) {
			location.reload(false);
			//console.log('debouce case 3');
		}

		else if ( (firstloadwidth >= 1200) && (secondloadwidth <= 1199) ) {
			location.reload(false);
			//console.log('debouce case 4');
		}
		else if ( (firstloadwidth >= 992) && (secondloadwidth <= 991) ) {
			location.reload(false);
			//console.log('debouce case 5');
		}
		else if ( (firstloadwidth >= 768) && (secondloadwidth <= 767) ) {
			location.reload(false);
			//console.log('debouce case 6');
		}
		//location.reload(false);
	});

});

if (!Array.prototype.filter)
{
  Array.prototype.filter = function(fun /*, thisp*/)
  {
	var len = this.length;
	if (typeof fun != "function")
	  throw new TypeError();

	var res = new Array();
	var thisp = arguments[1];
	for (var i = 0; i < len; i++)
	{
	  if (i in this)
	  {
		var val = this[i]; // in case fun mutates this
		if (fun.call(thisp, val, i, this))
		  res.push(val);
	  }
	}

	return res;
  };
}
