<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Structure | Center for Early College </title>

    <?php include '_inc/head-js-css-cec.php'; ?>
    
  </head>
  <body class="body-width-partial">
    <div class="content-wrapper">
      <?php include '_inc/nav-cec.php'; ?>
      <div class="container-fluid page-container">
        <div class="secondary-nav">
          <ul class="flat-list list-group">
            <!--<li><a href="#" class="list-group-item">Home</a>
              <ul class="flat-list list-group">-->
                <li><a href="#" class="list-group-item">Approach to Education</a>
                  <ul class="flat-list list-group">
                    <li><a href="#" class="list-group-item">Resources</a>
                      <ul class="flat-list list-group">
                        <li><a href="#" class="list-group-item">Complex Classroom Methodologies</a>
                          <ul class="flat-list list-group">
                            <li><a href="#" class="list-group-item active">Case Studies</a></li>
                            <li><a href="#" class="list-group-item">Working with students</a></li>
                            <li><a href="#" class="list-group-item">The Liberal Arts</a></li>
                            <li><a href="#" class="list-group-item">Student Expectations</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  <!--</ul>
                </li>-->
              </ul>
            </li>
          </ul>
        </div><!-- secondary -nav -->
        <div class="main-content">
          <h1 class="header-page text-center-over-p">Case Studies</h1>
          <p>Here is a draft of the CEC navigation.</p> 
          <h2>Structure</h2>
          <p>The top navigation features Bard red, key navigation structure, and text treatment of the organization name. On smaller screen sizes, the menu is revealed with the 3-dash 'hamburger' menu. The bottom navigation features top tasks.</p> 
          <h2>Information Architecture</h2>
          <h3>Primary</h3>
          <p>The top navigation of the site is separated into four branches, plus two tasks contact us and search. The four branches are consistent with the approved strategy. Each branch references a key aspect of CEC we want to provide and they also cover the scope of the information.</p>
          <h3>Secondary</h3>
          <p>The secondary navigation provides context for where this page fits within the larger structure. Users can browse up and across the file tree. On smaller screens the navigation drops below the content and above the footer.</p>
          <h3>Engagement</h3>
          <p>Footer navigation gives key ways for users to engage and connect with CEC. We decided against listing the most likely pages people will want to visit.</p>   
          <h3>Bard branding</h3>
          <p>In addition to incorporating Bard into the CEC logo, the Bard logo appears at the very bottom of the page, underneath the copyright stuff. The placement of the logo reaffirms that we are a branch of Bard College.</p> 
          <h2>Additional Features</h2>
          <p>We can and will build out more parts including:</p> 
          <ul>
            <li>Actual links for each part</li>
            <li>Refinement of the logo animation and transitions</li>
            <li>Refinement of spacing</li>
            <li>Hero graphic version</li>
          </ul>
          <h2>Technical Notes</h2>
          <p>The JavaScript is branched from the Simon's Rock repository. The original script was broken up into parts (modules). Alternate and additional modules were created specific for the needs of this site. Then two versions of script, each compiled in grunt with the appropriate modules.</p>

          <pre>
concat:   
  app_bcsr:
    src: [
      '_js/_js-not-minified/app/app-part1.js',
      '_js/_js-not-minified/app/show-search-bcsr.js',
      '_js/_js-not-minified/app/app-part2.js',
      ]
    dest: 
      '_js/_js-not-minified/app/app-bcsr-combined.js'
  app_cec:  
    src: [
      '_js/_js-not-minified/app/app-part1.js',
      '_js/_js-not-minified/app/show-search-cec.js',
      '_js/_js-not-minified/app/app-part2.js',
      ]
    dest: 
      '_js/_js-not-minified/app/app-cec-combined.js' 
          </pre>
          



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