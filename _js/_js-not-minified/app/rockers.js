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
		
		$( "#events_carousel_append #events_carousel_original").attr( "aria-hidden", "true" );
		$( "#events_carousel_prepend #events_carousel_original").attr( "aria-hidden", "true" );

		$( "#events_carousel_append .events-carousel-item").attr( "aria-hidden", "true" ).attr( "tabindex", "-1" );
		$( "#events_carousel_prepend .events-carousel-item").attr( "aria-hidden", "true" ).attr( "tabindex", "-1" );
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
		$( "#rockers_prepend #rockers_original").attr( "aria-hidden", "true" );
		$( "#rockers_prepend #rockers_original a").attr( "tabindex", "-1" );
		$( "#rockers_prepend #rockers_original button").attr( "tabindex", "-1" );
		$( "#rockers_append #rockers_original").attr( "aria-hidden", "true" );
		$( "#rockers_append #rockers_original a").attr( "tabindex", "-1" );
		$( "#rockers_append #rockers_original button").attr( "tabindex", "-1" );
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