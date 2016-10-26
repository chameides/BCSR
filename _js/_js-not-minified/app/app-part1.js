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