<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simon's Rock: Contact Form</title>

<?php include '_inc/head-js-css.php'; ?>

<style>
.checkbox-sub {
	padding-left:35px;
}
.checkbox-sub + .checkbox {
	margin-top:-5px;
}
label.error {
	color:red;
	font-size:12px;
	font-weight: normal;
	line-height: 130%;
	margin-top: 5px;
	display: block;
}
</style>

  </head>
  <body>

  
<?php include '_inc/nav.php'; ?>
    
    
    <div class="container">
	<form id="contactForm">


<h1 id="form_elements" class="sg-heading">Thank You</h1>
<div class="row">

	<div class="col-md-6">
		<p>We have recieved your form submission.
		You should be on the lookout for something.
		Also, check out our website.</p>

		<?php 
			$var_value = $_SESSION['entityID'];
			echo "<p>value: " . $var_value . "</p><br><br>";
			
			print_r($_SESSION);

		?>



	</div>

	<div class="col-md-6">
	

	</div><!-- col-md-6 -->
</div><!-- row -->


<hr />

</form>

    </div><!-- /.container -->
<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>

<script src="_js/validation/jquery.validate.min.js"></script>

<script src="_js/validation/additional-methods.min.js"></script>

<script>




$( document ).ready(function() {

	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$("#contactForm").validate({
		rules: {
			txtFirstName: {
				required: true
			},
			txtLastName: {
				required: true
			},
			txtEmail: {
				required: true,
				email: true
			},
			txtPhone: {
				required: '#chxInfoByPhone:checked'
			},
			drpCountry: {
				required: '#chxInfoByMail:checked'
			},
			txtAddress1: {
				required: '#chxInfoByMail:checked'
			},
			txtZipOrPostal: {
				required: '#chxInfoByMail:checked'
			}
		}
	});

	$('.checkbox-sub, #lblPostalCode').hide();
	
	$('#chxInfoByPhone').click(function(){
		if ( $(this).is(':checked') ) {
			$('#grpPhone').fadeIn();
		} else {
			$('#grpPhone').fadeOut();
		}
	});

	$('#chxInfoByMail').click(function(){
		if ( $(this).is(':checked') ) {
			$('#grpCountry, #grpAddress1, #grpAddress2, #grpZip').fadeIn();
		} else {
			$('#grpCountry, #grpAddress1, #grpAddress2, #grpZip').fadeOut();
		}
	});
	
	$('#drpCountry').change(function(){
		var countryval = $(this).val();
		if ( countryval == 'United States' ) {
			$('#lblZipCode').fadeIn();
			$('#lblPostalCode').hide();
		} else {
			$('#lblZipCode').hide();
			$('#lblPostalCode').fadeIn();
		}
	
	});
	
	

});
</script>

  </body>
</html>