//video pause/play controls for autoplay video

$(document).ready(function() {
  var videoElement = document.getElementById('hero-video');
  //hide play by default
  $('#play').hide();

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