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
	<a class="navbar-brand initial visible-xs-block" href="#logo"><span class="sr-only">Bard College at Simon's Rock: the Early College</span></a>
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
			  <a class="navbar-brand initial hidden-xs" href="#logo2"><span class="sr-only">Bard College at Simon's Rock: the Early College</span></a>
			</div>
		</div>
        <div id="navbar" class="navbar-collapse collapse">
        	<div class="navbar-mobile-header"></div>
        	<div class="container-fluid supernav">
				<div id="navbar_l2" class="container">
					<ul class="nav navbar-nav">
						<li class="dropdown hidden-xs hidden-sm">
						  <a href="#drop" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Info for <span class="fa fa-caret-down"></span></a>
						  <ul class="dropdown-menu" role="menu">
						  	<!-- First place the "info for" links need to be written: -->
						
								<li><a href="#e" id="PrimaryNav_InfoFor_ProspectieStudentsParentsAndCounselors">Prospective Students, <br class="mbo">Parents, and Counselors</a></li>
								<li><a href="#f" id="PrimaryNav_InfoFor_CurrentStudentsAndFamilies">Current Students and Families</a></li>
								<li><a href="#g" id="PrimaryNav_InfoFor_Alumni">Alumni</a></li>
							
								<li><a href="#h" id="PrimaryNav_InfoFor_CommunityMembers">Community Members</a></li>
								<li><a href="#i" id="PrimaryNav_InfoFor_AdmittedStudents">Admitted Students</a></li>
				
						  </ul>
						</li>
						<li><a class="nav-cta" href="#a" id="PrimaryNav_RequestInformation">Request info</a></li>
						<li><a class="nav-cta" href="#b" id="PrimaryNav_AskAStudent">Ask a Student</a></li>
						<li><a class="nav-cta" href="#c" id="PrimaryNav_Visit">Visit</a></li>
						<li><a class="nav-cta" href="#d" id="PrimaryNav_Apply">Apply</a></li>
						<!--<li><a href="#about"><i class="fa fa-flip-horizontal fa-search"></i></a></li>-->
						<li class="nav-search">
							<form role="search" class="search-form form-inline" id="navsearchform" aria-labelledby="showsearch">
								<div class="input-group">
								  <input type="text" class="form-control" placeholder="SEARCH">
								  <span class="input-group-btn">
									<button class="btn btn-link" id="PrimaryNav_Search"><i class="fa fa-flip-horizontal fa-search"><span class="sr-only">Search</span></i></button>
								  </span>
								</div><!-- /input-group -->
							</form>
							<button class="btn btn-link" id="showsearch" aria-expanded="false"><i class="fa fa-flip-horizontal fa-search"><span class="sr-only">Search</span></i></button>	
						</li>
					</ul>
				</div><!--/.container -->
			</div>
        	<div class="container-fluid section-nav initial">				
				<div class="container section-nav-inner">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="/why-simons-rock.php" id="PrimaryNav_WhySimonsRock" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Why Simon's Rock?</a>
							<div class="dropdown-menu mega-menu">
								<div class="container">
									<div class="col-md-9">
										<ul class="clearfix" role="menu">
											<li class="col-md-4"><a href="#1" id="PrimaryNav_WhySimonsRock">Why Simon's Rock</a></li>
											<li class="col-md-4"><a href="#2" id="PrimaryNav_WhySimonsRock_TheAcademicExperience">The Academic Experience</a></li>
											<li class="col-md-4"><a href="#3" id="PrimaryNav_WhySimonsRock_ReputationsAndOutcomes">Reputation and Outcomes</a></li>
											<li class="col-md-4"><a href="#4" id="PrimaryNav_WhySimonsRock_OurStudents">Our Students</a></li>
											<li class="col-md-4"><a href="#5" id="PrimaryNav_WhySimonsRock_TheBardNetwork">The Bard Network</a></li>
											<li class="col-md-4"><a href="#6" id="PrimaryNav_WhySimonsRock_TheEarlyCollegeFAQs">The Early College FAQs</a></li>
											<li class="col-md-4"><a href="#7" id="PrimaryNav_WhySimonsRock_ContactUs">Contact Us</a></li>
										</ul>
										<a href="#8" class="cta" id="PrimaryNav_WhySimonsRock_LearnMore">Ready to Apply? Learn more here.</a>
									</div>
									<div class="col-md-3">
										<img src="http://placehold.it/300x300/e2be00" class="img-responsive" alt="Why Simon's Rock">
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown" >
							<a href="#Academics" id="PrimaryNav_Academics" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Academics</a>
							<div class="dropdown-menu mega-menu">
								<div class="container">
									<div class="col-md-9">
										<ul class="clearfix" role="menu">
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_ProgramOverview">Program Overview</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_LanguagesAndLiterature">Languages and Literature</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_SocialAndPoliticalStudies">Social and Political Studies</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_ScienceMathematicsAndComputing">Science, Mathematics, and Computing</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_PerformingAndVisual rts">Performing and Visual Arts</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_BeyondTheClassroom">Beyond the Classroom</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_FacultyBios">Faculty Bios</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_AcademicAdvisingAndSupport">Academic Advising and Support</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Academics_CareerDevelopment">Career Development</a></li>
										</ul>
										<a href="#" class="cta" id="PrimaryNav_Academics_LearnMore">Ready to learn more? Learn more here.</a>
									</div>
									<div class="col-md-3">
										<img src="http://placehold.it/300x300/5cb7b7" class="img-responsive" alt="Academics">
									</div>
								</div>
							</div>
						</li>

						<li class="dropdown" >
							<a href="#Student" id="PrimaryNav_StudentLife" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Student Life</a>
							<div class="dropdown-menu mega-menu">
								<div class="container">
									<div class="col-md-9">
										<ul class="clearfix" role="menu">
											<li class="col-md-4"><a id="PrimaryNav_StudentLife_CampusExperience" href="#">Campus Experience</a></li>
											<li class="col-md-4"><a id="PrimaryNav_StudentLife_LivingOnCampus" href="#">Living on Campus</a></li>
											<li class="col-md-4"><a id="PrimaryNav_StudentLife_GreatBarringtonAndTheBerkshires" href="#">Great Barrington and the Berkshires</a></li>
											<li class="col-md-4"><a id="PrimaryNav_StudentLife_MapAndDirections" href="#">Map and Directions</a></li>
											<li class="col-md-4"><a id="PrimaryNav_StudentLife_ClubsActivitiesAndAthletics" href="#">Clubs, Activities, and Athletics</a></li>
											<li class="col-md-4"><a id="PrimaryNav_StudentLife_CommunityInvolvement" href="#">Community Involvement</a></li>
											<li class="col-md-4"><a id="PrimaryNav_StudentLife_PerformancesAndExhibitions" href="#">Performances and Exhibitions</a></li>
											<li class="col-md-4"><a id="PrimaryNav_StudentLife_CampusCalendar" href="#">Campus Calendar</a></li>
										</ul>
										<a href="#" class="cta" id="PrimaryNav_StudentLife_LearnMore">Ready to learn more? Learn more here.</a>
									</div>
									<div class="col-md-3">
										<img src="http://placehold.it/300x300/ec6a1e" class="img-responsive" alt="Student Life">
									</div>
								</div>
							</div>
						</li>

						<li class="dropdown" >
							<a href="#Admission" id="PrimaryNav_Admission" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Admission</a>
							<div class="dropdown-menu mega-menu">
								<div class="container">
									<div class="col-md-9">
										<ul class="clearfix" role="menu">
											<li class="col-md-4"><a id="PrimaryNav_Admission_HowToApply" href="#">How to Apply</a></li>
											<li class="col-md-4"><a id="PrimaryNav_Admission_TuitionAndFinancialAid" href="#">Tuition and Financial Aid</a></li>
											<li class="col-md-4"><a id="PrimaryNav_Admission_AdmissionEvents" href="#">Admission Events</a></li>
											<li class="col-md-4"><a id="PrimaryNav_Admission_RequestInformation" href="#">Request Information</a></li>
											<li class="col-md-4"><a id="PrimaryNav_Admission_AskAStudent" href="#">Ask a Student</a></li>
											<li class="col-md-4"><a id="PrimaryNav_Admission_VisitCampus" href="#">Visit Campus</a></li>
											<li class="col-md-4"><a id="PrimaryNav_Admission_ContactAdmission" href="#">Contact Admission</a></li>
										</ul>
										<a href="#" class="cta" id="PrimaryNav_Admission_LearnMore">Ready to learn more? Learn more here.</a>
									</div>
									<div class="col-md-3">
										<img src="http://placehold.it/300x300/6e675f" class="img-responsive" alt="Admission">
									</div>
								</div>
							</div>
						</li>

						<li class="dropdown" >
							<a href="#Bard" id="PrimaryNav_BardAcademy" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Bard Academy</a>
							<div class="dropdown-menu mega-menu">
								<div class="container">
									<div class="col-md-9">
										<ul class="clearfix" role="menu">
											<li class="col-md-4"><a href="#" id="PrimaryNav_BardAcademy_OurPurpose">Our Purpose</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_BardAcademy_AcademicProgram">Academic Program</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_BardAcademy_RequestInformation">Request Information</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_BardAcademy_ApplyToBardAcademy">Apply to Bard Academy</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_BardAcademy_ContactUs">Contact Us</a></li>
										</ul>
										<a href="#" class="cta" id="PrimaryNav_BardAcademy_LearnMore">Ready to learn more? Learn more here.</a>
									</div>
									<div class="col-md-3">
										<img src="http://placehold.it/300x300/efefef" class="img-responsive" alt="Bard Academy">
									</div>
								</div>
							</div>
						</li>	

						<li class="dropdown" >
							<a href="#Giving" id="PrimaryNav_Giving" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Giving</a>
							<div class="dropdown-menu mega-menu">
								<div class="container">
									<div class="col-md-9">
										<ul class="clearfix" role="menu">
											<li class="col-md-4"><a href="#" id="PrimaryNav_Giving_MakeAGiftNow">Make a Gift Now</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Giving_WhyGive">Why Give?</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Giving_WaysToGive">Ways to Give</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Giving_GetInvolved">Get Involved</a></li>
											<li class="col-md-4"><a href="#" id="PrimaryNav_Giving_ContactUs">Contact Us </a></li>
										</ul>
										<a href="#" class="cta" id="PrimaryNav_Giving_LearnMore">Ready to give more? Learn more here.</a>
									</div>
									<div class="col-md-3">
										<img src="http://placehold.it/300x300/ffffff" class="img-responsive" alt="Giving">
									</div>
								</div>
							</div>
						</li>

					</ul>
				</div><!--/.container -->
			</div>
			<div class="clearfix visible-xs-block visible-sm-block info-for-mobile">
				<!-- Second place the "info for" links need to be written: -->
				Info for
				<div class="row">
					<ul class="col-xs-6 list-unstyled" role="menu">
						<li></li><a href="#aa" id="PrimaryNav_InfoFor_ProspectieStudentsParentsAndCounselors">Prospective Students, <br class="mbo">Parents, and Counselors</a></li>
						<li><a href="#bb" id="PrimaryNav_InfoFor_CurrentStudentsAndFamilies">Current Students and Families</a></li>
					</ul>

					<ul class="col-xs-6 list-unstyled" role="menu">
						<li><a href="#cc" id="PrimaryNav_InfoFor_Alumni">Alumni</a></li>
						<li><a href="#dd" id="PrimaryNav_InfoFor_CommunityMembers">Community Members</a></li>
						<li><a href="#ee" id="PrimaryNav_InfoFor_AdmittedStudents">Admitted Students</a></li>
					</ul>
				</div>
			</div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
