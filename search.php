<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mixed Media</title>

<?php include '_inc/head-js-css.php'; ?>

<style>

</style>

  </head>
  <body>

  
<?php include '_inc/nav.php'; ?>

    <div class="container-fluid page-container"> 

    <!-- Colored columns for testing grid
      <div class="row-full-width">
        <div class="column-left" style="background: grey;">
          left column
        </div>
        <div class="column-center" style="background: green;">
          center column
        </div>
        <div class="column-right" style="background: yellow;">
          right column
        </div>
      </div>
    -->
      <!-- << Section One >> -->
      <div class="row-full-width">
        <!-- LEFT COLUMN -->
        <div class="column-left side-nav" data-spy="affix" data-offset-top="100">
          
          
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Video Header -->
          <h1 class="header-page text-center">Search Simon's Rock</h1>
          <div>
            <script>
              (function() {
                var cx = '006449226924018100792:cooysnzmzfi';
                var gcse = document.createElement('script');
                gcse.type = 'text/javascript';
                gcse.async = true;
                gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                    '//cse.google.com/cse.js?cx=' + cx;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(gcse, s);
              })();
            </script>
            <gcse:searchbox-only resultsUrl="/search.php" data-queryParameterName="gs"></gcse:searchbox-only>
            <gcse:searchresults-only></gcse:searchresults-only>
            
          </div>




          
          
         
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN -->
       
        <!-- RIGHT COLUMN -->
      </div>
      <!-- << /Section One >> -->


     
      <!-- << /Section Two >> -->

    </div><!-- /container-fluid -->

    

<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>

  <script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.debug.js"></script>

  <script>

    var controller;
    var scene_callout;
    $(document).ready(function($) {
    
      // init controller
      controller = new ScrollMagic();

      // Callout parallax
      callout_parallax();
      $(window).on('debouncedresize', function( event ) {
        callout_parallax();
      });

    });

function callout_parallax(){
  if ($(window).width() >= 1370){
    var tween_callout = TweenMax.fromTo('.callout-box', 1.5, 
        { 'margin' : '20px 0;'},
        { 'margin' : '-500px 0'}
      );
    // build scene
    scene_callout = new ScrollScene({duration: 700}).setTween(tween_callout).addTo(controller);
  }
  else{
    $('.callout-box').css("margin","20px 0");
    controller.removeScene(scene_callout);
    console.log(scene_callout);
  }
}

  </script>


    
  </body>
</html>