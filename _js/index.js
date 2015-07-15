/*  Delay Function   */

// check if its fired
var fireAway = true;

$(window).on('scroll', function() {
  
  // top of the div 
  // + the height 
  // = where we fire the animation
  var targetTop = $('#chart').offset().top;
  var targetHeight = $('#chart').outerHeight();
  
  // how far we scrolled 
  // + the height of the viewport 
  // = bottom of the viewports position
  var winScroll = $(this).scrollTop();
  var winHeight = $(window).height();
 
  if ( winScroll > ( targetTop + targetHeight - winHeight ) && fireAway ) {
    





/* Graph Bars    */
$(function() {
  $("#bars li #bar1").each( function( key, bar1 ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});

$(function() {
  $("#bars li #bar2").each( function( key, bar2 ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});


$(function() {
  $("#bars li #bar3").each( function( key, bar3 ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});


$(function() {
  $("#bars li #bar4").each( function( key, bar4 ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});


$(function() {
  $("#bars li #bar5").each( function( key, bar5 ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});

$(function() {
  $("#bars li #bar6").each( function( key, bar6 ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});




      
        }
});