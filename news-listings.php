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

      <!-- << Section One >> -->
      <div class="row-full-width">
        

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Video Header -->
          
          <h1 class="header-page text-center">Simon's Rock News</h1>
          
          
          <!-- News Listings -->
          <div class="news-listings">
            <!-- Article Start -->
            <div class="news-article">
              <a class="link-news-header" href="#"><h2 class="text-center squeeze">Article Headline</h2></a>
              <a class="link-news-header" href="#"><h5 style="text-align: center;">March 16, 2015</h5></a>
              <div class="news-content-container">
                <a class="link-news-image" href="#"><img src="http://lorempixel.com/400/200/cats/" class="image-news"></a>
                <div class="news-content">
                  Marisa Benitez ‘11 and Zara Anwarzai ’11 have always been ambassadors of culture. It’s just what they do. Zara hails from Indianapolis—a quintessential all-American city—and yet her mother is Russian and her father Afghani. Marisa is an L.A. woman and second generation American, raised by a single mother and strongly steeped in Cuban culture. Each came to Bard College at Simon’s Rock ready for the challenge of early college,  and both were nurtured in their academic pursuits—French and German philosophy, political theory, the cultural inferences of translation.
                </div>
              </div>
              <div class="text-center page--link news-more">
                <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Read More</a>
              </div>
            </div>
            <!-- Article End -->

            <!-- Article Start -->
            <div class="news-article">
              <a class="link-news-header" href="#"><h2 class="text-center squeeze">Article Headline</h2></a>
              <a class="link-news-header" href="#"><h5 style="text-align: center;">March 16, 2015</h5></a>
              <div class="news-content-container">
                <a class="link-news-image" href="#"><img src="" class="image-news"></a>
                <div class="news-content">
                  This article doesn't have an image. Marisa Benitez ‘11 and Zara Anwarzai ’11 have always been ambassadors of culture. It’s just what they do. Zara hails from Indianapolis—a quintessential all-American city—and yet her mother is Russian and her father Afghani. Marisa is an L.A. woman and second generation American, raised by a single mother and strongly steeped in Cuban culture. Each came to Bard College at Simon’s Rock ready for the challenge of early college,  and both were nurtured in their academic pursuits—French and German philosophy, political theory, the cultural inferences of translation.
                </div>
              </div>
              <div class="text-center page--link news-more">
                <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Read More</a>
              </div>
            </div>
            <!-- Article End -->


        
          </div>
          <!-- End of News Listings -->
          


         
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN -->
      
        <!-- RIGHT COLUMN -->
      </div>
      <!-- << /Section One >> -->


      <!-- << Section Two >> -->
      <div class="row-full-width">
        <!-- LEFT COLUMN -->
        <div class="column-left">
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Steps to Getting Aid -->
         
        

          

         

         

         

        </div>

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->
      </div>
      <!-- << /Section Two >> -->

    </div><!-- /container-fluid -->

    <div class="row-full-width">
      <!-- Sidbar Mobile Nav -->
      <div class="side-nav-mobile">
        <!-- Subnav -->
        <ul class="flat-list list-group list-group-mobile">
          <li><div class="list-group-item active section-header">Tuition and Financial Aid</div></li>
            <li><a href="#" class="list-group-item">Tuition and Fees</a></li>
            <li><a href="#" class="list-group-item active">Financial Aid and Scholarships</a>
            	<ul class="flat-list list-group">
            		<li><a href="#" class="list-group-item">Sub item</a></li>
            		<li><a href="#" class="list-group-item">Sub item nav link that runs long</a></li>
            		<li><a href="#" class="list-group-item">Sub item</a></li>
            	</ul>
            </li>
            <li><a href="#" class="list-group-item">Dates and Deadlines</a></li>
            <li><a href="#" class="list-group-item">Checklists and Application Tips</a></li>
        </ul>
        <!-- /Subnav -->
      </div>
      <!-- /Sidbar Mobile Nav-->
    </div>

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