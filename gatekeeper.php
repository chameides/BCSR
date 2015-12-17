<!--change log
1. Start with Gateway
2. Remove php include '_inc/nav.php'; 
3. Remove Secondary Nav (left)
4. Remove Calendar Header and Carousel
5. Remove Footer
6. Add navbar-brand-gateway
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="_js/modernizr.custom.js"></script>
    <title>Gatekeeper</title>

<?php include '_inc/head-js-css.php'; ?>

  </head>
  <body class="has-hero">


    <?php include '_inc/nav-gatekeeper.php'; ?>
    <div class="container-fluid page-container">

      <!-- Page Hero -->
      <div class="row-full-width">
      <div class="navbar-brand-gateway">
        <a href="/" title="Bard College at Simon's Rock">
          <img src="/_images/logos/logo_2012_primary_unstacked_mediumRED.png" alt="Bard College at Simon's Rock, the Early College">
        </a>
      </div>

        <div class="page-hero-container gateway-bg">
          <div class="page-hero page-hero-gateway-alt text-center">
            <h1 class="hero-title">Headline</h1>
            <p class="hero-text">Supporting Copy</p>
          </div>
        </div>

        <i id="intro_arrow_down" class="fa fa-angle-down"></i>
      
      </div>
      <!-- /Page Hero -->

    
      <!-- << Section One >> -->
      <div class="row-full-width">

        <!-- LEFT COLUMN -->
        
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <div class="row">

  <div class="col-md-6">
    <p>We're so glad you would like to know
    more about Simon's Rock and Bard
    Academy. Please fill out the form on this page
    and we will get in touch with you.</p>
  </div>


  <div class="col-md-6">
    <?php include 'contact-form-rfi-fields.php'; ?>
  </div><!-- col-md-6 -->
</div><!-- row -->
              

        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->

      </div>
      <!-- << /Section One >> -->
    
      <footer class="container-fluid" id="footer-gatekeeper" >
        <div class="container">
          Accredited by the New England Association of Schools and Colleges (NEASC) | <a href="/student-life/map-and-directions/index.php" id="Footer_AddressMap">84 Alford Rd., Great Barrington, MA 01230</a> | <a href="mailto:info@simons-rock.edu" id="Footer_Connect_InfoEmail">info@simons-rock.edu</a> | <a href="tel:413-644-"4400">413-644-4400</a> | Copyright © 2015 Bard College at Simon's Rock
        </div>
      </footer

    </div><!-- /container-fluid -->

    


    
<?php include '_inc/bottom-js.php' ?>
<script src="/_resources/js/forms/rfi-combine-min.js"></script>

  <script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.debug.js"></script>

  <script>

    var controller;
    $(document).ready(function($) {
    
      // init controller
      controller = new ScrollMagic();

      // Page hero parallax
      var tween_page_hero = TweenMax.fromTo('.page-hero', 1.5, 
          { 'opacity' : 1, 'padding-top' : $('.page-hero').css('padding-top')},
          { 'opacity' : 0.5, 'padding-top' : (parseInt($('.page-hero').css('padding-top'))+60) +'px'}
      );
      // build scene
      var scene_page_hero = new ScrollScene({duration: 300}).setTween(tween_page_hero).addTo(controller);
    });
  </script>

  </body>
</html>