<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Structure | Center for Early College </title>

    <?php include '_inc/head-js-css-academy.php'; ?>
    
  </head>
  <body>
    <div class="content-wrapper">
      <?php include '_inc/nav-academy.php'; ?>
      <div class="container-fluid page-container">
        <div class="secondary-nav">
          <ul class="flat-list list-group">
            <li class="depth-2"><a href="/test/" class="list-group-item">test</a></li>
            <li class="depth-3 link-list-no-link">Case Studies</li>
            <li class="depth-3"><a href="/test/level3/mixed-media.php">Mixed Media</a></li>
            <li class="depth-3"><a href="/test/level3/mixed-media.php">Second Item</a></li>
          </ul>
        </div>
        <div class="main-content">
          <h1 class="header-page text-center-over-p">Case Studies</h1>
          <p>Here is a draft of the CEC navigation.</p> 
          <h2>Structure</h2>
          <p>The top navigation features Bard red, key navigation structure, and text treatment of the organization name. On smaller screen sizes, the menu is revealed with the 3-dash 'hamburger' menu. The bottom navigation has additional features. Initially, we were going to focus on top tasks in the bottom nav and elected to go with a more minimal presentation instead.</p> 
          <h2>Information Architecture</h2>
          <h3>Primary</h3>
          <p>The top navigation of the site is separated into five branches, plus two tasks contact us and search. The five branches are consistent with the approved strategy. Each branch references a key aspect of CEC we want to provide and they also cover the scope of the information.</p>
          <h3>Secondary</h3>
          <p>The secondary navigation provides context for where this page fits within the larger structure. Users can browse up and across the file tree. It combines breadcrumbs and sibling links into a single module. On smaller screens the navigation drops below the content and above the footer.</p>
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
          <h2>Margins and Layout</h2>
          <p>The standard content block will leave a left margin on the left hand side. The secondary nav will fit in this area. Paragraphs are limited width. As the page width expands, they will move towards the center. Images will go to right, while leaving a left margin on large screens.</p>
          <img alt="100% image" src="http://placehold.it/2000x200" title="A title element for this placeholder image.">
          <p>Anticipating the need for different and flexible layouts, we have additional grid options. The CMS template will offer options to mix and match grid widths. 
        </div>
        <div class="main-content-shift">
          <h3>Shift</h3>
          If no secondary nav, add a shift version so that it stays in line
          <img alt="100% image" src="http://placehold.it/2000x200" title="A title element for this placeholder image.">
          <p>placeholder text</p>
          
          <div class="col-md-12">
            <div class="row stacked-content">
              <div class="col-sm-8">
                <h3>Medium Red Arrow Link</h3>
                  <p>There is also a medium red arrow link that can be used in an aside or next to an image.</p>
                  <p>Callouts are the boxes at the side on the Mixed Media and Profile pages. These are ephemeral content similar to a pull quote where information in the document is pulled out and displayed in a way that is easy-to-scan</p>
      <p>CTA links associated with H3’s and below match their alignment (left).</p>
              </div>
              <!-- <div class="col-sm-4" style="> -->
              <div class="col-sm-4 aside">
                <p>The admission process is just that - a process. We’ll work together to decide if the right time for college is now.</p>
                <a class="right-arrow-aside" href="#"><i class="fa fa-angle-right bold"></i> Contact Us</a>
                <p>Deciding if early college is right for your child? Listen to the stories of other Simon’s Rock families.</p>
                <div><a class="right-arrow-aside" href="#"><i class="fa fa-angle-right bold"></i> Parent Stories and if it is extra long?</a></div>
              </div>
           </div>
          </div>
          <p>placeholder text</p>

        </div>
        <div class="main-content-wide">
          <h3>wide</h3>
          <img alt="100% image" src="http://placehold.it/2000x200" title="A title element for this placeholder image.">
          <p>A full width block that has margin</p>
        </div>
       
        <div class="main-content-shift">
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
              <li><a href="cec-structure.php" class="list-group-item active">Structure</a></li>
              <li><a href="sample1" class="list-group-item">Working with students</a></li>
              <li><a href="/mixed-media.php" class="list-group-item">The Liberal Arts</a>
              </li>
              <li><a href="sample2" class="list-group-item">Dates and Deadlines</a></li>
              <li><a href="sample3" class="list-group-item">Student Expectations</a></li>
          </ul>
          <!-- /Subnav -->
        </div><!-- /Sidbar Mobile Nav-->
      </div><!--row-full-width-->
      <?php include '_inc/footer-academy.php'; ?>   
      <?php include '_inc/bottom-js-cec.php' ?>
    </div><!--content-wrapper-->
  </body>
</html>