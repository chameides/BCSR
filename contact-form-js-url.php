<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simon's Rock: Contact Form</title>

<?php include '_inc/head-js-css.php'; ?>

  </head>
  <body>

  
<?php include '_inc/nav.php'; ?>
    
    
    <div class="container">
	<form id="contactForm">


<h1 id="form_elements" class="sg-heading">Request for Info</h1>
<div class="row">

	<div class="col-md-6">
		<p>We're so glad you would like to know
		more about Simon's Rock and Bard
		Academy. Please fill out the form on this page
		and we will get in touch with you.</p>
	</div>



	<div class="col-md-6">
		
		<input type="hidden" id="url" class="url" value="click a button">


	</div><!-- col-md-6 -->
</div><!-- row -->


<hr />



    </div><!-- /.container -->
<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>
<script>
  $( ".url" ).val( window.location.href );
</script>
</body>
</html>