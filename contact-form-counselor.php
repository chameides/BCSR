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
          
          <h1 class="header-page text-center">Request for Info</h1>
          <div class="row">

  <div class="col-md-6">
   <div id="form_4ef4320c-346b-432e-8577-81e2a4a43726">{{a:95019}}<p class="text-center image-title"><br />Not loading? <a href="https://apply.simons-rock.edu/register/?id=4ef4320c-346b-432e-8577-81e2a4a43726">Go to form</a>.</p></div><script>/*<![CDATA[*/var script = document.createElement('script'); script.async = 1; script.src = 'https://apply.simons-rock.edu/register/?id=4ef4320c-346b-432e-8577-81e2a4a43726&output=embed&div=form_4ef4320c-346b-432e-8577-81e2a4a43726&amp;redirect=https%3a%2f%2fsimons-rock.edu%2fadmission%2fcounselors-educators%2frefer%2freferral-form-thanks.php' + ((location.search.length > 1) ? '&' + location.search.substring(1) : ''); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(script, s);/*]]>*/</script>


   <div class="form_question form_text form_question_ba4dbe8e-5d5f-4f16-8486-fcf18e0cfde3 hidden form_layout_" id="form_question_ba4dbe8e-5d5f-4f16-8486-fcf18e0cfde3" style="clear: left;" data-id="ba4dbe8e-5d5f-4f16-8486-fcf18e0cfde3" data-type="text" data-export="sys:field:source_raw"><label class="form_label" for="form_ba4dbe8e-5d5f-4f16-8486-fcf18e0cfde3">Raw URL</label><div class="form_responses"><input type="text" size="48" id="form_ba4dbe8e-5d5f-4f16-8486-fcf18e0cfde3" name="form_ba4dbe8e-5d5f-4f16-8486-fcf18e0cfde3" value="" autocomplete="off"></div></div>


  
</div>

  <div class="col-md-6">
    <?php include 'contact-form-fields/contact-form-address-follow-yes.php'; ?>
  



  </div><!-- col-md-6 -->
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
  <script type="text/javascript" src="/_js/slate.js"></script>

    
  </body>
</html>