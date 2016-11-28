<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="_js/modernizr.custom.js"></script>
    <title>Center for Early College </title>

    <?php include '_inc/head-js-css-cec.php'; ?>

  </head>
  <body class="has-hero body-width-full">

  
<?php include '_inc/nav-cec.php'; ?>

    <div class="container-fluid page-container">

      <!-- Page Hero -->
      <div class="row-full-width">
        <div class="page-hero-container section-full-screen cec-bg" style="margin-bottom: 0">
          <div class="page-hero page-hero-gateway-alt text-center" style="margin-bottom: 0">
            <h1 class="hero-title">Transforming Education</h1>
            <p class="hero-text">We are creating accessible programs where younger scholars are taken seriously and individuality thrives as our students push beyond the usual choices in their life-altering encounter with the liberal arts.</p>
          </div>
        </div>
        <i id="intro_arrow_down" class="fa fa-angle-down"></i>
      </div>
      <!-- /Page Hero -->
      <!-- << Section One >> -->
      <div class="col-xs-12 highlights-grid">
        <h2 class="text-center">
          Engaging Students with the Liberal Arts
        </h2>
        <div class="col-sm-4 form-group"> 
          <div class="text-center">
            <img src="/_images/cec/icon/building.svg">
            <h3>12 Schools</h3>
            <h4>We run early college programs across the country</h4>
            <a class="btn btn-primary" href="#">Explore Our Network</a>
          </div>
          <br>
        </div>
        <div class="col-sm-4 form-group"> 
          <div class="text-center">
            <img src="/_images/cec/icon/people.svg">
            <h3>10,000 Students</h3>
            <h4>Our programs give unprecented access to the liberal arts.</h4>
            <a class="btn btn-primary" href="#">Learn about our Pedagogy</a>
          </div>
          <br>
        </div>
         <div class="col-sm-4 form-group"> 
          <div class="text-center">
            <img src="/_images/cec/icon/cap.svg">
            <h3>Impact</h3>
            <h4>Our students are more likely to graduate, to succeed.</h4>
            <a class="btn btn-primary" href="#">See Our Results</a>
          </div>
        </div>
      </div>  
      

      <div class="section-full-screen-wrapper">
      <section class="section-full-screen collaborate">
        <div class="container abscontainer">
          <div class="intro_sub">
            <h1 class="hero-title">Collaborate</h1>
            <p class="intro-paragraph hero-text">The Center for Early College collaborates with foundations, schools, advocacy groups, and educators from around the world. Work with us to bring liberal arts to younger scholars.
            </p>
            <a type="button" class="btn btn-primary">Resources</a>
            <a type="button" class="btn btn-primary">Contact Us</a>
          </div>
        </div> 
      </section>
      </div>
    </div><!-- /container-fluid -->

  <?php include '_inc/footer-cec.php'; ?>   
  <?php include '_inc/bottom-js-cec.php' ?>

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