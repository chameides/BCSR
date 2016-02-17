<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="_js/modernizr.custom.js"></script>
    <title>Profile</title>

<?php include '_inc/head-js-css.php'; ?>

  </head>
  <body class="has-hero">

  
<?php include '_inc/nav.php'; ?>

    <div class="container-fluid page-container">
      
      <!-- Page Hero -->
      <div class="row-full-width">

        <div class="page-hero-container profile-bg">
          <div class="page-hero text-center">
            <h1 class="hero-title">Going Faster On The Less- Traveled Road</h1>
            <p class="hero-text profile-header-text">Ishmael, Started At Age 15</p>
            <p class="hero-text">Engineering, Robotics</p>
            <div class="hero-buttons">
              <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#introVideoModal">Watch Video</a>
            </div>
          </div>
        </div>

        <i id="intro_arrow_down" class="fa fa-angle-down"></i>

      </div>
      <!-- /Page Hero -->

    
      <!-- << Section One >> -->
      <div class="row-full-width no-clear">
        <!-- LEFT COLUMN -->
        <div class="column-left">
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Intro -->
          <div class="">
            <p class="intro-paragraph">I’m just really glad to be here where you can talk about more than just material things. You can talk about the things you were talking about in classes, which doesn’t happen much at other schools.</p>
          </div>
          <!-- /Intro -->
          <!-- Intro -->
          <div class="">
            <p>I’ve always been interested in biology or something in medicine. It wasn’t until I was here and I took molecular techniques and genetics that I fully understood what I was dealing with. We deal with a lot of E. coli, gene splicing, and transcription. It’s just really fun.</p>
          </div>
          <!-- /Intro -->
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->
      </div>
      <!-- << /Section One >> -->


      <!-- << Section Two >> -->
      <div class="row-full-width">
        <!-- LEFT COLUMN -->
        <div class="column-left no-side-nav top-zero">
          
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">

        <!-- Images -->
        <div>
          <div class="clearfix">
            <div class="left w-50">
              <img class="fluid-img" src="../_images/pottery1.jpg" alt="potery 1">
            </div>
            <div class="left w-50">
              <img class="fluid-img" src="../_images/pottery2.jpg" alt="potery 2">
            </div>
          </div>
          <p class="text-center image-name">Project Title</p>
          <p class="text-center image-title">Special Thanks to: Professor Name One, Name Two, Name Three, and Name Four. (With Link)</p>
          <h2 class="text-center">What’s Your Favorite Class?</h2>
          <p>The best class? That’s hard. It’s a tie between genetics and molecular techniques. I mean in both the classes, in molecular techniques, especially, you just sit in the lab and you get to work at your own pace and you get to work with your own materials. Molecular techniques and genetics are really similar. </p>
        </div>
        <!-- /Images -->

        <div class="row">
          <div class="col-sm-6">
            <div class="image-thumb">
              <img src="../_images/teacher-1.jpg" alt="teacher 1">
              <p class="text-center image-name">Project Title</p>
              <p class="text-center image-title image-title-with-margin">Special Thanks to: Professor Name One, Name Two, Name Three, and Name Four. (With Link)</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="image-thumb">
              <img src="../_images/teacher-1.jpg" alt="teacher 1">
              <p class="text-center image-name">Project Title</p>
              <p class="text-center image-title">Special Thanks to: Professor Name One, Name Two, Name Three, and Name Four. (With Link)</p>
            </div>
          </div>
        </div>
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right top-zero">
        </div>  
        <!-- /RIGHT COLUMN -->
      </div>
      <!-- << Section Two >> -->


      <!-- << Section Three >> -->
      <div class="row-full-width">
        <!-- LEFT COLUMN -->
        <div class="column-left no-side-nav top-zero">
          
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
        <div id="trigger1"></div>
          <div>
            <blockquote class="nested-block block-quote-text">“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.”</blockquote>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem.</p>
            <div class="text-center">
              <a class="btn btn-primary btn-two-stack" href="#">Request Information</a>
              <a class="btn btn-primary btn-two-stack" href="#">Ask a Student</a>
            </div>
          </div>
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->
      </div>
      <!-- << /Section Three >> -->

      <!-- << Section Four >>
      <section id="rockers">
        <div class="container-fluid">
          <div class="row rocker-row"> -->
            <!-- Rockers Slider -->
              <?php include '_inc/rockers.php'; ?>
            <!-- /Rockers Slider -->
          <!-- </div>
        </div>
      </section>
      << /Section Four >> -->

    </div><!-- /container-fluid -->


    <div class="modal" id="introVideoModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">[Title]</h4>
        </div>
        <div class="modal-body">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/YysT-Fe1RT8" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
        <button href="#" class="btn btn-primary">CTA LINK</button>
        </div>
      </div>
      </div>
    </div>

<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>

  <script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.min.js"></script>

  <script>

    var controller;
    $(document).ready(function($) {

      function squidgevid() {
        var windwidth = $('#intro_vidbg').width();
        var vidwidth = $('#intro_background_video').width();
        var vidoffset = vidwidth/2;
        // document.getElementById('intro_background_video_html5_api').style.marginLeft = '-' + vidoffset + 'px';
        var negativevidoffsetpx = '-' + vidoffset + 'px';
        $('.vidbg video').css({'marginLeft':negativevidoffsetpx,'left':'50%'});
        $('#introduction').animate({opacity:1},750,function(){
          console.log('faded in');
          $('video').get(0).play();
        });
        
      }
      squidgevid();
      

      $('#introVideoModal').on('hidden.bs.modal', function (e) {
        $('#introduction video').get(0).play();
      });
      // $('#introVideoModal').on('show.bs.modal', function (e) {
      //   $('#introduction video').get(0).pause();
      // });

      // init controller
      controller = new ScrollMagic();


      //init controller
      var scene1 = new ScrollScene({
        triggerElement: '#trigger1',
        triggerHook: 'onEnter',
        offset: 100 /* offset the trigger 150px below #scene's top */
      })
      .setClassToggle('.block-quote-text', 'active') 
      .addTo(controller);

      // Page hero parallax
      var tween_page_hero = TweenMax.fromTo('.page-hero', 1.5, 
          { 'opacity' : 1, 'padding-top' : '180px'},
          { 'opacity' : 0.5, 'padding-top' : '200px'}
        );
      // build scene
      var scene_page_hero = new ScrollScene({duration: 300}).setTween(tween_page_hero).addTo(controller);

    });


  </script>


  </body>
</html>