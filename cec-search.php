<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search | Center for Early College </title>

    <?php include '_inc/head-js-css-cec.php'; ?>
    
  </head>
  <body>
    <div class="content-wrapper">
      <?php include '_inc/nav-cec.php'; ?>
      <div class="container-fluid page-container">
        <div class="secondary-nav">
         <ul class="flat-list list-group">
            <li class="depth-2"><a href="/test/" class="list-group-item">Why Early College</a></li>
            <li class="depth-2"><a href="/test/" class="list-group-item">See Our Results</a></li>
            <li class="depth-2"><a href="/test/" class="list-group-item">Teaching Resources</a></li>
         </ul>
      </div>
        <div class="main-content">
            <h1 class="header-page text-center-over-p">Search Simon's Rock</h1>
            <p>hey, do a search. please. I dare you.</p>
            <div>
              <script>
                (function () {
                  var cx = '006449226924018100792:z0moxjgu4ws';
                  var gcse = document.createElement('script');
                  gcse.type = 'text/javascript';
                  gcse.async = true;
                  gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                  '//cse.google.com/cse.js?cx=' + cx;
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(gcse, s);
                })();
              </script>
              <div class="gcse-searchbox" data-resultsUrl="/search.php" data-queryParameterName="gs"></div>
              <div class="gcse-searchresults" data-defaultToRefinement="cec only"></div>
              <!--<div class="gcse-searchresults-only" data-defaultToRefinement="cec only"></div>-->
            </div>
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