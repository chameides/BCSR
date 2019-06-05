<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hero | Center for Early College </title>

    <?php include '_inc/head-js-css-academy.php'; ?>
    
  </head>
  <body class="has-hero">
      <?php include '_inc/nav-academy.php'; ?>
      <div class="container-fluid page-container">
        <!-- Page Hero -->
        <div class="row-full-width">
          <div class="page-hero-container cec-bg">
            <div class="page-hero page-hero-gateway-alt text-center" style="margin-bottom: 0">
              <h1 class="hero-title">Hero Graphic</h1>
              <p class="hero-text">Kick off a page with a full-width image and text overlay.</p>
            </div>
          </div>
        </div>
        <!-- /Page Hero -->
      </div><!-- /container-fluid-->
    
      <div class="container-fluid page-container">
        <div class="secondary-nav">
          <ul class="flat-list list-group">
            <li class="depth-2"><a href="/test/" class="list-group-item">test</a></li>
            <li class="depth-3 link-list-no-link">Case Studies</li>
            <li class="depth-3"><a href="/test/level3/mixed-media.php">Mixed Media</a></li>
            <li class="depth-3"><a href="/test/level3/mixed-media.php">Second Item</a></li>
          </ul>
        </div>
        <div class="main-content-shift">
          <p>It's pretty simple.</p>
          <ol>
            <li>Start a mixed media page</li>
            <li>Set Hero to Image</li>
            <li>Fill out table</li>
            <li>Use "Container Class" =  "section-full-screen" for no bottom margin</li>
          </ol>
          <p>Meanwhile, behind the scenes the HTML adjusts to change the nav, push the navigation down, and adjust the section 1.</p>
        </div>
         <div class="section-full-screen-wrapper">
        <section class="slat-network section-full-screen">
          <div class="container abscontainer">
            <div class="intro_sub">
              <img src="/_images/cec/map-network.png" class="hidden-sm hidden-md hidden-lg">
              <h1 class="hero-title">Our Network</h1>
              <p class="hero-text">We run a network of early college programs, giving unprecedented access to the liberal arts.<br><br>
              </p>
              <a type="button" class="btn btn-primary">Early College Network</a>
            </div>
          </div> 
        </section>
      </div>
      <div class="main-content-shift">
          <h2>Full Width Section</h2>
          <p>One hero section not enough? Set up a second full-width section</p>
          <ol>
            <li>Set section 1 to bleed</li>
            <li>Add hero-image-only snippet</li>
            <li>Set intro-image, title, content, buttons, images</li>
            <li>Container Class adds a class to the section. section-full-screen by default</li>
            <li>Section class also adds a class to the section. Use this for 1-off modifications.</li>
            <li>On the above hero graphic, use "Container Class" =  "section-full-screen" for no bottom margin</li>
          </ol>
          <p>Meanwhile, behind the scenes the HTML is outputted
          <ul>
            <li>If "section-full-screen" is present, then the block is outputted differently</li>
            <li>Inline style for the background images is placed in the head. Requires content-1 to be set to "bleed" and for image to be present. Note: only works on content-1.</li>
          </ul>

          



        </div><!-- main-content-->
      </div><!--fluid container-->
      <div class="row-full-width">
        <!-- Sidbar Mobile Nav -->
        <div class="side-nav-mobile">
          <!-- Subnav -->
          <ul class="flat-list list-group list-group-mobile">
            <li>
              <ol class="flat-list crumb-mobile">
                <li><a href="#">Home</a></li>
                <li> > </li>
                <li><a href="#">Approach to Education</a></li>
                <li> > </li>
                <li><a href="#">Resources</a></li>
                <li> > </li>
                <li><a href="#">Complex Classroom Methodologies</a></li>
                <li> > </li>
                <li>Case Studies</li>
              </ol>
            </li>  
              <li><a href="sample1" class="list-group-item">Working with students</a></li>
              <li><a href="/mixed-media.php" class="list-group-item">The Liberal Arts</a>
              </li>
              <li><a href="sample2" class="list-group-item">Dates and Deadlines</a></li>
              <li><a href="sample3" class="list-group-item">Student Expectations</a></li>
          </ul>
          <!-- /Subnav -->
        </div><!-- /Sidbar Mobile Nav-->
      </div><!--row-full-width-->
      <?php include '_inc/footer-cec.php'; ?>   
      <?php include '_inc/bottom-js-cec.php' ?>
    </div><!--content-wrapper-->
  </body>
</html>