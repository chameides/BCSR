<!--change log
1. Start with Gateway
2. Replace include '_inc/nav.php'; 
3. Remove Secondary Nav (left)
4. Remove Calendar Header and Carousel
5. Remove Footer
6. Add navbar-brand-gateway
7. update hero graphic
  a. remove <i id="intro_arrow_down" class="fa fa-angle-down"></i>
  b. add page-hero-container-small
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
      <div class="navbar-brand-gatekeeper">
          <a href="/" title="Bard College at Simon's Rock">
            <img src="/_images/logos/bcsr-primary-163w.png" alt="Bard College at Simon's Rock, the Early College">
          </a>
        </div>

        <div class="page-hero-container page-hero-container-small gatekeeper-bg">
          <div class="page-hero-gateway-alt text-center">
            <h1 class="hero-title">Some Students Are Ready for College Earlier Than Their Peers</h1>
            <p class="hero-text">Discover if you're ready for early college now.</p>
          </div>
        </div>


        
      
      </div>
      <!-- /Page Hero -->

    
      <!-- << Section One >> -->
      <div class="row-full-width">

        <!-- LEFT COLUMN -->
        
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <div class="row" style="position: relative; top: -130px; margin: 0 1em;">
            <div class="col-md-6" style="background-color:rgba(125,197,197,0.8); padding: 0em 2em; opacity: 1; color: white;">
              <h2 style="padding-top: .5em; font-size: 1.5em;">Get the Early College Checklist:</h2>
              <img class="pull-left" src="https://placehold.it/75x75/ffffff/?text=Fixed" alt="placeholder"><p><strong>Itching to explore more subjects, bored with High School classes and more curious than most?</strong></p>
              <div style="clear: both;">
                <?php include 'contact-form-rfi-fields.php'; ?>
              </div>
            </div>
            <div class="col-md-6">
              <h6>Did you know you can start college now, without a high school diploma or taking the SATs?</h6>
              <p></p>
              <p>Download the Early College Checklist:</p>
              <ul>
                <li>Five signs you're ready for a greater challenge</li>
                <li>What you could be learning in college classes</li>
                <li>A few of the things you could do at the Early College</li>
              </ul>
              <p>At Simon's Rock you'll find professors who are interested in helping you pursue your interests and expand your knowledge.</p>
            </div>
          </div>
        </div><!-- row -->
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->

      </div>
      <!-- << /Section One >> -->
    
      <footer class="container-fluid" id="footer-gatekeeper">
        <div class="container">
          Accredited by the New England Association of Schools and Colleges (NEASC) | <a href="/student-life/map-and-directions/index.php" id="Footer_AddressMap">84 Alford Rd., Great Barrington, MA 01230</a> | <a href="mailto:info@simons-rock.edu" id="Footer_Connect_InfoEmail">info@simons-rock.edu</a> | <a href="tel:413-644-4400">413-644-4400</a> | Copyright © 2015 Bard College at Simon's Rock
        </div>
      </footer>

    </div><!-- /container-fluid -->

    


    
<?php include '_inc/bottom-js.php' ?>
<script src="/_resources/js/forms/rfi-combine-min.js"></script>

  <script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.js"></script>

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