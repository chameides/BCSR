//index2-factoids.js
            
            //To enable scrolling, clone the factoids row and put one before and after the original. Add attributes for accessibility. On the local development, this script is contained at the bottom of the index page. 

            //first row
            $( '#first_rep_row_original_original' ).clone().appendTo( '#reputations_outcomes .first-reputations-row .row-inner' ).attr( { "aria-hidden":"true", "id":"first-reputations-row-prepend" });
            $( '#first_rep_row_original_original' ).clone().prependTo( '#reputations_outcomes .first-reputations-row .row-inner' ).attr( { "aria-hidden":"true", "id":"first-reputations-row-append" });
            //second row
            $( '#second_rep_row_original_original' ).clone().appendTo( '#reputations_outcomes .second-reputations-row .row-inner' ).attr( { "aria-hidden":"true", "id":"second-reputations-row-prepend" });
            $( '#second_rep_row_original_original' ).clone().prependTo( '#reputations_outcomes .second-reputations-row .row-inner' ).attr( { "aria-hidden":"true", "id":"second-reputations-row-append" });

            
            $('.first-reputations-row .row-inner').width(0);
            $('.first-reputations-row .first_rep_row_original div').each(function(i){
                var additionalWidth = $(this).width();
                $('.first-reputations-row .row-inner').width( $('.first-reputations-row .row-inner').width() + additionalWidth );
            });
            var firstRepRowWidth = $('.first-reputations-row .row-inner').width();
            $('.first-reputations-row .row-inner').css('left','-750px');
            
            $('.second-reputations-row .row-inner').width(0);
            $('.second-reputations-row .second_rep_row_original div').each(function(i){
                var additionalWidth = $(this).width();
                $('.second-reputations-row .row-inner').width( $('.second-reputations-row .row-inner').width() + additionalWidth );
            });
            var secondRepRowWidth = $('.second-reputations-row .row-inner').width();
            $('.second-reputations-row .row-inner').css('left','-1600px');
            // if you can fit 3+, advance by 2 - if screen size is above or equal to 1125
            // if you can fit 2+, advance by 1 - if screen size is below 1125
            
            if ( $(window).width() >= 1125 ) {
                //console.log('wide');
                var advWidth = $(window).width()/2;
            } else {
                //console.log('less wide');
                var advWidth = $(window).width()/3;
            }
            $('.reputations_outcomes_btn.leftbtn').click(function(){
                var reputationsCurrentLeft = $('.first-reputations-row .row-inner').offset().left;
                if ( reputationsCurrentLeft <= (0 - advWidth) ) {
                    $(this).css('display','none');
                    var reputationsNewLeft = reputationsCurrentLeft + advWidth;
                    $('.first-reputations-row .row-inner, .second-reputations-row .row-inner').animate({
                        left:reputationsNewLeft
                    },750, function(){
                        $('.reputations_outcomes_btn.leftbtn').css({'opacity':'0','display':'block'}).animate({opacity:'0.4'},250);
                        shuffleRepsOutcomes(reputationsNewLeft,firstRepRowWidth,secondRepRowWidth);
                    });
                }
            });
            $('.reputations_outcomes_btn.rightbtn').click(function(){
                var reputationsCurrentLeft = $('.first-reputations-row .row-inner').offset().left;
                // if current left offset plus screen width is greater than element width...
                if ( ( (reputationsCurrentLeft * -1) + $(window).width() ) < firstRepRowWidth ) {
                    $(this).css('display','none');
                    var reputationsNewLeft = reputationsCurrentLeft - (advWidth/2);
                    $('.first-reputations-row .row-inner, .second-reputations-row .row-inner').animate({
                        left:reputationsNewLeft
                    },750, function(){
                        $('.reputations_outcomes_btn.rightbtn').css({'opacity':'0','display':'block'}).animate({opacity:'0.4'},250);
                        shuffleRepsOutcomes(reputationsNewLeft,firstRepRowWidth,secondRepRowWidth);
                    });
                }
            });
            function shuffleRepsOutcomes(reputationsNewLeft,firstRepRowWidth,secondRepRowWidth) {
                if ( (reputationsNewLeft * -1) < firstRepRowWidth*.33 ) {
                    // move the element exactly one third its width to the left so that we're looking at the middle
                    $('.first-reputations-row .row-inner').css({'left':reputationsNewLeft - (firstRepRowWidth/3)});
                    $('.second-reputations-row .row-inner').css({'left':reputationsNewLeft - (secondRepRowWidth/3)});
                } else if ( ( (reputationsNewLeft * -1) >= firstRepRowWidth*.33 ) && ( (reputationsNewLeft * -1) < firstRepRowWidth*.66 ) ) {
                    // hang tight
                } else {
                    // move the element exactly one third its width to the right so that we're looking at the middle
                    $('.first-reputations-row .row-inner').css({'left':reputationsNewLeft + (firstRepRowWidth/3)});
                    $('.second-reputations-row .row-inner').css({'left':reputationsNewLeft + (secondRepRowWidth/3)});
                }
            }