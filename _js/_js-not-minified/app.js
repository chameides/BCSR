/*
 * BCSR Application JS
 */
$( document ).ready(function() {
/*
	Grab a variable for screen size
*/
	// refactored below - ik
	// if ( $(window).width() < 992 ) {
	// 	var isMobile = true;
	// }

	// detect if mobile browser
	// regex -> http://detectmobilebrowsers.com
	var isMobile = ( function(a) { return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)) }) ( navigator.userAgent || navigator.vendor || window.opera);

/* Grid */
/*
* debouncedresize: special jQuery event that happens once after a window resize
*
* latest version and complete README available on Github:
* https://github.com/louisremi/jquery-smartresize/blob/master/jquery.debouncedresize.js
*
* Copyright 2011 @louis_remi
* Licensed under the MIT license.
*/
var $event = $.event,
$special,
resizeTimeout;

$special = $event.special.debouncedresize = {
	setup: function() {
		$( this ).on( "resize", $special.handler );
	},
	teardown: function() {
		$( this ).off( "resize", $special.handler );
	},
	handler: function( event, execAsap ) {
		// Save the context
		var context = this,
			args = arguments,
			dispatch = function() {
				// set correct event type
				event.type = "debouncedresize";
				$event.dispatch.apply( context, args );
			};

		if ( resizeTimeout ) {
			clearTimeout( resizeTimeout );
		}

		execAsap ?
			dispatch() :
			resizeTimeout = setTimeout( dispatch, $special.threshold );
	},
	threshold: 250
};


/*

	The navigation's behavior is:
	- On initial page load: 
		- Show the super nav; 
		- The site section nav with no background; 
		- And the big version of the logo violating into the body of the page.
		
	- As you scroll down past "hideNavOn":
		- Keep the utility nav fixed to the top of the screen
		- Hide the site section nav by animating it tucking up under the utility nav
		- Hide the big logo by having it move up past the bounds of its container
		- Bring in a smaller, horizontal logo by having it move up into the bounds of its container
		
	- If you scroll up, once you're past hideNavOn:
		- Show the site section nav by animating it sliding out from under the utility nav
		
	- If you scroll all the way to the top of the page, reset to the initial page load states.
	
*/
function navPresentationStates(previousTop) {
	//$(window).scroll(
	//	{
	//		previousTop: 0
	//	}, 
	//	function () {
			var currentTop = $(window).scrollTop();
			//console.log('currentTop: ' + currentTop);
			if (!isMobile) {
				var hideNavOn = 10;
				//separate section-nav's bg color from position so that it's always transparent above hideOn
				if (currentTop <= hideNavOn) {
					$('.section-nav, .navbar-brand').addClass('initial');
					//$('.section-nav').removeClass('tucked');
					$('.section-nav').removeClass('shaded');
				}
				if ( (currentTop > hideNavOn) && (currentTop < this.previousTop) ) {
					//$('.section-nav').removeClass('tucked');
					$('.section-nav, .navbar-brand').removeClass('initial');
					$('.section-nav').addClass('shaded');
				} else if ( (currentTop > hideNavOn) && (currentTop >= this.previousTop) ) {
					//$('.section-nav').addClass('tucked');
					$('.section-nav, .navbar-brand').removeClass('initial');
					$('.section-nav').addClass('shaded');
				}
				this.previousTop = currentTop;
			}

	//	}
//	);
}
var previousTop;
navPresentationStates();
$(window).load( navPresentationStates(0) );
$(window).scroll(
	{ previousTop: 0 }, function () { 
		navPresentationStates(previousTop);
		
});
if ( $(window).width()>=1200 ) {
	$(window).scroll(function(){
		var scrolledY = $(window).scrollTop();
		$('.page-hero-container').css('background-position', 'center ' + ((scrolledY)) + 'px');	
	});
}
/*

	Show/hide the navigation's embedded search form.
	
	Show the form when the search icon is clicked.
	
	Hide the form when user mouses out of the form; 
	alternatively, you could hide the form when the
	text input loses focus, but this option is currently
	commented out.

*/
$('#showsearch').click(function() {
	$('#navsearchform').fadeToggle();
	$('#navsearchform .form-control').focus();
	// hide the search form when moused out of:
	//$('#navsearchform').mouseleave(function(){
	// alternatively, hide the search form when the search field loses focus:
	$('#navsearchform .form-control').blur(function(){
		$('#navsearchform').fadeOut();
	});
});

/*
	Disable the dropdowns in the global nav for mobiles
*/
function disableEnableMobileNavDrops() {
	if ( isMobile || ($(window).width() < 992) ) {
		$('#mainnav li.dropdown a.dropdown-toggle').each(function(){
			// hide/disable the main nav dropdowns
			$(this).attr('data-notoggle', $(this).attr('data-toggle')); //does the switch
			$(this).removeAttr('data-toggle'); //clears out the old one if you need to
			$('nav#mainnav .section-nav .dropdown-menu').each(function(){
				$(this).css({'display':'none'});
			});
		});		
	} else {
		$('#mainnav li.dropdown a.dropdown-toggle').each(function(){
			// enable the main nav dropdowns
			$(this).attr('data-toggle', $(this).attr('data-notoggle')); //does the switch
			$(this).removeAttr('data-notoggle'); //clears out the old one if you need to
		});		
	}
}
disableEnableMobileNavDrops();
$(window).on('debouncedresize', function( event ) {
	disableEnableMobileNavDrops();
});


// ======================= imagesLoaded Plugin ===============================
// https://github.com/desandro/imagesloaded

// $('#my-container').imagesLoaded(myFunction)
// execute a callback when all images have loaded.
// needed because .load() doesn't work on cached images

// callback function gets image collection as argument
//  this is the container

// original: MIT license. Paul Irish. 2010.
// contributors: Oren Solomianik, David DeSandro, Yiannis Chatzikonstantinou

// blank image data-uri bypasses webkit log warning (thx doug jones)
var BLANK = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

$.fn.imagesLoaded = function( callback ) {
	var $this = this,
		deferred = $.isFunction($.Deferred) ? $.Deferred() : 0,
		hasNotify = $.isFunction(deferred.notify),
		$images = $this.find('img').add( $this.filter('img') ),
		loaded = [],
		proper = [],
		broken = [];

	// Register deferred callbacks
	if ($.isPlainObject(callback)) {
		$.each(callback, function (key, value) {
			if (key === 'callback') {
				callback = value;
			} else if (deferred) {
				deferred[key](value);
			}
		});
	}

	function doneLoading() {
		var $proper = $(proper),
			$broken = $(broken);

		if ( deferred ) {
			if ( broken.length ) {
				deferred.reject( $images, $proper, $broken );
			} else {
				deferred.resolve( $images );
			}
		}

		if ( $.isFunction( callback ) ) {
			callback.call( $this, $images, $proper, $broken );
		}
	}

	function imgLoaded( img, isBroken ) {
		// don't proceed if BLANK image, or image is already loaded
		if ( img.src === BLANK || $.inArray( img, loaded ) !== -1 ) {
			return;
		}

		// store element in loaded images array
		loaded.push( img );

		// keep track of broken and properly loaded images
		if ( isBroken ) {
			broken.push( img );
		} else {
			proper.push( img );
		}

		// cache image and its state for future calls
		$.data( img, 'imagesLoaded', { isBroken: isBroken, src: img.src } );

		// trigger deferred progress method if present
		if ( hasNotify ) {
			deferred.notifyWith( $(img), [ isBroken, $images, $(proper), $(broken) ] );
		}

		// call doneLoading and clean listeners if all images are loaded
		if ( $images.length === loaded.length ){
			setTimeout( doneLoading );
			$images.unbind( '.imagesLoaded' );
		}
	}

	// if no images, trigger immediately
	if ( !$images.length ) {
		doneLoading();
	} else {
		$images.bind( 'load.imagesLoaded error.imagesLoaded', function( event ){
			// trigger imgLoaded
			imgLoaded( event.target, event.type === 'error' );
		}).each( function( i, el ) {
			var src = el.src;

			// find out if this image has been already checked for status
			// if it was, and src has not changed, call imgLoaded on it
			var cached = $.data( el, 'imagesLoaded' );
			if ( cached && cached.src === src ) {
				imgLoaded( el, cached.isBroken );
				return;
			}

			// if complete is true and browser supports natural sizes, try
			// to check for image status manually
			if ( el.complete && el.naturalWidth !== undefined ) {
				imgLoaded( el, el.naturalWidth === 0 || el.naturalHeight === 0 );
				return;
			}

			// cached images don't fire load sometimes, so we reset src, but only when
			// dealing with IE, or image is complete (loaded) and failed manual check
			// webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
			if ( el.readyState || el.complete ) {
				el.src = BLANK;
				el.src = src;
			}
		});
	}

	return deferred ? deferred.promise( $this ) : $this;
};
var rockerRowWidth = 0;
var rockerRowAdditionalWidth = 0;
function initRockers() {
	$('#rockers_append, #rockers_prepend').html('');
	if ( $(window).width() < 768 ) {
		$('#rockers button.rockers_btn').css({'display':'none'});
	} else {
		$('#rockers button.rockers_btn').css({'display':'inline-block'});
		$( '#rockers_original' ).clone().appendTo( '#rockers_append' );
		$( '#rockers_original' ).clone().prependTo( '#rockers_prepend' );
	} 
	$('.rocker-row .row-inner').width(0);
	$('.rocker-row .row-inner div.skew').each(function(){
		rockerRowAdditionalWidth = $(this).width();
		$('.rocker-row .row-inner').width( $('.rocker-row .row-inner').width() + rockerRowAdditionalWidth );
	});
	if ($(window).width() < 768) {
		$('.rocker-row .row-inner').width( $('.rocker-row .row-inner').width()/2 );
	}
	rockerRowWidth = $('.rocker-row .row-inner').width();
	$('.rocker-row .row-inner').css({'left':0-(rockerRowWidth/2)});
}
initRockers();
$(window).on('debouncedresize', function( event ) {
	initRockers();
});

function shuffleRockers(rockersNewLeft,rockerRowWidth) {
	if ( (rockersNewLeft * -1) < rockerRowWidth*.33 ) {
		// move the element exactly one third its width to the left so that we're looking at the middle
		$('.rocker-row .row-inner').css({'left':rockersNewLeft - (rockerRowWidth/3)});
	} else if ( ( (rockersNewLeft * -1) >= rockerRowWidth*.33 ) && ( (rockersNewLeft * -1) < rockerRowWidth*.66 ) ) {
		// hang tight
	} else {
		// move the element exactly one third its width to the right so that we're looking at the middle
		$('.rocker-row .row-inner').css({'left':rockersNewLeft + (rockerRowWidth/3)});
	}
}

if ( $(window).width() >= 2040 ) {
	var rockerAdvWidth = 1530;
}
else if ( $(window).width() >= 1530 ) {
	var rockerAdvWidth = 1020;
} 
else if ( $(window).width() >= 1020 ) {
	var rockerAdvWidth = 510;
} 
else if ( $(window).width() < 1014 ) {
	var rockerAdvWidth = 510;
} 
$('#rockers .rockers_btn.leftbtn').click(function(){
	var rockersCurrentLeft = $('.rocker-row .row-inner').offset().left;
	if ( rockersCurrentLeft <= (0 - rockerAdvWidth) ) {
		$(this).css('display','none');
		var rockersNewLeft = rockersCurrentLeft + rockerAdvWidth;
		$('.rocker-row .row-inner').animate({
			left:rockersNewLeft
		},750, function(){
			$('#rockers .rockers_btn.leftbtn').css({'opacity':'0','display':'block'}).animate({opacity:'1'},250);
			shuffleRockers(rockersNewLeft,rockerRowWidth);
		});
	}
});
$('#rockers .rockers_btn.rightbtn').click(function(){
	var rockersCurrentLeft = $('.rocker-row .row-inner').offset().left;
	// if current left offset plus screen width is greater than element width...
	if ( ( (rockersCurrentLeft * -1) + $(window).width() ) < rockerRowWidth ) {
		$(this).css('display','none');
		var rockersNewLeft = rockersCurrentLeft - rockerAdvWidth;
		$('.rocker-row .row-inner').animate({
			left:rockersNewLeft
		},750, function(){
			$('#rockers .rockers_btn.rightbtn').css({'opacity':'0','display':'block'}).animate({opacity:'1'},250);
			shuffleRockers(rockersNewLeft,rockerRowWidth);
		});
	}
});
// end { all the Rocker section functionality }

/* Events Carousel */
var eventsCarouselRowWidth = 0;
var eventsCarouselRowAdditionalWidth = 0;
function initEventsCarousel() {
	$('#events_carousel_append, #events_carousel_prepend').html('');
	if ( $(window).width() >= 768 ) {
		$( '#events_carousel_original' ).clone().appendTo( '#events_carousel_append' );
		$( '#events_carousel_original' ).clone().prependTo( '#events_carousel_prepend' );
	}

	$('.events-carousel-row .row-inner').width(0);
	$('.events-carousel-row .row-inner a.events-carousel-item').each(function(){
		eventsCarouselRowAdditionalWidth = $(this).outerWidth();
		$('.events-carousel-row .row-inner').width( $('.events-carousel-row .row-inner').width() + eventsCarouselRowAdditionalWidth );
		//console.log('width ' + $('.events-carousel-row .row-inner').width() + eventsCarouselRowAdditionalWidth );
	});
	eventsCarouselRowWidth = $('.events-carousel-row .row-inner').width();
	if ( $(window).width() >= 768 ) {
		$('.events-carousel-row .row-inner').css({'left':0-(eventsCarouselRowWidth/3)});
	} else {
		$('.events-carousel-row .row-inner').css({'left':0});
	}
}
initEventsCarousel();
$(window).on('debouncedresize', function( event ) {
	initEventsCarousel();
});

function shuffleEvents(eventsNewLeft,eventsCarouselRowWidth) {
	if ( (eventsNewLeft * -1) < eventsCarouselRowWidth*.33 ) {
		// move the element exactly one third its width to the left so that we're looking at the middle
		$('.events-carousel-row .row-inner').css({'left':eventsNewLeft - (eventsCarouselRowWidth/3)});
	} else if ( ( (eventsNewLeft * -1) >= eventsCarouselRowWidth*.33 ) && ( (eventsNewLeft * -1) < eventsCarouselRowWidth*.66 ) ) {
		// hang tight
	} else {
		// move the element exactly one third its width to the right so that we're looking at the middle
		$('.events-carousel-row .row-inner').css({'left':eventsNewLeft + (eventsCarouselRowWidth/3)});
	}
}
var eventsAdvWidth = 380;
// eventsAdvWidth = $(window).width() - 365;
if ( $(window).width() >= 1920 ) {
	var eventsAdvWidth = 1520;
}
else if ( $(window).width() >= 1520 ) {
	var eventsAdvWidth = 1140;
}
else if ( $(window).width() >= 1140 ) {
	var eventsAdvWidth = 760;
} 
/*
else if ( $(window).width() >= 760 ) {
	var eventsAdvWidth = 760;
} 
else if ( $(window).width() < 760 ) {
	var eventsAdvWidth = 380;
} 
*/
$('#events_carousel .rockers_btn.leftbtn').click(function(){
	var eventsCurrentLeft = $('.events-carousel-row .row-inner').offset().left;
	if ( eventsCurrentLeft <= (0 - eventsAdvWidth) ) {
		$(this).css('display','none');
		var eventsNewLeft = eventsCurrentLeft + eventsAdvWidth;
		$('.events-carousel-row .row-inner').animate({
			left:eventsNewLeft
		},750, function(){
			$('#events_carousel .rockers_btn.leftbtn').css({'opacity':'0','display':'block'}).animate({opacity:'1'},250);
			shuffleEvents(eventsNewLeft,eventsCarouselRowWidth);
		});
	}
});
$('#events_carousel .rockers_btn.rightbtn').click(function(){
	var eventsCurrentLeft = $('.events-carousel-row .row-inner').offset().left;
	// if current left offset plus screen width is greater than element width...
	if ( ( (eventsCurrentLeft * -1) + $(window).width() ) < eventsCarouselRowWidth ) {
		$(this).css('display','none');
		var eventsNewLeft = eventsCurrentLeft - eventsAdvWidth;
		$('.events-carousel-row .row-inner').animate({
			left:eventsNewLeft
		},750, function(){
			$('#events_carousel .rockers_btn.rightbtn').css({'opacity':'0','display':'block'}).animate({opacity:'1'},250);
			shuffleEvents(eventsNewLeft,eventsCarouselRowWidth);
		});
	}
});

/* end Events Carousel */


/* Student Life Carousel */
var studentLifeCarouselRowWidth = 0;
var studentLifeCarouselRowAdditionalWidth = 0;
function initStudentLifeCarousel() {
	$('#student-life_carousel_append, #student-life_carousel_prepend').html('');
	if ( $(window).width() >= 768-15 ) {
		$( '#student-life_carousel_original' ).clone().appendTo( '#student-life_carousel_append' );
		$( '#student-life_carousel_original' ).clone().prependTo( '#student-life_carousel_prepend' );
	}

	$('.student-life_carousel-row .row-inner').width(0);
	$('.student-life_carousel-row .row-inner a.student-life-carousel-item').each(function(){
		studentLifeCarouselRowAdditionalWidth = $(this).outerWidth();
		$('.student-life_carousel-row .row-inner').width( $('.student-life_carousel-row .row-inner').width() + studentLifeCarouselRowAdditionalWidth );
		// console.log('width ' + $('.student-life_carousel-row .row-inner').width() + studentLifeCarouselRowAdditionalWidth );
	});
	studentLifeCarouselRowWidth = $('.student-life_carousel-row .row-inner').width();
	if ( $(window).width() >= 768-15 ) {
		$('.student-life_carousel-row .row-inner').css({'left':0-(studentLifeCarouselRowWidth/2)});
	} else {
		$('.student-life_carousel-row .row-inner').css({'left':0});
	}
}
initStudentLifeCarousel();
$(window).on('debouncedresize', function( event ) {
	initStudentLifeCarousel();
});

function shuffleStudentLife(studentLifeNewLeft,studentLifeCarouselRowWidth) {
	if ( (studentLifeNewLeft * -1) < studentLifeCarouselRowWidth*.33 ) {
		// move the element exactly one third its width to the left so that we're looking at the middle
		$('.student-life_carousel-row .row-inner').css({'left':studentLifeNewLeft - (studentLifeCarouselRowWidth/3)});
	} else if ( ( (studentLifeNewLeft * -1) >= studentLifeCarouselRowWidth*.33 ) && ( (studentLifeNewLeft * -1) < studentLifeCarouselRowWidth*.66 ) ) {
		// hang tight
	} else {
		// move the element exactly one third its width to the right so that we're looking at the middle
		$('.student-life_carousel-row .row-inner').css({'left':studentLifeNewLeft + (studentLifeCarouselRowWidth/3)});
	}
}

// studentLifeAdvWidth = $(window).width() - 365;
if ( $(window).width() >= 1920 ) {
	var studentLifeAdvWidth = 1520;
}
else if ( $(window).width() >= 1520 ) {
	var studentLifeAdvWidth = 1140;
} 
//else if ( $(window).width() >= 1140 ) {
//	var studentLifeAdvWidth = 760;
//} 
else if ( $(window).width() >= 760 ) {
	var studentLifeAdvWidth = 760;
} 
else if ( $(window).width() < 760 ) {
	var studentLifeAdvWidth = 380;
} 

$('#student-life_carousel .rockers_btn.leftbtn').click(function(){
	var studentLifeCurrentLeft = $('.student-life_carousel-row .row-inner').offset().left;
	if ( studentLifeCurrentLeft <= (0 - studentLifeAdvWidth) ) {
		$(this).css('display','none');
		var studentLifeNewLeft = studentLifeCurrentLeft + studentLifeAdvWidth;
		$('.student-life_carousel-row .row-inner').animate({
			left:studentLifeNewLeft
		},750, function(){
			$('#student-life_carousel .rockers_btn.leftbtn').css({'opacity':'0','display':'block'}).animate({opacity:'1'},250);
			shuffleStudentLife(studentLifeNewLeft,studentLifeCarouselRowWidth);
		});
	}
});
$('#student-life_carousel .rockers_btn.rightbtn').click(function(){
	var studentLifeCurrentLeft = $('.student-life_carousel-row .row-inner').offset().left;
	// if current left offset plus screen width is greater than element width...
	if ( ( (studentLifeCurrentLeft * -1) + $(window).width() ) < studentLifeCarouselRowWidth ) {
		$(this).css('display','none');
		var studentLifeNewLeft = studentLifeCurrentLeft - studentLifeAdvWidth;
		$('.student-life_carousel-row .row-inner').animate({
			left:studentLifeNewLeft
		},750, function(){
			$('#student-life_carousel .rockers_btn.rightbtn').css({'opacity':'0','display':'block'}).animate({opacity:'1'},250);
			shuffleStudentLife(studentLifeNewLeft,studentLifeCarouselRowWidth);
		});
	}
});

/* end Student Life Carousel */



/* Position page hero background correctly to deal with background fixed/cover browser issue */
// $(window).scroll(function() {
//   var scrolledY = $(window).scrollTop();
//   $('.page-hero-container').css('background-position', '50% ' + ((scrolledY)) + 'px');
// });
/* end Position page hero background */

/* Hide Side Navigation on screen sizes less than 1570 */
// $(window).scroll(function(){
//   if($(this).scrollTop() > 0 && $(window).width() < 1370){
//     $(".side-nav").css('left','-160px');
//     $(".reveal-side-nav").show();
//   }
//   $(".reveal-side-nav").on('click', function(){
//     $(".side-nav").css('left','0');
//     $(".reveal-side-nav").hide();
//   });
// });

$(window).scroll(function(){
  if($(this).scrollTop() > 0 && $(window).width() < 1370){
    $(".side-nav").addClass('hidden-side-nav');
  }
});
$(".side-nav").on('click', function(){
	var thisleft = $(".side-nav").css('left');
	// it's either -160px, or 0px
	if (thisleft == "0px") {
		$(".side-nav").addClass('hidden-side-nav');
	} else {
		$(".side-nav").removeClass('hidden-side-nav');
	}
});

/* end Hide Side Navigation on screen sizes less than 1570 */


$('.modal.fade').on('hidden.bs.modal', function (e) {
  if ( $(this).find('.video-js').length > 0 ) {
  	$(this).find('video').get(0).pause();
  }
  if ( $(this).find('iframe').length > 0 ) {
  	var thesource = $(this).find('iframe').attr('src');
  	//console.log(thesource);
  	$(this).find('iframe').attr('src',thesource);
  }
  $('.playbutton').blur();
});

$('.side-nav-mobile a.active, .side-nav a.active').click(function(e){
	e.preventDefault();
});

if (Modernizr.touch){ 
	$('#hero-video-container video').hide();
}


/*
	Here, close the $(document).ready function:
*/
});



	// warning for out of date browsers
var nVer = navigator.appVersion;
var nAgt = navigator.userAgent;
var browserName  = navigator.appName;
var fullVersion  = ''+parseFloat(navigator.appVersion); 
var majorVersion = parseInt(navigator.appVersion,10);
var nameOffset,verOffset,ix;

// In Opera 15+, the true version is after "OPR/" 
if ((verOffset=nAgt.indexOf("OPR/"))!=-1) {
 browserName = "Opera";
 fullVersion = nAgt.substring(verOffset+4);
}
// In older Opera, the true version is after "Opera" or after "Version"
else if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
 browserName = "Opera";
 fullVersion = nAgt.substring(verOffset+6);
 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
   fullVersion = nAgt.substring(verOffset+8);
}
// In MSIE, the true version is after "MSIE" in userAgent
else if ((verOffset=nAgt.indexOf("MSIE"))!=-1) {
 browserName = "Microsoft Internet Explorer";
 fullVersion = nAgt.substring(verOffset+5);
}
// In Chrome, the true version is after "Chrome" 
else if ((verOffset=nAgt.indexOf("Chrome"))!=-1) {
 browserName = "Chrome";
 fullVersion = nAgt.substring(verOffset+7);
}
// In Safari, the true version is after "Safari" or after "Version" 
else if ((verOffset=nAgt.indexOf("Safari"))!=-1) {
 browserName = "Safari";
 fullVersion = nAgt.substring(verOffset+7);
 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
   fullVersion = nAgt.substring(verOffset+8);
}
// In Firefox, the true version is after "Firefox" 
else if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
 browserName = "Firefox";
 fullVersion = nAgt.substring(verOffset+8);
}
// In most other browsers, "name/version" is at the end of userAgent 
else if ( (nameOffset=nAgt.lastIndexOf(' ')+1) < 
          (verOffset=nAgt.lastIndexOf('/')) ) 
{
 browserName = nAgt.substring(nameOffset,verOffset);
 fullVersion = nAgt.substring(verOffset+1);
 if (browserName.toLowerCase()==browserName.toUpperCase()) {
  browserName = navigator.appName;
 }
}
// trim the fullVersion string at semicolon/space if present
if ((ix=fullVersion.indexOf(";"))!=-1)
   fullVersion=fullVersion.substring(0,ix);
if ((ix=fullVersion.indexOf(" "))!=-1)
   fullVersion=fullVersion.substring(0,ix);

majorVersion = parseInt(''+fullVersion,10);
if (isNaN(majorVersion)) {
 fullVersion  = ''+parseFloat(navigator.appVersion); 
 majorVersion = parseInt(navigator.appVersion,10);
}
	var $buoop = {
		//test:true,
		vs:{i:8,f:15,o:12.1,s:5.1},c:2,
		text: 'Your browser ('+browserName+' '+majorVersion+') is <b>out of date</b>. It has known <b>security flaws</b> and may <b>not display all features</b> of this and other websites.'
		};  
	function $buo_f(){ 
	 var e = document.createElement("script"); 
	 e.src = "//browser-update.org/update.js"; 
	 document.body.appendChild(e);
	};
	try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
	catch(e){window.attachEvent("onload", $buo_f)}

