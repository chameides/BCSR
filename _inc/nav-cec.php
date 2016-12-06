<!-- Changes for CEC Template
1. Turn off Alert?
2. Nav Links?
3. Desktop Logo

-->


	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KB4QGH"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
	{'gtm.start': new Date().getTime(),event:'gtm.js'}
	);var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KB4QGH');</script>
	<!-- End Google Tag Manager -->

	<?php 
		$alert = isset($_GET["alert"]) ? htmlspecialchars($_GET["alert"]) : '';;
	?>
	
	<!-- This is a Level 1 alert, suitable for road closings -->
	<?php 
		if ($alert == 'warning') {
	?>
	<div class="alert alert-warning alert-dismissible level-1-alert" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Alert: </strong>Closure on Stockbridge Road, alternate routes advised. <a href="#" class="alert-link">Learn More&raquo;</a>
	</div>
	<?php } ?>
	<!-- This is a Level 2 emergency alert, suitable for school closings -->
	<?php 
		if ($alert == 'danger') {
	?>
	<div class="alert alert-danger alert-dismissible level-2-alert" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>** EMERGENCY **</strong><br>
		<strong>SNOWSTORM ALERT</strong><br>
		10:23 am: Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Cras vel erat ut velit egestas rutrum. Fusce massa
		massa, pharetra ut euismod sit amet, porttitor a magna.
		Etiam varius laoreet bibendum. Morbi vitae velit
		convallis dolor porta convallis. Aliquam accumsan pharetra
		teros vel volutpat. <a href="#" class="alert-link">Learn More&raquo;</a>
	</div>
	<?php } ?>
	<!-- This is an Info alert, suitable for school closings -->
	<?php 
		if ($alert == 'info') {
	?>
	<div class="alert alert-info alert-dismissible level-2-alert" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>** NOTICE **</strong><br>
		<strong>IMPORTANT NOTICE</strong><br>
		10:23 am: Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Cras vel erat ut velit egestas rutrum. Fusce massa
		massa, pharetra ut euismod sit amet, porttitor a magna.
		Etiam varius laoreet bibendum. Morbi vitae velit
		convallis dolor porta convallis. Aliquam accumsan pharetra
		teros vel volutpat. <a href="#" class="alert-link">Learn More&raquo;</a>
	</div>
	<?php } ?>




	<a class="navbar-brand initial visible-xs-block" href="#"><span class="sr-only">Bard College at Simon's Rock: the Early College</span></a>
	




	<nav class="navbar navbar-default navbar-fixed-top" id="mainnav">
      <div class="container-fluid">
      	<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>






			  <a class="navbar-brand initial hidden-xs" href="#"><span class="sr-only">Bard College at Simon's Rock: the Early College</span></a>






			</div>
		</div>
        <div id="navbar" class="navbar-collapse collapse">
        	<div class="navbar-mobile-header"></div>
        	<div class="container-fluid supernav">
						<div id="navbar_l2" class="container">		
						</div><!--/.container -->
					</div>
        	<div class="container-fluid section-nav initial">				
				<div class="container section-nav-inner">
					<ul class="nav navbar-nav">
						<li>
							<a href="/why-simons-rock.php" id="PrimaryNav_WhySimonsRock">About</a>
						</li>
						
						<li>
							<a href="#Student" id="PrimaryNav_StudentLife" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Our Network</a>
						</li>

						<li>
							<a href="#Academics" id="PrimaryNav_Academics" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Pedagogy</a>
						</li>

						

						<li>
							<a href="#Admission" id="PrimaryNav_Admission" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Public Policy</a>
						</li>
						<li>
							<a href="#Admission" id="PrimaryNav_Admission" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Partnerships</a>
						</li>
						<li class="hidden-md hidden-lg">
							<a href="#Admission" id="PrimaryNav_Admission" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"><i class="fa fa-envelope" style="font-size: 17px;padding-top: 5px;"></i> Contact Us</a>
						</li>
						<li class="visible-md visible-lg">
							<button class="btn btn-link" title="Contact Us"><i class="fa fa-envelope" style="font-size: 17px;padding-top: 5px;"><span class="sr-only ">Contact Us</span></i></button>
						</li>
						<li class="nav-search">
							<form role="search" class="search-form form-inline" id="navsearchform" aria-labelledby="showsearch">
								<div class="input-group">
								  <input type="text" class="form-control" placeholder="SEARCH">
								  <span class="input-group-btn">
									<button class="btn btn-link" title="Search" id="PrimaryNav_Search"><i class="fa fa-flip-horizontal fa-search"><span class="sr-only">Search</span></i></button>
								  </span>
								</div><!-- /input-group -->
							</form>
							<button class="btn btn-link hidden-sm hidden-xs" title="Search" id="showsearch" aria-expanded="false"><i class="fa fa-flip-horizontal fa-search" style="font-size: 17px; padding-top: 4px;"><span class="sr-only">Search</span></i></button>
						</li>
					</ul>
				</div><!--/.container -->
			</div>
			
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
