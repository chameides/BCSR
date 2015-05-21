<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>

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
          <div class="reveal-side-nav"></div>
          <!-- Subnav -->
          <ul class="flat-list list-group">
            <li><div class="list-group-item active section-header">News</div></li>
            <li><a href="#" class="list-group-item">Media Contacts</a></li>
            <li><a href="#" class="list-group-item">Submit News Tips</a></li>
            <li><a href="#" class="list-group-item">Additional Links FPO</a></li>
          </ul>
          <!-- /Subnav -->
        </div>
        <!-- /LEFT COLUMN-->

        

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Video Header -->
          
          <h1 class="header-page text-center">Simon's Rock News</h1>
          
          
          <!-- News Listings -->
          <div class="news-listings">
            <!-- Article Start -->
            <div class="news-article">
              <a class="link-news-image" href="#"><img src="http://lorempixel.com/400/300/cats/" class="image-news" alt="alt copy goes here"></a>
              <a class="link-news-header" href="#"><h3 class="squeeze">Rockers, Roommates, Best Friends and Fulbright Scholars</h3></a>
              <a class="link-news-header" href="#"><h5 class="squeeze">March 16, 2015</h5></a>
              <div class="news-content-container"> 
                <div class="news-content">
                  Marisa Benitez ‘11 and Zara Anwarzai ’11 have always been ambassadors of culture. It’s just what they do. Zara hails from Indianapolis—a quintessential all-American city—and yet her mother is Russian and her father Afghani. Marisa is an L.A.
                </div>
                <div class="news-more">
                  <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Read More</a>
                </div>
              </div>
            </div>
            <!-- Article End -->        
            <!-- Article Start -->
            <div class="news-article">
              <a class="link-news-image" href="#"><img src="_images/placeholder.gif" class="image-news" alt="#"></a>
              <a class="link-news-header" href="#"><h3 class="squeeze">Simon's Rock Loses Beloved Dance Professor Wendy Shifrin</h3></a>
              <a class="link-news-header" href="#"><h5 class="squeeze">March 16, 2015</h5></a>
              <div class="news-content-container"> 
                <div class="news-content">
                  Wendy Shifrin, beloved colleague, teacher, and friend, died on Wednesday morning after a long illness. A member of the Simon’s Rock faculty since 1984, Wendy was not only an accomplished dancer and choreographer but also a dedicated, compassionate, and gifted teacher. Her devotion to the College was legendary, and her door was always open to the many students -- including over 150 advisees during her career at Simon’s Rock -- who found her a caring mentor and guide and who remained in touch with her long after graduating.
                </div>
                <div class="news-more">
                  <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Read More</a>
                </div>
              </div>
            </div>
            <!-- Article End -->
            <!-- Article Start -->
            <div class="news-article">
              <a class="link-news-image" href="#"><img src="http://lorempixel.com/400/200/cats/" class="image-news" alt="alt copy goes here2"></a>
              <a class="link-news-header" href="#"><h3 class="squeeze">H3 Article Title</h3></a>
              <a class="link-news-header" href="#"><h5 class="squeeze">Date</h5></a>
              <div class="news-content-container"> 
                <div class="news-content">
                  The content goes here. Image floats right is optional. Aspect ratio depends on image used. 
                </div>
                <div class="news-more">
                  <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Read More</a>
                </div>
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
      </div>

    </div><!-- /container-fluid -->

    <div class="row-full-width">
      <!-- Sidbar Mobile Nav -->
      <div class="side-nav-mobile">
        <!-- Subnav -->
        <ul class="flat-list list-group list-group-mobile">
          <li><div class="list-group-item active section-header">News</div></li>
            <li><a href="#" class="list-group-item">Link 1</a></li>
            <li><a href="#" class="list-group-item">Link 2</a>
            </li>
            <li><a href="#" class="list-group-item">Link 3 FPO</a></li>
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