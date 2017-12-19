//video pause/play controls for autoplay video
$('#stop').show();
var videoElement = document.getElementById('hero-video');
$(document).ready(function() {
  //click play to start video and toggle button display
  $('#play').click(function() {
    $('#play').hide();
    $('#stop').show();
    videoElement.play();
  });

  //click stop to stop video and toggle button display
  $('#stop').click(function() {
    $('#play').show();
    $('#stop').hide();
    videoElement.pause();
  });
});