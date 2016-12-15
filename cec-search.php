<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simon's Rock Templates and Style Guide</title>

    <?php include '_inc/head-js-css-cec.php'; ?>
    
  </head>
  <body class="body-width-partial">
    <div class="content-wrapper">
      <?php include '_inc/nav-cec.php'; ?>
        <div class="container-fluid page-container">
          <div class="column-center"> 
            <h1 class="header-page text-center">Search Simon's Rock</h1>
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
              <div class="gcse-searchresults-only" data-defaultToRefinement="cec only"></div>
            </div>
          </div>
    
      
    </div>
      </div><!-- /.container -->

      <?php include '_inc/footer-cec.php'; ?>   
      <?php include '_inc/bottom-js-cec.php' ?>
    </div>
  </body>
</html>