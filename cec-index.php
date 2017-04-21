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
    <div class="content-wrapper">
      <?php include '_inc/nav-cec.php'; ?>
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
          <h1 class="header-page text-center">Index</h1>
          <div class="col-md-6">
            <ul>
              <!--<li><a href="#templates">Templates</a></li>-->
              <li><a href="cec-typography.php">Typography</a></li>
              <li><a href="cec-structure.php">Structure</a></li>
              <li><a href="cec-constant-contact.php">Constant Contact</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul>
              <li><a href="cec-hero.php">Hero</a></li>
              <li><a href="cec-full.php">Full</a></li>
              <li><a href="cec-search.php">Search</a></li>    
            </ul>
          </div>
        </div><!--end main-content--> 
      </div><!-- /.container -->
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
    </div><!-- /.content-wrapper -->
    <?php include '_inc/footer-cec.php'; ?>   
    <?php include '_inc/bottom-js-cec.php' ?>
  </body>
</html>