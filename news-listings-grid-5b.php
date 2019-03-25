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
    .grid.grid-all-news-5b {
      grid-template-columns: 0px repeat(2, 1fr) 0px;
      grid-template-rows: auto;
      grid-template-areas: "hero hero hero hero" ". item2 item2 ." ". item3 item1 ." ". item4 item5 ."; }
      @media (min-width: 768px) {
        .grid.grid-all-news-5b {
          grid-template-columns: 0px repeat(3, 1fr) 0px; } }
      @media (min-width: 992px) {
        .grid.grid-all-news-5b {
          grid-template-columns: 0px repeat(4, 1fr) 0px; } }
      @media (min-width: 768px) {
        .grid.grid-all-news-5b {
          grid-template-areas: "hero hero hero hero hero" ". item2  item2 item1 ." ". item5  item3 item4 ."; } }
      @media (min-width: 992px) {
        .grid.grid-all-news-5b {
          grid-template-areas: "hero hero   hero  hero  hero hero" ". item2  item5 item1 item3 ." ". item2  item4 item1 item3 ."; } }
      .grid.grid-all-news-5b .news-hero {
        grid-area: hero; }
      .grid.grid-all-news-5b .news-item:nth-child(2) {
        grid-area: item1; }
      .grid.grid-all-news-5b .news-item:nth-child(3) {
        grid-area: item2; }
      .grid.grid-all-news-5b .news-item:nth-child(4) {
        grid-area: item3; }
      .grid.grid-all-news-5b .news-item:nth-child(5) {
        grid-area: item4; }
      .grid.grid-all-news-5b .news-item:nth-child(6) {
        grid-area: item5; }
    
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
            <div class="grid grid-news grid-all-news-5b"> 
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
              <?php include '_inc/grid-content-5b.php'; ?>
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