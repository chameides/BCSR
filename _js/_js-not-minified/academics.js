$( "#form-academics" ).submit(function( event ) {
  alert( "Handler for .submit() called." );
  event.preventDefault();
});

$(document).ready(function() {
  
  // Add IDs and sort values to each row
  var count = 0;
  var sortVal = 0;
  $('.program-item:visible').each(function() {
    if (!$(this).attr('id')){
      count++;
      // Set id of each grid item
      $(this).attr('id', count);
    }
    // Set sort value of each grid item
    sortVal = count * 10;
    $(this).attr("data-program-sort",sortVal);
  });
  // Don't need to set last in last row if we're adding the expander
  //$('.program-item:last').addClass('last-in-row');


  // Initialize Isotope query plugin for grid management
  var $container = $('#program-grid');
  // init
  $container.isotope({
    // options
    itemSelector: '.program-item',
    layoutMode: 'fitRows',
    itemPositionDataEnabled: true,
    getSortData: {
        programSort: function(item){
            return parseInt($(item).attr('data-program-sort'));
        }
    }
  });

  setLastRows();

  // // Bind the end of the transitions to the function for detecting
  // // last rows and applying the needed class. (skip on views where only one row is visible)
  // if ($(document).width() > 490){
  //   $container.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", setLastRows);
  // }
  // else{
  //   // All items are last in row
  //   $('.program-item').addClass('last-in-row')
  // }

  // Scan through all rows to tag all elements that are last in a row
  //setLastRows();

  // Event handler for Filter clicks
  $("input.filter").on("click", function() {
    $('.program-item').removeClass('active-program');

    filters = getFilters();
    if (filters){
      filters += ', .expander';
    }
    // console.log('Filters: '+filters);
    $container.isotope({ filter: filters });

    // Hide expander
    $('#expanded-content').hide();

    // Set expander sort order to high number to guarantee last place
    $('#expanded-content').attr("data-program-sort",10000);
    resortGrid($container);

  });

  // Event handler for Program clicks
  $(".program-item").not("#expanded-content").on("click", function(e) {
    e.preventDefault();

    // First get the last rows figured out.
    setLastRows();

    if ($(this).hasClass('active-program')){
      // An active program has been clicked
      // console.log('active program clicked');

      // Hide expander
      $('#expanded-content').hide();

      // Unselect active program
      $(".program-item").removeClass('active-program');
      
      // Set expander sort order to high number to guarantee last place
      $('#expanded-content').attr("data-program-sort",10000);
      resortGrid($container);
    }
    else{
      // An inactive program has been clicked
      // console.log('Inactive program clicked');

      var thisthing = $(this);

      // show expander
      $('#expanded-content').css({'opacity':'1'}).show();

      var ajax_url = '/academics-expander.php?id=' + $(this).attr('id');
      $('#expanded-content').load(ajax_url,function(){
		  setTimeout(function(){ 
				var paneltop = $('#expanded-content').css('top');
				var paneltopnum = Number(paneltop.substring(0, paneltop.length - 2));
				
				var panelheight = $('#expanded-content').height();
				
				var buttontop = thisthing.css('top');
				var buttontopnum = Number(buttontop.substring(0, buttontop.length - 2));
				
				var topdiff = paneltopnum - buttontopnum;
				
				if ( topdiff > 1000 ) {
					var newtop = paneltopnum - panelheight - 25;
					$('#expanded-content').css({'top':newtop+'px'});
				}
		
			  }, 750); 
	
			  //alert(' / this top: ' + $(this).css('top') + ' / parent top: ' + thisthing.css('top') + ' / (10:21)');
      
      });

      // Deactivate all previously selected programs
      $(".program-item").removeClass('active-program');
      
      // Activate selected program
      $(this).addClass('active-program');
      
      // Get insert point and sort
      var rowEndId, expanderSort;
      if ($(this).hasClass('last-in-row')){
        rowEndId = $(this).attr('id');
      }
      else{
        rowEndId = $('.active-program').nextAll('.last-in-row').attr('id');
      }
      var expanderSort = $('#'+rowEndId).data('program-sort') + 5;
      // $('#expanded-content').insertAfter('#' + rowEndId);
      $('#expanded-content').attr("data-program-sort",expanderSort);
      resortGrid($container);
      
		
      // goToByScroll(rowEndId); 
    }

  });

  // Event handler for Close button
  $('body').on('click','#expander-close', function(e) {
    e.preventDefault();
    
    // The close button has been clicked
    // console.log('close button clicked');

    // Hide expander
    $('#expanded-content').hide();

    // Unselect active program
    $(".program-item").removeClass('active-program');
    
    // Set expander sort order to high number to guarantee last place
    $('#expanded-content').attr("data-program-sort",10000);
    resortGrid($container);
    
    // Hide expander again
    $('#expanded-content').hide();
  });


});

// Auto scrolling function
function goToByScroll(id){
  // console.log("Scrolling to item: " + id);
  $('html,body').animate({scrollTop: $("#"+id).offset().top - 200},600);
}

// Resort
function resortGrid($con){
  // Clear isotope sorting cache
  $con.isotope( 'updateSortData', $con.children() );

  // Resort grid items
  var options = {};
  options.sortBy = 'programSort';

  filters = getFilters();
  if (filters){
    filters += ', .expander';
    options.filter = filters;
  }
  //console.log(options);

  $con.isotope(options);
}

// Get filters from checkboxes and return comma delimited string
function getFilters(){
  $typeCheckboxes = $("input[name='filter-type']");
  $programCheckboxes = $("input[name='filter-program']");
  var typeFilters = [];
  var programFilters = [];
  
  $typeCheckboxes.filter(':checked').each(function(){
    typeFilters.push( "." + this.value );
  });
  // get checked checkboxes values
  $programCheckboxes.filter(':checked').each(function(){
    programFilters.push( "." + this.value );
  });
  var combinedFilters = [];
  if (typeFilters.length && programFilters.length) {
    jQuery.each( typeFilters, function( i, type ) {
      jQuery.each( programFilters, function( j, prog ) {
        combinedFilters.push(type+prog);
      });
    });
  }
  else if (typeFilters.length) {
    var combinedFilters = typeFilters;
  }
  else {
    var combinedFilters = programFilters;
  }
  return combinedFilters.join(', ');
}

function setLastRows(){
  // console.log("number visible: " + $('.program-item:visible').length);
  // Remove class from all program items
  $('.program-item').removeClass('last-in-row');
  // Find max left value
  maxLeft = 0;
  $('.program-item:visible').each(function() {
    if ($(this).attr('id') != 'expanded-content'){
      var position = $(this).position();
      if (position.left > maxLeft){
        maxLeft = position.left;
      }
    }
  });
  // console.log("maxLeft: " + maxLeft);
  // Set last-in-row to those that have the highest left value
  $('.program-item:visible').each(function() {
    if ($(this).attr('id') != 'expanded-content'){
      var position = $(this).position();
      if (position.left == maxLeft){
        $(this).addClass('last-in-row');
      }
    }
  });
  // Give last visible element the last in row class
  if ($('.program-item:visible:last').attr('id') != 'expanded-content'){
    $('.program-item:visible:last').addClass('last-in-row');
  }
}
