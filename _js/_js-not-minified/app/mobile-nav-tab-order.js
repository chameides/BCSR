//When mobile menu is expanded, prevent tabbing outside of menu
		
		function SetTabIndex ( select, value ) {
	    //select is class or id that should be altered
	    //value is the tab index

	    //value is already set, reset
	    if ($(select).attr('tabindex') == value) {
	    	$(select).attr('tabindex', 0);
	    }
	    //value is not set, set
	    else {
	    	$(select).attr('tabindex', value);
	    }
		}

		var SetTabIndexTrigger = '.navbar-toggle';

		//1. when mobile menu button is toggled
		$(SetTabIndexTrigger).click(function(){
			
			//2. set mobile nav elements tabindex as priority
			
			//Set nav button, starting point for tabbing
			SetTabIndex(SetTabIndexTrigger,'1'); 

			//Search Form
			SetTabIndex('.input-group','2');

			//Set Nav Information Architecure Links
			SetTabIndex('.dropdown-toggle','2');

			//Set CTAs
			SetTabIndex('.nav-cta','3');

			//Set CTAs
			SetTabIndex('.info-for-mobile a','4');
		});