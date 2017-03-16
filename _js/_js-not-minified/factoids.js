var controller;
				$(document).ready(function($) {
				
				// init controller
				controller = new ScrollMagic();
				
					//factoids js
					$( '#first_rep_row_original' ).clone().appendTo( '#reputations_outcomes .first-reputations-row .row-inner' );
      $( '#first_rep_row_original' ).clone().prependTo( '#reputations_outcomes .first-reputations-row .row-inner' );
      $( '#second_rep_row_original' ).clone().appendTo( '#reputations_outcomes .second-reputations-row .row-inner' );
      $( '#second_rep_row_original' ).clone().prependTo( '#reputations_outcomes .second-reputations-row .row-inner' );
      
      $('.first-reputations-row .row-inner').width(0);
      $('.first-reputations-row #first_rep_row_original div').each(function(i){
        var additionalWidth = $(this).width();
        $('.first-reputations-row .row-inner').width( $('.first-reputations-row .row-inner').width() + additionalWidth );
      });
      var firstRepRowWidth = $('.first-reputations-row .row-inner').width();
      $('.first-reputations-row .row-inner').css('left','-750px');
      
      $('.second-reputations-row .row-inner').width(0);
      $('.second-reputations-row #second_rep_row_original div').each(function(i){
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
    }); // end of the $(document).ready()

    function scrollReputationRowsIntoView(){
      if ( $(window).width() < 768 ) {
        $('.first-reputations-row').scrollLeft( $('.first-reputations-row .row-inner').width()/2 );
        $('.second-reputations-row').scrollLeft( $('.second-reputations-row .row-inner').width()/2 );
        $('.first-reputations-row .row-inner, .second-reputations-row .row-inner').animate({left:0},750);
      } else {
        $('.first-reputations-row .row-inner, .second-reputations-row .row-inner').animate({left:0-($('.ro-module.single').width()*3)},750);
      }
    };

var controller;
    $(document).ready(function($) {
        
      var isMobile = ( function(a) { return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)) }) ( navigator.userAgent || navigator.vendor || window.opera);

      //console.log('$ ready');
      
     
      // init controller
      controller = new ScrollMagic();
      

      
      // Scene 5 - animate the module rows when Reputations and Outcomes is scrolled into view.
      var scene5 = new ScrollScene({triggerElement: '#reputations_outcomes'})
        .on('enter leave', function(e) {
          scrollReputationRowsIntoView();
          //console.log('scrollReputationRowsIntoView');
        }).addTo(controller);
				});