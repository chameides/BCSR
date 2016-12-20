<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="_js/modernizr.custom.js"></script>
    <title>Gateway</title>

<?php include '_inc/head-js-css.php'; ?>
  </head>
  <body class="has-hero">

  
<?php include '_inc/nav.php'; ?>

    <div class="container-fluid page-container">

      <!-- Page Hero -->
      <div class="row-full-width">

        <div class="page-hero-container gateway-bg">
          <div class="page-hero page-hero-gateway-alt text-center">
            <h1 class="hero-title">Alumni Headline h1</h1>

            <!-- CJ DEC 13 2016 CODE FOR LIBRARY SEARCH -->
            <script src="https://support.ebscohost.com/eit/scripts/ebscohostsearch.js" type="text/javascript"></script>
            <div class="form-wrapper">
              <div id="blk-1" class="toHide">
                <form action="" id="ebscohostCustomSearchBox" method="post" onsubmit="return ebscoHostSearchGo(this);">
                  <input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1" /> 
                  <input id="ebscohosturl" name="ebscohosturl" type="hidden" value="http://search.ebscohost.com/login.aspx?direct=true&amp;site=eds-live&amp;scope=site&amp;type=0&amp;custid=s8994393&amp;groupid=main&amp;profid=eds&amp;mode=and&amp;lang=en&amp;authtype=ip,guest,uid" /> 
                  <input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db" /><input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+" />
                  <input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="" />
                  <div class="form-group col-md-12 input-and-button-wrapper">
                    <div class="input-and-button-container">
                      <div class="input-container">
                        <input id="ebscohostsearchtext" class="form-control" name="ebscohostsearchtext" placeholder="Search Everything" type="text" />
                      </div>
                      <input class="btn btn-primary" type="submit" value="Search" />
                    </div>
                  </div>
                </form>
              </div>
              <div id="blk-2" class="toHide" style="display:none">
                <form id="CatalogSearchBox" action="http://simonsrock.ipac.dynixasp.com/ipac20/ipac.jsp" method="get" target="_new">
                  <input name="menu" type="hidden" value="search" />
                  <input name="aspect" type="hidden" value="basic_search" />
                  <input name="profile" type="hidden" value="maincentral" />
                  <input name="index" type="hidden" value=".GW" />
                  <div class="form-group col-md-12 input-and-button-wrapper">
                    <div class="input-and-button-container">
                      <div class="input-container">
                        <input class="portletLibSearchFormText form-control" id="catalogSearchWord" maxlength="100" name="term" type="text" placeholder="Search Catalog" />
                      </div>
                      <input class="btn btn-primary context" name="Quick Search" type="submit" value="Search" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <form class="SearchRadioToggle">
              <div id="guidedFieldSelectors" class="form-group col-md-12" style="color: white;">
                <div class="radio-inline">
                  <label><input id="rdb1" class="radio" type="radio" name="toggler" value="1" checked="checked"/>Search Everything
                  </label>
                  <label><input id="rdb2" type="radio" class="radio" name="toggler" value="2" maxlength="100"/>Search Catalog
                  </label>
                </div>
              </div>
            </form>
            <!-- SCRIPT ADDED BY CJ FOR LIBRARY SEARCH DEC 13 2016 
            Use radio buttons to toggle between two different forms, user experiences them as a single form
            -->
            <script>
              $(function() {
                  $("[name=toggler]").click(function(){
                    $('.toHide').hide();
                    $("#blk-"+$(this).val()).fadeToggle(500);
                  });
               });
            </script>
          </div>
        </div>

        <i id="intro_arrow_down" class="fa fa-angle-down"></i>
      
      </div>
      <!-- /Page Hero -->

    
      <!-- << Section One >> -->
      <div class="row-full-width">

        <!-- LEFT COLUMN -->
        <div class="column-left side-nav" data-spy="affix" data-offset-top="500">
          <div class="reveal-side-nav"></div>
          <!-- Subnav -->
          <ul class="flat-list list-group">
            <li><div class="list-group-item active section-header">Gateway</div></li>
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
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">

          <!-- Class News -->
          <div class="row image-list-section">
            <div class="col-xs-3 col-sm-3">
              <a href="#" class="image-thumb">
                <img src="../_images/class-news.jpg" alt="class news">
                <div class="image-text-overlay-container">
                  <span class="image-text-overlay text-center">Class News!</span>
                </div>
              </a>
            </div>
            <div class="col-xs-9 col-sm-9">
              <div class="col-sm-12">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui (this should be marketing based copy).</p>
              </div>
              <div class="col-sm-6">
                <ul class="arrow-list">
                  <li><a href="#">Natus error sit voluptatem</a></li>
                  <li><a href="#">Doloremque laudantium</a></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul class="arrow-list">
                  <li><a href="#">Natus error sit voluptatem</a></li>
                  <li><a href="#">Doloremque laudantium</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /Class News -->
          <!-- Get Involved -->
          <div class="row image-list-section">
            <div class="col-xs-3">
              <a href="#" class="image-thumb">
                <img src="../_images/get-involved.jpg" alt="get involved">
                <div class="image-text-overlay-container">
                  <span class="image-text-overlay text-center">Get Involved</span>
                </div>
              </a>
            </div>
            <div class="col-xs-9">
              <div class="col-sm-12">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui (this should be marketing based copy).</p>
              </div>
              <div class="col-sm-6">
                <ul class="arrow-list">
                  <li><a href="#">Natus error sit voluptatem</a></li>
                  <li><a href="#">Doloremque laudantium</a></li>
                </ul>
              </div>
              <div class="col-md-6">
              </div>
            </div>
          </div>
          <!-- Get Involved -->
          <!-- Resources -->
          <div class="row image-list-section">
            <div class="col-xs-3">
              <a href="#" class="image-thumb">
                <img src="../_images/resources.jpg" alt="recources">
                <div class="image-text-overlay-container">
                  <span class="image-text-overlay text-center">Resources for Alumni</span>
                </div>
              </a>
            </div>
            <div class="col-xs-9">
              <div class="col-sm-12">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui (this should be marketing based copy).</p>
              </div>
              <div class="col-sm-6">
                <ul class="arrow-list">
                  <li><a href="#">Natus error sit voluptatem</a></li>
                  <li><a href="#">Doloremque laudantium</a></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul class="arrow-list">
                  <li><a href="#">Natus error sit voluptatem</a></li>
                  <li><a href="#">Doloremque laudantium</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /Resources -->
          <!-- Give Back -->
          <div class="row image-list-section">
            <div class="col-xs-3">
              <a href="#" class="image-thumb">
                <img src="../_images/give-back.jpg" alt="give back">
                <div class="image-text-overlay-container">
                  <span class="image-text-overlay text-center">Give Back</span>
                </div>
              </a>
            </div>
            <div class="col-xs-9">
              <div class="col-sm-12">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui (this should be marketing based copy).</p>
              </div>
              <div class="col-sm-6">
                <ul class="arrow-list">
                  <li><a href="#">Natus error sit voluptatem</a></li>
                  <li><a href="#">Doloremque laudantium</a></li>
                </ul>
              </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div>
          <!-- /Give Back -->
          <!-- Connect -->
          <div class="row image-list-section">
            <div class="col-xs-3">
              <a href="#" class="image-thumb">
                <img src="../_images/connect.jpg" alt="connect">
                <div class="image-text-overlay-container">
                  <span class="image-text-overlay text-center">Connect on Social Media</span>
                </div>
              </a>
            </div>
            <div class="col-xs-9">
              <div class="col-sm-12">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui (this should be marketing based copy).</p>
              </div>
              <div class="col-sm-6">
                <ul class="arrow-list">
                  <li><a href="#">Natus error sit voluptatem</a></li>
                  <li><a href="#">Doloremque laudantium</a></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul class="arrow-list">
                  <li><a href="#">Natus error sit voluptatem</a></li>
                  <li><a href="#">Doloremque laudantium</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /Connect -->

        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->

      </div>
      <!-- << /Section One >> -->
    
      <!-- << Events Section >> -->
      <div class="row-full-width">
        <h2 class="text-center">Mark Your Calendars</h2>
      </div>

    </div><!-- /container-fluid -->

    <!-- << Section Two >> -->
      <?php include '_inc/events_carousel.php'; ?>
    <!-- << /Section Two >> -->

    <div class="row-full-width">
      <!-- Sidbar Mobile Nav -->
      <div class="side-nav-mobile">
        <!-- Subnav -->
        <ul class="flat-list list-group list-group-mobile">
          <li><div class="list-group-item active section-header">Gateway</div></li>
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

  <script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.debug.js"></script>

  <script>

    var controller;
    $(document).ready(function($) {
    
      // init controller
      controller = new ScrollMagic();

      // Page hero parallax
      var tween_page_hero = TweenMax.fromTo('.page-hero', 1.5, 
          { 'opacity' : 1, 'padding-top' : $('.page-hero').css('padding-top')},
          { 'opacity' : 0.5, 'padding-top' : (parseInt($('.page-hero').css('padding-top'))+60) +'px'}
      );
      // build scene
      var scene_page_hero = new ScrollScene({duration: 300}).setTween(tween_page_hero).addTo(controller);
    });
  </script>

  </body>
</html>