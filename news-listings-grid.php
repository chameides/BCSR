<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>

<?php include '_inc/head-js-css.php'; ?>

<style>

  @supports (display: grid) {
    .grid.grid-all-news {
      grid-template-columns: 0px repeat(2, 1fr) 0px;
      grid-template-rows: auto repeat(24, minmax(80px, auto)); }
    @media (min-width: 768px) {
      .grid.grid-all-news {
        grid-template-columns: 0px repeat(3, 1fr) 0px;
        grid-template-rows: auto repeat(14, minmax(80px, auto)); } }
    @media (min-width: 992px) {
      .grid.grid-all-news {
        grid-template-columns: 0px repeat(4, 1fr) 0px;
        grid-template-rows: auto repeat(10, minmax(80px, auto)); } }
    .grid.grid-all-news {
      grid-template-areas: "hero hero hero hero " " . item1 item2 . " " . item3 item4 . " " . item6 item5 . " " . item7 item9 . " " . item8 item8 . " " . item8 item8 . " " . item11 item10 . " " . item13 item12 . " " . item14 item14 . " " . item15 item15 . " " . item15 item15 . " " . item15 item15 . " " . item16 item16 . " " . item17 item17 . " " . item18 item18 . " " . item18 item18 . " " . item19 item19 . " " . item20 item20 . " " . item21 item21 . " " . item22 item22 . " " . item23 item24 . " " . item23 item24 . " " . item25 item26 . " " . item25 item26 . "; }
    @media (min-width: 768px) {
      .grid.grid-all-news {
        grid-template-areas: "hero hero hero  hero  hero" " . item1 item2 item3 . " " . item4 item6 item12 . " " . item9 item7 item12 . " " . item8 item8 item5 . " " . item8 item8 item5 . " " . item11 item10 item13 . "  " . item11 item10 item14 . " " . item15 item15 item14 . " " . item15 item15 item17 . " " . item18 item18 item17 . " " . item18 item18 item19 . " " . item16 item20 item21 . " " . item22 item22 item25 . " " . item23 item24 item26 . "; } }
    @media (min-width: 992px) {
      .grid.grid-all-news {
        grid-template-areas: "hero hero hero   hero   hero   hero" ". item1  item3 item6 item7 . "  ". item2  item5 item5 item4 . "  " . item8 item8 item10 item11  . "  " . item8 item8 item10 item11 . "     " . item13  item9  item14 item16 . " " . item13  item9  item12 item12 . "    " . item15 item15 item17 item19 . "   " . item18 item18 item20 item26  . "   " . item22 item25 item25 item21  . " " . item23 item25 item25 item24  . "; } }
    .grid.grid-all-news .news-hero {
      grid-area: hero; }
    .grid.grid-all-news .news-item:nth-child(2) {
      grid-area: item1; }
    .grid.grid-all-news .news-item:nth-child(3) {
      grid-area: item2; }
    .grid.grid-all-news .news-item:nth-child(4) {
      grid-area: item3; }
    .grid.grid-all-news .news-item:nth-child(5) {
      grid-area: item4; }
    .grid.grid-all-news .news-item:nth-child(6) {
      grid-area: item5; }
    .grid.grid-all-news .news-item:nth-child(7) {
      grid-area: item6; }
    .grid.grid-all-news .news-item:nth-child(8) {
      grid-area: item7; }
    .grid.grid-all-news .news-item:nth-child(9) {
      grid-area: item8; }
    .grid.grid-all-news .news-item:nth-child(10) {
      grid-area: item9; }
    .grid.grid-all-news .news-item:nth-child(11) {
      grid-area: item10; }
    .grid.grid-all-news .news-item:nth-child(12) {
      grid-area: item11; }
    .grid.grid-all-news .news-item:nth-child(13) {
      grid-area: item12; }
    .grid.grid-all-news .news-item:nth-child(14) {
      grid-area: item13; }
    .grid.grid-all-news .news-item:nth-child(15) {
      grid-area: item14; }
    .grid.grid-all-news .news-item:nth-child(16) {
      grid-area: item15; }
    .grid.grid-all-news .news-item:nth-child(17) {
      grid-area: item16; }
    .grid.grid-all-news .news-item:nth-child(18) {
      grid-area: item17; }
    .grid.grid-all-news .news-item:nth-child(19) {
      grid-area: item18; }
    .grid.grid-all-news .news-item:nth-child(20) {
      grid-area: item19; }
    .grid.grid-all-news .news-item:nth-child(21) {
      grid-area: item20; }
    .grid.grid-all-news .news-item:nth-child(22) {
      grid-area: item21; }
    .grid.grid-all-news .news-item:nth-child(23) {
      grid-area: item22; }
    .grid.grid-all-news .news-item:nth-child(24) {
      grid-area: item23; }
    .grid.grid-all-news .news-item:nth-child(25) {
      grid-area: item24; }
    .grid.grid-all-news .news-item:nth-child(26) {
      grid-area: item25; }
    .grid.grid-all-news .news-item:nth-child(27) {
      grid-area: item26; }
  }/*end @support */

/*set background images for grid*/
.grid #image-container-2 {
  background-image: url(https://simons-rock.edu/_images/why-simons-rock/the-rocker-community/individual-alumni-profiles/hninn/hninn-action.jpg); }

.grid #image-container-3 {
  background-image: url(/_images/grid/selfie2.jpg);
  background-position: top; }

.grid #image-container-4 {
  background-image: url(/_images/grid/breadpuppet.jpg); }


</style>

  </head>
  <body id="newslisting" class="has-hero">

  
<?php include '_inc/nav.php'; ?>

    <div class="container-fluid page-container"> 

    
      <!-- << Section One >> -->
      <div class="row-full-width">
        <!-- CENTER COLUMN -->
       
          <section id="news-grid">
            <div class="grid grid-news grid-all-news"> 
              <div class="news-hero page-hero-container page-hero-container-min news-bg">
                <div class="page-hero page-hero-news-alt text-center">
                  <h1 class="hero-title">Simon's Rock News</h1>
                  <p class="hero-text">Highlights from campus and the Simon's Rock community</p>
                  <div class="hero-buttons">
                    <a class="center-block btn btn-primary" href="#">Events</a>
                    <a class="center-block btn btn-primary" href="#">Subscribe</a>
                    <a class="center-block btn btn-primary" href="#">Media Relations</a>
                  </div>
                </div>
              </div>
              <?php include '_inc/grid-content-example.php'; ?>
            </div>  
          </section> 
        <div class="column-center">
          <!-- News Listings -->
          <div class="news-listings">
            <!-- Article Start -->
            <div class="news-article">
              <!-- old link styles <a class="link-news-image" href="#"><img src="http://lorempixel.com/400/300/cats/" class="image-news" alt="alt copy goes here"></a>
              <a class="link-news-header" href="#"><h3 class="squeeze">Rockers, Roommates, Best Friends and Fulbright Scholars</h3></a> -->
              <!-- Comibined Text and Image links for accessibility -->
              <a class="link-news-header" href="#"><img class="image-news" src="http://lorempixel.com/400/300/cats/" alt=""/><h3 class="squeeze">    Rockers, Rommates, Best Friends, and Fullbright Scholars</h3></a>
              <a class="link-news-header" href="#"><h5 class="squeeze">March 16, 2015</h5></a>
              <div class="news-content-container"> 
                <div class="news-content">
                  Marisa Benitez ‘11 and Zara Anwarzai ’11 have always been ambassadors of culture. It’s just what they do. Zara hails from Indianapolis—a quintessential all-American city—and yet her mother is Russian and her father Afghani. Marisa is an L.A.
                </div>
                <div class="news-more">
                  <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Read More</a>
                </div>
              </div>
            </div>
            <!-- Article End -->        
            <!-- Article Start -->
            <div class="news-article">
              <!-- old link styles <a class="link-news-image" href="#"><img src="_images/placeholder.gif" class="image-news" alt="#"></a>
              <a class="link-news-header" href="#"><h3 class="squeeze">Simon's Rock Loses Beloved Dance Professor Wendy Shifrin</h3></a> -->
              <!-- Comibined Text and Image links for accessibility -->
              <a class="link-news-header" href="#"><img class="image-news" src="_images/placeholder.gif" alt=""/><h3 class="squeeze">Simon's Rock Loses Beloved Dance Professor Wendy Shifrin</h3></a>
              <a class="link-news-header" href="#"><h5 class="squeeze">March 16, 2015</h5></a>
              <div class="news-content-container"> 
                <div class="news-content">
                  Wendy Shifrin, beloved colleague, teacher, and friend, died on Wednesday morning after a long illness. A member of the Simon’s Rock faculty since 1984, Wendy was not only an accomplished dancer and choreographer but also a dedicated, compassionate, and gifted teacher. Her devotion to the College was legendary, and her door was always open to the many students -- including over 150 advisees during her career at Simon’s Rock -- who found her a caring mentor and guide and who remained in touch with her long after graduating.
                </div>
                <div class="news-more">
                  <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Read More</a>
                </div>
              </div>
            </div>
            <!-- Article End -->
            <!-- Article Start -->
            <div class="news-article">
              <!-- old link styles<a class="link-news-image" href="#"><img src="http://lorempixel.com/400/200/cats/" class="image-news" alt="alt copy goes here2"></a>
              <a class="link-news-header" href="#"><h3 class="squeeze">H3 Article Title</h3></a> -->
              <!-- Comibined Text and Image links for accessibility -->
              <a class="link-news-header" href="#"><img class="image-news" src="http://lorempixel.com/400/200/cats/" alt=""/><h3 class="squeeze">H3 Article Title</h3></a>
              <a class="link-news-header" href="#"><h5 class="squeeze">Date</h5></a>
              <div class="news-content-container"> 
                <div class="news-content">
                  The content goes here. Image floats right is optional. Aspect ratio depends on image used. 
                </div>
                <div class="news-more">
                  <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Read More</a>
                </div>
              </div>
            </div>
            <!-- Article End -->        
          </div>
          <div class="text-center" style="clear:both;">
            <a class="btn btn-primary" href="#">News Archives</a>
          </div>
          <!-- End of News Listings -->
        <!-- /CENTER COLUMN -->


        <!-- RIGHT COLUMN -->
      
        <!-- RIGHT COLUMN -->
      </div>
       <?php include '_inc/events_carousel.php'; ?>
      <!-- << /Section One >> -->
      </div>

    </div><!-- /container-fluid -->


<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>  
  </body>
</html>