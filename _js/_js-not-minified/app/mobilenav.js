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

