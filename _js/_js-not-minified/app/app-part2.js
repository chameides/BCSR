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

