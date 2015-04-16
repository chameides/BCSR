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
          <ul class="flat-list list-group">
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
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Video Header -->
          <ol class="flat-list crumb">
            <li><a href="#">Home</a></li>
            <li> > </li>
            <li class="active">This Page</li>
          </ol>
          <h1 class="header-page text-center">Affording Simon’s Rock H1</h1>
          <div class="video--container text-center">
            <div class="">
            
            <video id="mixed-media-video" class="video-js vjs-default-skin" preload="auto" controls poster="/_images/_rockers/Profile-Marisa-Benitez.jpg" data-setup="{}">
					<source src="/_images/_rockers/Profile-Marisa-Benitez.mp4" type='video/mp4' />
					<source src="/_images/_rockers/Profile-Marisa-Benitez.webm" type='video/webm' />
					<source src="/_images/_rockers/Profile-Marisa-Benitez.ogv" type='video/ogg' />
					<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
			  </video>
            
              
            </div>
            <a href="#" class="btn btn-primary">CTA LINK</a>
          </div>
          <h5 class="video-caption text-center">This Is A Caption For Video H5</h5>
          <!-- /Video Header -->
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN -->
        <div class="column-right">
          <!-- Right Callout -->
          <div class='callout-box orange-bg'>
            <div class='callout-content'>
              <div>
                <span>April 15 Deadline</span>
              </div>
            </div>
          </div>
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
          <!-- Steps to Getting Aid -->
          <div>
            <h2 class="text-center">Steps To Getting Aid H2</h2>
            <p class="intro-paragraph">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui (this should be marketing based copy).</p>
            <div class="text-center">
              <a class="btn btn-primary" href="#">Apply Now</a>
            </div>
            <div class="text-center page--link">
              <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Get Updates</a>
            </div>
          </div>
          <!-- /Steps to Getting Aid -->

          <!-- Steps to Getting Aid 2-->
          <div>
            <h2 class="text-center">Steps To Getting Aid H2</h2>
            <h3>Steps To Getting Aid H3</h3>
            <h4>Steps To Getting Aid H4</h4>
            <h5 class="video--caption">This Is A Caption For Video H5</h5>
          </div>
          <!-- /Steps to Getting Aid 2-->

          <!-- International Students -->
          <div>
            <h4>International Students H4</h4>
            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
            <blockquote class="margin-top-bottom row">“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.”</blockquote>
          </div>
          <!-- /International Students -->

          <!-- Paying for College -->
          <div class="row stacked-content">
            <div class="col-sm-6">
              <img class="fluid-img" src="http://placehold.it/468x332" alt="placeholder">
            </div>
            <div class="col-sm-6">
              <h3 class="no-margin">Paying for College</h3>
              <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
              <a class="btn btn-primary" href="#">See Cindy's Story</a>
            </div>
          </div>
          <!-- /Paying for College -->

          <!-- Table -->
          <div class="row padded">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead class="table__head">
                    <tr>
                      <th>Expense Category</th>
                      <th>In-State and Reciprocity*</th>
                      <th>Non-Resident</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Tuition/Fees</th>
                      <td>$XX,XXX</td>
                      <td>$XX,XXX</td>
                    </tr>
                    <tr>
                      <th scope="row">Books/Supplies</th>
                      <td>$XX,XXX</td>
                      <td>$XX,XXX</td>
                    </tr>
                    <tr>
                      <th scope="row">Room/Board</th>
                      <td>$XX,XXX</td>
                      <td>$XX,XXX</td>
                    </tr>
                    <tr>
                      <th scope="row">Transportation</th>
                      <td>$XX,XXX</td>
                      <td>$XX,XXX</td>
                    </tr>
                    <tr>
                      <th scope="row">Personal/Miscellaneous</th>
                      <td>$XX,XXX</td>
                      <td>$XX,XXX</td>
                    </tr>
                    <tr class="bold">
                      <th class="bold" scope="row">Total</th>
                      <td>$XX,XXX</td>
                      <td>$XX,XXX</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
          <!-- /Table -->

          <!-- Numbered List -->
          <div class="margin-bottom">
            <h4>Forms H4</h4>
            <ol class="circle-list">
              <li><a href="#">Noncustodial Parent’s Statement Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a>
                <ol class="circle-list">
                  <li><a href="#">Noncustodial Parent’s Statement Statement Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a></li>
                  <li><a href="#">International Student Financial Aid Applica<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a></li>
                  <li><a href="#">International Student Certification of Finances<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a></li>
                </ol>
              </li>
              <li><a href="#">International Student Financial Aid Applica<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a></li>
              <li><a href="#">International Student Certification of Finances<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a></li>
            </ol>
          </div>
          <!-- /Numbered List -->

          <!-- Supplemental Forms -->
          <div class="margin-bottom">
            <h4>Supplemental Forms H4</h4>

            <ul class="arrow-list">
              <li><a href="#">Business Farm Supplement oncustodial Parent’s Statement Statement Quis autem vel eum iure reprehenderit qui in ea voluptate</a>
                <ul class="arrow-list"> 
                  <li><a href="#">Financial Aid Handbook (2013/14) Business Farm Supplement oncustodial Parent’s Statement Statement Quis</a></li>
                  <li><a href="#">Financial Aid Handbook (2013/14)</a></li>
                </ul>
              </li>
              <li><a href="#">Financial Aid Handbook (2013/14)</a></li>
            </ul>
          </div>
          <!-- /Supplemental Forms -->

          <!-- Blockquote -->
          <div class="margin-bottom">
            <h4>Blockquote</h4>

            <blockquote>
              <cite>Cras mattis consectetur purus sit amet fermentum (cite).</cite> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

              Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.
            </blockquote>
          </div>
          <!-- /Blockquote -->

          <div class="row margin-bottom">
            <div class="col-sm-6">
              <h1>Consectetur Vestibulum</h1>
              <h2>Vulputate</h2>
              <h3>Consectetur</h3>
              <h4>Facilisis</h4>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
            </div>

            <div class="col-sm-6">
              <h1>H1</h1>
              <h2>H2</h2>
              <h3>H3</h3>
              <h4>H4</h4>
              <p><img src="//placehold.it/125/125" class="pull-left"><strong>img.pull-left</strong> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
              <p><img src="//placehold.it/125/125" class="pull-right"><strong>img.pull-right</strong> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
            </div>
          </div>
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