<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="_js/modernizr.custom.js"></script>
    <title>Academics</title>

<?php include '_inc/head-js-css.php'; ?>

  <!-- Change URLs to wherever Video.js files will be hosted -->
  <link href="/_css/video-js.min.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="/_js/video.js"></script>
  
  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "/_images/video/video-js.swf";
  </script>


  </head>
  <body class="has-hero" id="academics_page">

  
<?php include '_inc/nav.php'; ?>

    <div class="container-fluid page-container">

      <!-- Page Hero -->
      <div class="row-full-width full-row-with-video">

        <div class="page-hero-container page-hero-with-video hero-with-nav">
          <div class="page-hero text-center">
            <h1 class="hero-title">Bringing Your Passions Into Focus</h1>
            <p class="hero-text">The subject areas you see here are the intellectual foundation for our 40 interdisciplinary majors—more than many conventional colleges offer.</p>
            <div class="hero-buttons">
              <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#introVideoModal">Watch Video</a>
            </div>
          </div>
        </div>

        <div id="hero-video-container" class="academics">
            <div id="video-wrap">
                <video id="hero-video" preload="metadata" autoplay loop poster="/_images/_why/pond.jpg" style="width: 100%;">
                   <source src="/_images/_why/pond.mp4" type='video/mp4' />
                   <source src="/_images/_why/pond.webm" type='video/webm' />
                   <source src="/_images/_why/pond.ogv" type='video/ogg' />
                </video>
            </div>
        </div>

        <i id="intro_arrow_down" class="fa fa-angle-down"></i>
      
      </div>
      <!-- /Page Hero -->

    
      <!-- << Bottom Section >> -->
      <div class="row-full-width">

        <!-- LEFT COLUMN -->
        <div class="column-left side-nav" data-spy="affix" data-offset-top="500">
          <div class="reveal-side-nav"></div>
          <!-- Subnav -->
          <ul class="flat-list list-group">
            <li><div class="list-group-item active section-header">Academics</div></li>
            <li><a href="#" class="list-group-item">Program Overview</a></li>
            <li><a href="#" class="list-group-item">Social and Political Studies</a></li>
            <li><a href="#" class="list-group-item">Languages and Literature</a></li>
            <li><a href="#" class="list-group-item">Performing &amp; Visual Arts</a></li>
            <li><a href="#" class="list-group-item">Science, Mathematics, and Computing</a></li>
            <li><a href="#" class="list-group-item">Beyond the Cirriculum</a></li>
            <li><a href="#" class="list-group-item">Faculty Bios</a></li>
            <li><a href="#" class="list-group-item">Academic Advising and Support</a></li>
            <li><a href="#" class="list-group-item">Career Development</a></li>
          </ul>
          <!-- /Subnav -->
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">

          <!-- Intro -->
          <div>
            <p class="intro-paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
          </div>
          <!-- /Intro -->

          <!-- Filter-->
          <div>
            <h3 class="filter-title">Filter Results By:</h3>
          </div>
          <div>
            <form id="form-academics">

              <div class="row">
                <div class="col-md-4 col-xs-5">
                  <h5 class="text-uppercase">Program Type:</h5>
                  <div class="filter-item">
                    <div class="label-container">
                      <input id="study" class="filter" type="checkbox" name="filter-type" value="areas-of-study">
                      <label for="study"><span class="areas-of-study"></span></label>
                    </div>
                    <label for="study" class="filter-text">Areas of Study</label>
                  </div>
                  <div class="filter-item">
                    <div class="label-container">
                      <input id="special" class="filter" type="checkbox" name="filter-type" value="special-programs">
                      <label for="special"><span class="special-programs"></span></label>
                    </div>
                    <label for="special" class="filter-text">Special Programs</label>
                  </div>
                </div>

                <div class="col-md-8 col-xs-7 form-academics-border">
                  <h5 class="text-uppercase">I'm Interested In:</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <div class="filter-item">
                          <div class="label-container">
                            <input id="languages" class="filter" type="checkbox" name="filter-program" value="languages">
                            <label for="languages"><span class="languages"></span></label>
                          </div>
                          <label for="languages" class="filter-text second-label">Languages &amp; Literature</label>
                        </div>
                        <div class="filter-item">
                          <div class="label-container">
                            <input id="arts" class="filter" type="checkbox" name="filter-program" value="performing-arts">
                            <label for="arts"><span class="performing-arts"></span></label>
                          </div>
                          <label for="arts" class="filter-text second-label">Performing &amp; Visual Arts</label>
                        </div>
                        <div class="filter-item">
                          <div class="label-container">
                            <input id="science" class="filter" type="checkbox" name="filter-program" value="science">
                            <label for="science"><span class="science"></span></label>
                          </div>
                          <label for="science" class="filter-text second-label">Science, Mathematics &amp; Computing</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div>
                        <div class="filter-item">
                          <div class="label-container">
                            <input id="social-political" class="filter" type="checkbox" name="filter-program" value="social-political">
                            <label for="social-political"><span class="social-political"></span></label>
                          </div>
                          <label for="social-political" class="filter-text second-label">Social &amp; Political Studies</label>
                        </div>
                        <div class="filter-item">
                          <div class="label-container">
                            <input id="interdisciplinary" class="filter" type="checkbox" name="filter-program" value="interdisciplinary">
                            <label for="interdisciplinary"><span class="interdisciplinary"></span></label>
                          </div>
                          <label for="interdisciplinary" class="filter-text second-label">Interdisciplinary</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </form>

          </div>
          <!-- /Filter-->

          <!-- Grid -->
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <ul id="program-grid" class="program-grid">

                 <li class="program-item interdisciplinary areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Anthropology</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">African American Studies</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">American Studies</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Arabic</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Art History</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Asian Studies</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Bard Globalization &amp; International Affairs Program</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Bard Study Abroad &amp; International Programs</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Biology</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Ceramics</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Chemistry</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Chinese</span></div>
                  </a>
                </li>
                <li class="program-item languages special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Chinese Studies At Quingdao University</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Communication</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Computer Science</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Contemporary Critical Theory</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Creative Writing</span></div>
                  </a>
                </li>
                <li class="program-item languages special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Creative Writing at University of Manchester</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Critical Geography, Political Ecology &amp; Globalization Studies</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Cross-Cultural Relations</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Cultural Studies</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Dance</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Drawing &amp; Painting</span></div>
                  </a>
                </li>
                <li class="program-item science special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Dual Degree: Columbia Engineering Program (BA/BS)</span></div>
                  </a>
                </li>
                <li class="program-item science special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Dual Degree: John Jay Forensic Science Program (BA/BS)</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Dual Degree: Vermont Law Environmental Policy Program</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Ecology</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Ecology &amp; Sustainability Studies in Montserrat</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Economics</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Electronic Media &amp; the Arts</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Environmental &amp; Sustainability Studies</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">European Studies</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Food Studies Program</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">French &amp; Francophone Studies</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Gender Studies</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Geography</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">German Studies</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">History</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Intercultural Studies</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">International Business Master's at Munich Business School</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Italy Intensive in Tuscany (Easy Carolina University)</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Junior Year at Oxford</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Latin</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Liberal Arts in the Digital Age</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Linguistics</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Literary Studies</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Mathematics</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Modern Studies</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Music</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Natural Sciences</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Philosophy</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Photography</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Physics</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Political Studies</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Pre-Engineering</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Pre-Medical</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Private Music Instruction</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Psychology</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Quantitative Studies</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Russian Studies</span></div>
                  </a>
                </li>
                <li class="program-item science areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Science Foundations</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Social Action/Social Change</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Social Sciences</span></div>
                  </a>
                </li>
                <li class="program-item social-political areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Sociology</span></div>
                  </a>
                </li>
                <li class="program-item languages areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Spanish &amp; Latin American Studies</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Spanish Studies Abroad: Spain, Argentina, Cuba, or Puerto Rico</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Studies at International Center for Photography</span></div>
                  </a>
                </li>
                <li class="program-item interdisciplinary special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Study at Bard College</span></div>
                  </a>
                </li>
                <li class="program-item science special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Suny Update Medical University Summer Research Fellowship</span></div>
                  </a>
                </li>
                <li class="program-item social-political special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">The Social Scientific Inquiry Proseminar</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Theater Arts</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Theatre Studies at Eugine O'Niell Theater Center</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Theatre Studies at London Dramatic Academy</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts special-programs">
                  <a href="#">
                  <div class="box"><span class="box-text">Visiting Artists Program</span></div>
                  </a>
                </li>
                <li class="program-item performing-arts areas-of-study">
                  <a href="#">
                  <div class="box"><span class="box-text">Visual Studies</span></div>
                  </a>
                </li>
                <li id="expanded-content" class="program-item expander">
                  <div class="row">
                    <div class="col-xs-3 col-sm-6 col-md-6">
                      <img src="_images/testone.jpg" alt="teacher">
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-6">
                      <h2>Lorum Omnis Natus Ipsum</h2>
                      <p>Omnis iste natus error sit voluptatem accusantium doloremque veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
                      <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- /Grid -->

		
		<!-- If there were more content below the 
		filter boxes: -->
		<!--
		<div class="row">
		
			<div class="col-md-12">
				<h2>H2 Subhead</h2>
			  <p>Omnis iste natus error sit voluptatem accusantium doloremque veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
			</div>
		
		</div>
		-->	
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->

      </div>
      <!-- << /Bottom Section >> -->

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


    <div class="row-full-width">
      <!-- Sidbar Mobile Nav -->
      <div class="side-nav-mobile">
        <!-- Subnav -->
        <ul class="flat-list list-group list-group-mobile">
          <li>
            <ol class="flat-list crumb-mobile">
              <li><a href="#">Home</a></li>
              <li> > </li>
              <li>Academics</li>
            </ol>
          </li>     
          <li><a href="#" class="list-group-item">Program Overview</a></li>
          <li><a href="#" class="list-group-item">Social and Political Studies</a></li>
          <li><a href="#" class="list-group-item">Languages and Literature</a></li>
          <li><a href="#" class="list-group-item">Performing and Visual Arts</a></li>
          <li><a href="#" class="list-group-item">Science, Mathematics, and Computing</a></li>
          <li><a href="#" class="list-group-item">Beyond the Cirriculum</a></li>
          <li><a href="#" class="list-group-item">Faculty Bios</a></li>
          <li><a href="#" class="list-group-item">Academic Advising and Support</a></li>
          <li><a href="#" class="list-group-item">Career Development</a></li>
        </ul>
        <!-- /Subnav -->
      </div>
      <!-- /Sidbar Mobile Nav-->
    </div>
    
<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>

    <!-- expanding grid -->

    <script src="/_js/isotope.pkgd.min.js"></script>

    <script src="/_js/academics.js"></script>

  <script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.js"></script>
  <script type="text/javascript" src="/_js/backgroundVideo.mod.js"></script>

  <script>
	
	
	/*
	
	If this is a subpage, the following script needs to be enabled in order
	to sort on page load. For the Academics main landing page, this
	filter should not be pre-applied.
	
	setTimeout(function(){ 
		
		$('#arts').click(); // or the id of the checkbox to be pre-selected

	  }, 750); 
			     	
   	*/


    var controller;
    $(document).ready(function($) {
    
    
      $('#hero-video').backgroundVideo({
          $outerWrap: $('.hero-video-container'),
          parallaxOptions: {
              effect: 1
          }
      });

      // init controller
      controller = new ScrollMagic();

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