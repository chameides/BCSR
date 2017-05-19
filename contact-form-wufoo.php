<?php session_start();
  $_SESSION = array();
  session_regenerate_id(true);
?>
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
          <div class="reveal-side-nav"></div>
          <!-- Subnav -->
         
          <!-- /Subnav -->
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Video Header -->
          
          <h1 class="header-page text-center">Register for Reunion</h1>
          <div class="row">

  <div class="col-md-12">
    
    <div id="wufoo-zmdt1js1wbyzc4">
Fill out my <a href="https://simonsrockllamas.wufoo.com/forms/zmdt1js1wbyzc4">online form</a>.
</div>
<script type="text/javascript">var zmdt1js1wbyzc4;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'simonsrockllamas',
'formHash':'zmdt1js1wbyzc4',
'autoResize':true,
'height':'3474',
'async':true,
'host':'wufoo.com',
'header':'show',
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { zmdt1js1wbyzc4 = new WufooForm();zmdt1js1wbyzc4.initialize(options);zmdt1js1wbyzc4.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>


  </div>


  
</div><!-- row -->

              
         </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN -->
        <div class="column-right">
          <!-- Right Callout -->
         
          <!-- /Right Callout -->
        </div>
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
<script id="hobson-form-submit" data-name="RFI-Address-Follow-Yes" src="/_resources/js/forms/rfi-combine-min.js"></script>



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