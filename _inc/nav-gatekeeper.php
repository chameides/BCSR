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
