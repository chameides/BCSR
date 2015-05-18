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


<h1 id="form_elements" class="sg-heading">Request for Info</h1>
<div class="row">

	<div class="col-md-6">
		<p>We're so glad you would like to know
		more about Simon's Rock and Bard
		Academy. Please fill out the form on this page
		and we will get in touch with you.</p>
	</div>

	<div class="col-md-6">


		<? 

			print "Hello world!<br>";
			$data = "test";
			

			/* Request URL for Contacts module */
			$url = 'https://api.hobsonsradius.com/crm/webservice/modules/Contacts';

						
			$data = array("createFields" => array(
				"First Name" => 'firstName1',
				"Last Name" => 'delete_' . time() . '_' . 'lastName',
				"Email" => 'delete_' . time() . '_' . 'test@fakemail.com',
				"Date of Birth" => '07/18/1989',
				//"Phone" => '7456434561231234',
				"Mobile" => '9996663333',
				//$phoneField => '9996663333',
				"Country Name" => 'United States',
				"Contact Street" => '9502 Maple Dr',
				"Contact Street 2" => 'Apt #4',
				"Primary Zip/Postal Code" => '60532',
				//"Contact Owner" => 685000000083007,
				//"Lifecycle Role/Stage" => 'Inquirer-Open'
				"Preferred Phone" => 'Mobile',
				//"Preferred Phone" => $_POST['drpPhoneType'],
			));



			// Web server requires JSON
			$content = json_encode($data);

			// Pass JSON to web server
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_USERPWD, '685000028568712:MIj9IP8EXh02uNz3vCRsSmLssu9UlWu6');
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			$return = curl_exec($ch);
			curl_close($ch);
			var_dump($return);

			
			$array_return = explode('Entity ID":', $return);
			$after_EntityID = $array_return[1];

			$before_comma = explode(',', $after_EntityID);
			$before_comma = $array_return[0];


			function get_string_between($string, $start, $end){
			    $string = " ".$string;
			    $ini = strpos($string,$start);
			    if ($ini == 0) return "";
			    $ini += strlen($start);
			    $len = strpos($string,$end,$ini) - $ini;
			    return substr($string,$ini,$len);
			}

			$fullstring = $return;
			$parsed = get_string_between($fullstring, 'Entity ID":', '}');

			



			echo "<br> 3: " . $parsed; // (result = dog)
			echo "<br> 4: " . $before_comma2 . "<br>"; // (result = dog)
			print_r( array_values( $parsed ));

			echo "<br> Next Step: <br>" ; // (result = dog)


			$lifecycle = array("createFields" => array(
				"Contact" => $parsed,
				"Lifecycle Role" => 'Prospect',
				"Lifecycle Stage" => 'Open',
				"Primary Role" => 'True',
			));

			// Web server requires JSON
			$content_lifecyle = json_encode($lifecycle);



			$url_lifecycle = 'https://api.hobsonsradius.com/crm/webservice/modules/LifeCycles';

			// Pass JSON to web server
			$ch = curl_init($url_lifecycle);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_USERPWD, '685000028568712:MIj9IP8EXh02uNz3vCRsSmLssu9UlWu6');
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $content_lifecyle);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			$return = curl_exec($ch);
			curl_close($ch);
			var_dump($return);



			



			
			
			


			
	




		?>
	
		<div class="row"><!-- row inside the col -->
		  <div class="form-group col-md-6">
				<label for="txtFirstName">First Name:</label>
				<input type="text" class="form-control" name="txtFirstName" id="txtFirstName" required>
		  </div>
		  <div class="form-group col-md-6">
				<label for="txtLastName">Last Name:</label>
				<input type="text" class="form-control" name="txtLastName" id="txtLastName" required>
		  </div>
		  <div class="form-group col-md-12">
				<label for="txtEmail">Email address</label>
				<input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Enter email" required>
		  </div>

			<div class="form-group col-sm-6">
			  <label for="birth_month">Date of Birth* <span class="sr-only">(Month)</span></label> 
			  <select class="form-control" id="birth_month" name="birth_month" required>
			
				<option value="">
				  Month
				</option>

				<option value="01">
				  January
				</option>

				<option value="02">
				  February
				</option>

				<option value="03">
				  March
				</option>

				<option value="04">
				  April
				</option>

				<option value="05">
				  May
				</option>

				<option value="06">
				  June
				</option>

				<option value="07">
				  July
				</option>

				<option value="08">
				  August
				</option>

				<option value="09">
				  September
				</option>

				<option value="10">
				  October
				</option>

				<option value="11">
				  November
				</option>

				<option value="12">
				  December
				</option>
			  </select>
			</div>

			<div class="form-group col-sm-3">
			  <label for="birth_day" class="hidden-xs"><span class="sr-only">Date of Birth (Day)</span>&nbsp;</label> 
			  <select class="form-control" id="birth_day" name="birth_day" required>
				<option value="">
				  Day
				</option>

				<option value="01">
				  01
				</option>

				<option value="02">
				  02
				</option>

				<option value="03">
				  03
				</option>

				<option value="04">
				  04
				</option>

				<option value="05">
				  05
				</option>

				<option value="06">
				  06
				</option>

				<option value="07">
				  07
				</option>

				<option value="08">
				  08
				</option>

				<option value="09">
				  09
				</option>

				<option value="10">
				  10
				</option>

				<option value="11">
				  11
				</option>

				<option value="12">
				  12
				</option>

				<option value="13">
				  13
				</option>

				<option value="14">
				  14
				</option>

				<option value="15">
				  15
				</option>

				<option value="16">
				  16
				</option>

				<option value="17">
				  17
				</option>

				<option value="18">
				  18
				</option>

				<option value="19">
				  19
				</option>

				<option value="20">
				  20
				</option>

				<option value="21">
				  21
				</option>

				<option value="22">
				  22
				</option>

				<option value="23">
				  23
				</option>

				<option value="24">
				  24
				</option>

				<option value="25">
				  25
				</option>

				<option value="26">
				  26
				</option>

				<option value="27">
				  27
				</option>

				<option value="28">
				  28
				</option>

				<option value="29">
				  29
				</option>

				<option value="30">
				  30
				</option>

				<option value="31">
				  31
				</option>
			  </select>
			</div>

			<div class="form-group col-sm-3">
			  <label for="birth_year" class="hidden-xs"><span class="sr-only">Date of Birth (Year)</span>&nbsp;</label> 
			  <select class="form-control" id="birth_year" name="birth_year" required>
				<option value="">
				  Year
				</option>
	
				<option value="2005">
				  2005
				</option>
	
				<option value="2004">
				  2004
				</option>
	
				<option value="2003">
				  2003
				</option>
	
				<option value="2002">
				  2002
				</option>
	
				<option value="2001">
				  2001
				</option>
	
				<option value="2000">
				  2000
				</option>
	
				<option value="1999">
				  1999
				</option>
	
				<option value="1998">
				  1998
				</option>
	
				<option value="1997">
				  1997
				</option>
	
				<option value="1996">
				  1996
				</option>
	
				<option value="1995">
				  1995
				</option>
	
				<option value="1994">
				  1994
				</option>
	
				<option value="1993">
				  1993
				</option>
	
				<option value="1992">
				  1992
				</option>
	
				<option value="1991">
				  1991
				</option>
	
				<option value="1990">
				  1990
				</option>
				
			  </select>
		</div>

			<div class="col-sm-12" id="chxInfoByErr">
				<label>I'd like to receive information by:</label>
			</div>
			
			<div class="checkbox col-sm-12">
			  <label>
				<input type="checkbox" class="chxInfoBy" name="chxInfoByEmail" id="chxInfoByEmail" value="Email">
				Email
			  </label>
			</div>
			<div class="checkbox col-sm-12">
			  <label>
				<input type="checkbox" class="chxInfoBy" name="chxInfoByPhone" id="chxInfoByPhone" value="Phone">
				Phone
			  </label>
			</div>
		
				<div class="form-group checkbox-sub col-sm-6" id="grpPhone">
					<label for="txtPhone">Primary Phone Number:</label>
					<input type="text" class="form-control" id="txtPhone" name="txtPhone" >
				</div>
				<div class="form-group checkbox-sub col-sm-6" id="grpPhoneType">
					<label for="drpPhoneType">Phone Type:</label>
					<select class="form-control" id="drpPhoneType" name="drpPhoneType" required>
					<option value="">
					  - Select Phone Type -
					</option>
	
					<option value="Home">
					  Home
					</option>
	
					<option value="Mobile">
					  Mobile
					</option>
					
				  </select>
				</div>
		
			<div class="checkbox col-sm-12">
			  <label>
				<input type="checkbox" class="chxInfoBy" name="chxInfoByMail" id="chxInfoByMail" value="Mail">
				Mail
			  </label>
			</div>
		  <div class="form-group checkbox-sub col-sm-12" id="grpCountry">
				<label for="drpCountry">Country:</label>
			<select name="drpCountry" id="drpCountry" class="form-control">
				<option value="">- Select Your Country -</option>
				<option value="United States">United States</option>
				<option value="Canada">Canada</option>
				<option value=""> </option>
				<option value="Afghanistan">Afghanistan</option>
				<option value="Albania">Albania</option>
				<option value="Algeria">Algeria</option>
				<option value="Andorra">Andorra</option>
				<option value="etc">(etc)</option>
			</select>
		  </div>
		  <div class="form-group checkbox-sub col-sm-12" id="grpAddress1">
				<label for="txtAddress1">Address:</label>
				<input type="text" class="form-control" name="txtAddress1" id="txtAddress1" />
		  </div>
		  <div class="form-group checkbox-sub col-sm-12" id="grpAddress2">
				<input type="text" class="form-control" name="txtAddress2" id="txtAddress2" />
		  </div>
		  <div class="form-group checkbox-sub col-sm-6" id="grpState">
			  <label for="drpState" class="hidden-xs">State/Province<span class="sr-only">State/Province</span>&nbsp;</label> 
			  <select class="form-control" id="drpState" name="drpState" required>
				<option value="">- Select State/Province -</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AB">Alberta</option>
				<option value="AS">American Samoa</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="BC">British Columbia</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CNMI">Commonwealth of the Northern Mariana Islands</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="GU">Guam</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MB">Manitoba</option>
				<option value="MH">Marshall Islands</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NB">New Brunswick</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NF">Newfoundland</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="NT">Northwest Territories</option>
				<option value="NS">Nova Scotia</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="ON">Ontario</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="PE">Prince Edward Island</option>
				<option value="PR">Puerto Rico</option>
				<option value="QC">Quebec</option>
				<option value="RI">Rhode Island</option>
				<option value="SK">Saskatchewan</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="VI">US Virgin Islands</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
				<option value="YT">Yukon Territory</option>	
			  </select>
			</div>
			<div class="form-group checkbox-sub col-sm-6" id="grpZip">
				<label for="txtZipOrPostal"><span id="lblZipCode">Zip Code:</span><span id="lblPostalCode">Postal Code:</span></label>
				<input type="text" class="form-control" name="txtZipOrPostal" id="txtZipOrPostal" />
		  </div>
	
		  <div class="form-group col-sm-12">
			  <input class="btn btn-primary" id="RFI_btn_submit" type="submit" value="Submit">
			</div>
 
		</div><!-- /row inside the col -->


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

// Dummy data	
/*
	$('#txtFirstName').val('firstName');
	$('#txtLastName').val('lastName');
	$('#txtEmail').val('test@test.com');
	$('#birth_month').val('07');
	$('#birth_day').val('18');
	$('#birth_year').val('1995');
	$('#txtPhone').val('1231231234');
	$('#drpCountry').val('United States');
	$('#txtAddress1').val('1234 Maple Ave');
	$('#txtAddress2').val('Apt #105');
	$('#txtZipOrPostal').val('60532');
*/
	
	
	
	// Variable to hold request
	var request;


	$.validator.setDefaults({
		submitHandler: function(event) {
			// Abort any pending request
		    if (request) {
		        request.abort();
		    }
		
			// setup some local variables
		    var $form = $('#contactForm');
		
		    // Let's select and cache all the fields
		    var $inputs = $form.find("input, select, button, textarea");
		
		    // Serialize the data in the form
		    var serializedData = $form.serialize();
		    //console.log(serializedData);
		
		    // Let's disable the inputs for the duration of the Ajax request.
		    // Note: we disable elements AFTER the form data has been serialized.
		    // Disabled form elements will not be serialized.
		    $inputs.prop("disabled", true);
		
		    // Fire off the request to /form.php
		    request = $.ajax({
		        url: "/contact-form-submit-lifecycle.php",
		        type: "post",
		        data: serializedData
		    });
		
		    // Callback handler that will be called on success
		    request.done(function (response, textStatus, jqXHR){
		        // Log a message to the console
		        //console.log("Hooray, it worked!");
		        window.location.replace('contact-form-thanks.php');
		    });
		
		    // Callback handler that will be called on failure
		    request.fail(function (jqXHR, textStatus, errorThrown){
		        // Log the error to the console
		        console.error(
		            "The following error occurred: "+
		            textStatus, errorThrown
		        );
		    });
		
		    // Callback handler that will be called regardless
		    // if the request failed or succeeded
		    request.always(function () {
		        // Reenable the inputs
		        $inputs.prop("disabled", false);
		    });
		
		    // Prevent default posting of form
		    //event.preventDefault();
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
			},
			chxInfoBy: {
				required: true,
				minlength: 1
			}
		},
		messages: {
			chxInfoBy: 'Please select a preferred contact method'
		},
		errorPlacement: function(error, element) {
            //Custom position: contact method checkboxes
            if (element.attr("name") == "chxInfoByEmail" || element.attr("name") == "chxInfoByPhone" || element.attr("name") == "chxInfoByMail" ) {
                //$("#chxInfoByErr").text('Please select a preferred contact method');
                error.appendTo( '#chxInfoByErr' );
            }
            else {
		    	error.insertAfter(element); // default error placement.
			}
        }
        
	});

	$('.checkbox-sub, #lblPostalCode').hide();
	
	$('#chxInfoByPhone').click(function(){
		if ( $(this).is(':checked') ) {
			$('#grpPhone').fadeIn();
			$('#grpPhoneType').fadeIn();
		} else {
			$('#grpPhone').fadeOut();
			$('#grpPhoneType').fadeOut();
		}
	});

	$('#chxInfoByMail').click(function(){
		if ( $(this).is(':checked') ) {
			$('#grpCountry, #grpAddress1, #grpAddress2, #grpZip, #grpState').fadeIn();
		} else {
			$('#grpCountry, #grpAddress1, #grpAddress2, #grpZip, #grpState').fadeOut();
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