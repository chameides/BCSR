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
	$('#showsearch').css({opacity: 1}).animate({opacity: 0}, 'slow').css({visibility: "hidden"}); //cec 
	$('#navsearchform .form-control').focus();
	// hide the search form when moused out of:
	//$('#navsearchform').mouseleave(function(){
	// alternatively, hide the search form when the search field loses focus:
	$('#navsearchform .form-control').blur(function(){
		$('#navsearchform').fadeOut();
		$('#showsearch').css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 'slow'); //cec 
		
	});
});

