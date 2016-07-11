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
	


<h1 id="form_elements" class="sg-heading">Request for Info</h1>
<div class="row">

	<div class="col-md-6">
		<?php
			include '_resources/forms/hobson/config.php';//settings
			include '_resources/forms/hobson/functions.php';//settings
			echo 'test';
			echo $userpwd;

			$data = array("searchFields" => array(
							"Email" => 'adupont@simons-rock.edu',
						),
						"returnFields" => array(
							"Entity ID",
							"Last Name",
							"First Name",
						)
						);
						


			// Web server requires JSON
			$content = json_encode($data);

			// Pass JSON to web server
			$ch = curl_init($url_search);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_USERPWD, $userpwd);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			$return = curl_exec($ch);
			curl_close($ch);
			var_dump($return);
			
			$entityID = get_string_between($return, 'Entity ID":', '}');
			echo '<h3>entity ID</h3>';
			echo $entityID;
		?>

	</div>


	<div class="col-md-6">
		<?php include 'contact-form-rfi-fields.php'; ?>
	



	</div><!-- col-md-6 -->
</div><!-- row -->


<hr />



    </div><!-- /.container -->
<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>

<script src="/_resources/js/forms/rfi-combine-min.js"></script>
</body>
</html>