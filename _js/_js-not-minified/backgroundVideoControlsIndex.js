//video pause/play controls for autoplay video

$(document).ready(function() {
  var videoElement = document.getElementById('intro_background_video');

  //click play to start video and toggle button display
  $('#play').click(function() {
    $('#play').hide();
    $('#stop').show();
    $('#introduction video').get(0).play();
  });

  //click stop to stop video and toggle button display
  $('#stop').click(function() {
    $('#play').show();
    $('#stop').hide();
    $('#introduction video').get(0).pause();
  });