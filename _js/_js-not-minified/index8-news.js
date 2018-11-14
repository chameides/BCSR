//console.log("grid script begin");

//get full width of grid
var element = $('#news-grid .grid');
var newsCarouselWidth = element.prop('scrollWidth');
//console.log('width = ' + newsCarouselWidth);

//start grid at second of three duplications
$('#news-grid .grid').css('left', newsCarouselWidth/3 * -1);


//set width to advance on click, set to two or three column width. column height set in CSS based on $section-height

//screen-xl-min
if ( $(window).width() >= 1520 ) {
    //columns are 340, x3 columns
    var newsAdvWidth = 1020;
} 
//screen-sm-min
else if ( $(window).width() >= 768) {
    //columns are 294, x2 columns
    var newsAdvWidth = 588;
}
else {
    //columns are 240, x2 columns
    var newsAdvWidth = 480; //
}

    
//console.log('advance width = ' + newsAdvWidth);

//keep carousel in viewport
function shuffleNews(newsNewLeft,newsCarouselWidth) {
    if ( (newsNewLeft * -1) < newsCarouselWidth*.33 ) {
        // move the element exactly one third its width to the left so that we're looking at the middle
        //console.log('shuffle1');
        $('#news-grid .grid').css({'left':newsNewLeft - (newsCarouselWidth/3)});
    } else if ( ( (newsNewLeft * -1) >= newsCarouselWidth*.33 ) && ( (newsNewLeft * -1) < newsCarouselWidth*.66 ) ) {
         //console.log('shuffle2');
        // hang tight
    } else {
        // move the element exactly one third its width to the right so that we're looking at the middle
        //console.log('NewsnewLeft*-1=' + newsNewLeft*-1);
        //console.log('newsCarouselWidth/3=' + newsCarouselWidth*.33);
        //console.log('newsCarouselWidth*.66=' + newsCarouselWidth*.66);
        //console.log('shuffle3');
        $('#news-grid .grid').css({'left':newsNewLeft + (newsCarouselWidth/3)});
    }
}


//click arrow buttons
$('#news-grid .rockers_btn').click(function(){
    //console.log('click');
    
    //hide button
    $(this).css('display','none');

    //determine current offset
    var newsCurrentLeft = $('#news-grid .grid').offset().left;
    //console.log('current left ' + newsCurrentLeft);

    //determine left or right button
    var buttonID = $(this).attr('id');
    //console.log(buttonID);

    //set new offset based on button
    if (buttonID == 'news-carousel-left') {
        //console.log('direction is left');
        var newsNewLeft = newsCurrentLeft + newsAdvWidth;
    }
    else {
        //console.log('direction is not left');
        var newsNewLeft = newsCurrentLeft - newsAdvWidth;
    }
    
    //console.log('New Left = ' + newsNewLeft);

    //move carousel
    $('#news-grid .grid').animate({
        left:newsNewLeft
    },750, function(){
        //display button
        $('#news-grid .rockers_btn').css({'opacity':'0','display':'block'}).animate({opacity:'1'},250);
        //run function to keep carousel in viewport
        shuffleNews(newsNewLeft,newsCarouselWidth);
    });
});

  