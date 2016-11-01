<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simon's Rock Templates and Style Guide</title>

    <?php include '_inc/head-js-css-cec.php'; ?>
    
  </head>
  <body>
  <?php include '_inc/nav-cec.php'; ?>
    <div class="container-fluid page-container">
      <div class="secondary-nav">
        <ul class="flat-list list-group">
          <li><a href="#" class="list-group-item">Home</a>
            <ul class="flat-list list-group">
              <li><a href="#" class="list-group-item">Approach to Education</a>
                <ul class="flat-list list-group">
                  <li><a href="#" class="list-group-item">Resources</a>
                    <ul class="flat-list list-group">
                      <li><a href="#" class="list-group-item">Complex Classroom Methodologies</a>
                        <ul class="flat-list list-group">
                          <li><a href="#" class="list-group-item active">Case Studies</a>
                          </li>
                          <li><a href="#" class="list-group-item">Working with students</a></li>
                          <li><a href="#" class="list-group-item">The Liberal Arts</a></li>
                          <li><a href="#" class="list-group-item">Student Expectations</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- secondary -nav -->
      <div class="main-content">
        <h1 class="header-page text-center-over-p">Case Studies</h1>
        Here is a draft of the CEC navigation. 
        <h2>Structure</h2>
        <p>The top navigation features Bard red, key navigation structure, and text treatment of the organization name. On smaller screen sizes, the menu is revealed with the 3-dash 'hamburger' menu. The bottom navigation features top tasks.</p> 
        <h2>Information Architecture</h2>
        The navigation of the site is separated into four branches, plus two tasks contact us and search. 

        <h2>Additional Features</h2>
        We can and will build out more parts including: 
        <ul>
          <li>Actual links for each part</li>
          <li>Refinement of the animation and transitions</li>
          <li>Refinement of spacing</li>
          <li>Optimize the breakpoint between mobile and desktop menu</li>
          <li>Swap out logo</li>
          <li>Hero graphic version</li>
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
            <li><a href="#" class="list-group-item">Working with students</a></li>
            <li><a href="/mixed-media.php" class="list-group-item">The Liberal Arts</a>
            </li>
            <li><a href="#" class="list-group-item">Dates and Deadlines</a></li>
            <li><a href="#" class="list-group-item">Student Expectations</a></li>
        </ul>
        <!-- /Subnav -->
      </div><!-- /Sidbar Mobile Nav-->
    </div><!--row-full-width-->
  <?php include '_inc/footer-cec.php'; ?>   
  <?php include '_inc/bottom-js-cec.php' ?>
  </body>
</html>