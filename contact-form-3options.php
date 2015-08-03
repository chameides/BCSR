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
		<div class="row"><!-- row inside the col -->
		  	<div class="form-group col-md-12">
		  		<h3>I'm a future:</h3>			
				<div class="radio">
				  <label>
					<input type="radio" name="userRole" id="userRoleStudent" value="Student" checked="checked">
					Student
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="userRole" id="userRoleParent" value="Parent" >
					Parent
				  </label>
				</div>
				<div class="radio">
				   <label>
					<input type="radio" name="userRole" id="userRoleOther" value="Other" >
					Other
				  </label>
				</div>
		 	</div>
		 	<div id="parentName">
			   	<div class="form-group col-md-6">
					<label for="parentFirstName">First Name*</label>
					<input type="text" class="form-control" name="parentFirstName" id="parentFirstName" maxlength="40" required> <!-- use max-length based on CRM import limits-->
			  	</div>
			  	<div class="form-group col-md-6">
					<label for="parentLastName">Last Name*</label>
					<input type="text" class="form-control" name="parentLastName" id="parentLastName" maxlength="80" required>
			  	</div>
			  	<div class="form-group col-md-12">
					<label for="txtEmail">Email address*</label>
					<input type="email" class="form-control" name="parentEmailSelf" id="parentEmailSelf" placeholder="Enter email" maxlength="100" required>
			  	</div>
		  	</div>

		  	<div class="form-group col-md-6">
				<label for="txtFirstName"><span id="childFirst">Child&rsquo;s </span>First Name*</label>
				<input type="text" class="form-control" name="txtFirstName" id="txtFirstName" maxlength="40" required>
		  	</div>
		  	<div class="form-group col-md-6">
				<label for="txtLastName"><span id="childLast">Child&rsquo;s </span>Last Name*</label>
				<input type="text" class="form-control" name="txtLastName" id="txtLastName" maxlength="80" required>
		  	</div>
		  	<div class="form-group col-md-12" id="emailAddress">
				<label for="txtEmail">Email address*</label>
				<input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Enter email" maxlength="100" required>
		  	</div>
		  	<div id="DOB">
				<div class="form-group col-sm-6">
				  <label for="birth_month"><span id="childDOB">Child&rsquo;s </span>Date of Birth* <span class="sr-only">(Month)</span></label> 
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

				<div class="form-group col-md-12">
					<label for="gradeLevel">Grade Level</label>
					<select class="form-control" id="gradeLevel" name="gradeLevel">
						<option value="">
							<?php
								//Helper text based on current month. During the summer, are we asking prospectives to use previous grade or next grade? If change the month, make sure to adjust the math in the form-sumbit script
								if (date("m")>8) {
							        echo "Select your Current Grade Level";
							    }
								else {
									$year = date('Y');
							        echo "Select Grade Completing in $year";
							    }
							?>
						  
						</option>
		
						<option value="7">
						  7<sub>th</sub> Grade
						</option>

						<option value="8">
						  8<sub>th</sub> Grade
						</option>

						<option value="9">
						  9<sub>th</sub> Grade
						</option>

						<option value="10">
						  10<sub>th</sub> Grade
						</option>

						<option value="11">
						  11<sub>th</sub> Grade
						</option>

						<option value="12">
						  12<sub>th</sub> Grade
						</option>
						
					  </select>
				  </div>
			</div>
			<div class="col-sm-12 form-group" id="note-container">
				<label for="text_area">Tell us about yourself</label>
				<textarea id="note" name="note" class="form-control"></textarea>
			</div>

			<div class="col-sm-12" id="chxInfoByErr">
				<label>I'd like to receive information by</label>
			</div>
			
			<div class="checkbox col-sm-12">
			  <label>
				<input type="checkbox" class="chxInfoBy" name="chxInfoByEmail" id="chxInfoByEmail" value="Email" checked>
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
					<label for="txtPhone">Primary Phone Number</label>
					<input type="text" class="form-control" id="txtPhone" name="txtPhone" >
				</div>
				<div class="form-group checkbox-sub col-sm-6" id="grpPhoneType">
					<label for="drpPhoneType">Phone Type</label>
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
				<label for="drpCountry">Country</label>
			<select name="drpCountry" id="drpCountry" class="form-control">
				<option value="">- Select Your Country -</option>
				<option value="United States">United States</option>
				<option value="Canada">Canada</option>
				<option value=""> </option>
				<option value="Afghanistan">Afghanistan</option>
				<option value="Albania">Albania</option>
				<option value="Algeria">Algeria</option>
				<option value="Andorra">Andorra</option>
				<option value="Angola">Angola</option>
				<option value="Anguilla">Anguilla</option>
				<option value="Antigua And Barbuda">Antigua And Barbuda</option>
				<option value="Argentina">Argentina</option>
				<option value="Armenia">Armenia</option>
				<option value="Aruba">Aruba</option>
				<option value="Australia">Australia</option>
				<option value="Austria">Austria</option>
				<option value="Azerbaijan">Azerbaijan</option>
				<option value="Bahamas, The">Bahamas, The</option>
				<option value="Bahrain">Bahrain</option>
				<option value="Bangladesh">Bangladesh</option>
				<option value="Barbados">Barbados</option>
				<option value="Belarus">Belarus</option>
				<option value="Belgium">Belgium</option>
				<option value="Belize">Belize</option>
				<option value="Benin">Benin</option>
				<option value="Bermuda">Bermuda</option>
				<option value="Bhutan">Bhutan</option>
				<option value="Bolivia">Bolivia</option>
				<option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
				<option value="Botswana">Botswana</option>
				<option value="Brazil">Brazil</option>
				<option value="Brunei">Brunei</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Burkina Faso">Burkina Faso</option>
				<option value="Burma">Burma</option>
				<option value="Burundi">Burundi</option>
				<option value="Cambodia">Cambodia</option>
				<option value="Cameroon">Cameroon</option>
				<option value="Canada">Canada</option>
				<option value="Cape Verde">Cape Verde</option>
				<option value="Cayman Islands">Cayman Islands</option>
				<option value="Central African Republic">Central African Republic</option>
				<option value="Chad">Chad</option>
				<option value="Chile">Chile</option>
				<option value="China">China</option>
				<option value="Cocos And Keeling Islands">Cocos And Keeling Islands</option>
				<option value="Colombia">Colombia</option>
				<option value="Comoros">Comoros</option>
				<option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
				<option value="Congo (Kinshasa)">Congo (Kinshasa)</option>
				<option value="Costa Rica">Costa Rica</option>
				<option value="Cote D'Ivoire">Cote D'Ivoire</option>
				<option value="Croatia">Croatia</option>
				<option value="Cuba">Cuba</option>
				<option value="Curacao">Curacao</option>
				<option value="Cyprus">Cyprus</option>
				<option value="Czech Republic">Czech Republic</option>
				<option value="Denmark">Denmark</option>
				<option value="Djibouti">Djibouti</option>
				<option value="Dominica">Dominica</option>
				<option value="Dominican Republic">Dominican Republic</option>
				<option value="Ecuador">Ecuador</option>
				<option value="Egypt">Egypt</option>
				<option value="El Salvador">El Salvador</option>
				<option value="England">England</option>
				<option value="Equatorial Guinea">Equatorial Guinea</option>
				<option value="Eritrea">Eritrea</option>
				<option value="Estonia">Estonia</option>
				<option value="Ethiopia">Ethiopia</option>
				<option value="Fiji">Fiji</option>
				<option value="Finland">Finland</option>
				<option value="France">France</option>
				<option value="Gabon">Gabon</option>
				<option value="Gambia, The">Gambia, The</option>
				<option value="Georgia">Georgia</option>
				<option value="Germany">Germany</option>
				<option value="Ghana">Ghana</option>
				<option value="Greece">Greece</option>
				<option value="Grenada">Grenada</option>
				<option value="Guatemala">Guatemala</option>
				<option value="Guinea">Guinea</option>
				<option value="Guinea-Bissau">Guinea-Bissau</option>
				<option value="Guyana">Guyana</option>
				<option value="Haiti">Haiti</option>
				<option value="Holy See">Holy See</option>
				<option value="Honduras">Honduras</option>
				<option value="Hong Kong">Hong Kong</option>
				<option value="Hungary">Hungary</option>
				<option value="Iceland">Iceland</option>
				<option value="India">India</option>
				<option value="Indonesia">Indonesia</option>
				<option value="Iran">Iran</option>
				<option value="Iraq">Iraq</option>
				<option value="Ireland">Ireland</option>
				<option value="Israel">Israel</option>
				<option value="Italy">Italy</option>
				<option value="Jamaica">Jamaica</option>
				<option value="Japan">Japan</option>
				<option value="Jordan">Jordan</option>
				<option value="Kazakhstan">Kazakhstan</option>
				<option value="Kenya">Kenya</option>
				<option value="Kiribati">Kiribati</option>
				<option value="Korea, North">Korea, North</option>
				<option value="Korea, South">Korea, South</option>
				<option value="Kosovo">Kosovo</option>
				<option value="Kuwait">Kuwait</option>
				<option value="Kyrgyzstan">Kyrgyzstan</option>
				<option value="Laos">Laos</option>
				<option value="Latvia">Latvia</option>
				<option value="Lebanon">Lebanon</option>
				<option value="Lesotho">Lesotho</option>
				<option value="Liberia">Liberia</option>
				<option value="Libya">Libya</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lithuania">Lithuania</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Macau">Macau</option>
				<option value="Macedonia">Macedonia</option>
				<option value="Madagascar">Madagascar</option>
				<option value="Malawi">Malawi</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Maldives">Maldives</option>
				<option value="Mali">Mali</option>
				<option value="Malta">Malta</option>
				<option value="Marshall Islands">Marshall Islands</option>
				<option value="Mauritania">Mauritania</option>
				<option value="Mauritius">Mauritius</option>
				<option value="Mexico">Mexico</option>
				<option value="Micronesia">Micronesia</option>
				<option value="Moldova">Moldova</option>
				<option value="Monaco">Monaco</option>
				<option value="Mongolia">Mongolia</option>
				<option value="Montenegro">Montenegro</option>
				<option value="Montserrat">Montserrat</option>
				<option value="Morocco">Morocco</option>
				<option value="Mozambique">Mozambique</option>
				<option value="Namibia">Namibia</option>
				<option value="Nauru">Nauru</option>
				<option value="Nepal">Nepal</option>
				<option value="Netherlands">Netherlands</option>
				<option value="New Zealand">New Zealand</option>
				<option value="Nicaragua">Nicaragua</option>
				<option value="Niger">Niger</option>
				<option value="Nigeria">Nigeria</option>
				<option value="Northern Ireland">Northern Ireland</option>
				<option value="Norway">Norway</option>
				<option value="Oman">Oman</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Palau">Palau</option>
				<option value="Palestine">Palestine</option>
				<option value="Panama">Panama</option>
				<option value="Papua New Guinea">Papua New Guinea</option>
				<option value="Paraguay">Paraguay</option>
				<option value="Peru">Peru</option>
				<option value="Philippines">Philippines</option>
				<option value="Poland">Poland</option>
				<option value="Portugal">Portugal</option>
				<option value="Qatar">Qatar</option>
				<option value="Romania">Romania</option>
				<option value="Russia">Russia</option>
				<option value="Rwanda">Rwanda</option>
				<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
				<option value="Saint Lucia">Saint Lucia</option>
				<option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
				<option value="Samoa">Samoa</option>
				<option value="San Marino">San Marino</option>
				<option value="Sao Tome And Principe">Sao Tome And Principe</option>
				<option value="Saudi Arabia">Saudi Arabia</option>
				<option value="Scotland">Scotland</option>
				<option value="Senegal">Senegal</option>
				<option value="Serbia">Serbia</option>
				<option value="Seychelles">Seychelles</option>
				<option value="Sierra Leone">Sierra Leone</option>
				<option value="Singapore">Singapore</option>
				<option value="Sint Maarten">Sint Maarten</option>
				<option value="Slovakia">Slovakia</option>
				<option value="Slovenia">Slovenia</option>
				<option value="Solomon Islands">Solomon Islands</option>
				<option value="Somalia">Somalia</option>
				<option value="South Africa">South Africa</option>
				<option value="South Sudan">South Sudan</option>
				<option value="Spain">Spain</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="Sudan">Sudan</option>
				<option value="Suriname">Suriname</option>
				<option value="Swaziland">Swaziland</option>
				<option value="Sweden">Sweden</option>
				<option value="Switzerland">Switzerland</option>
				<option value="Syria">Syria</option>
				<option value="Taiwan">Taiwan</option>
				<option value="Tajikistan">Tajikistan</option>
				<option value="Tanzania">Tanzania</option>
				<option value="Thailand">Thailand</option>
				<option value="Timor-Leste">Timor-Leste</option>
				<option value="Togo">Togo</option>
				<option value="Tonga">Tonga</option>
				<option value="Trinidad And Tobago">Trinidad And Tobago</option>
				<option value="Tunisia">Tunisia</option>
				<option value="Turkey">Turkey</option>
				<option value="Turkmenistan">Turkmenistan</option>
				<option value="Tuvalu">Tuvalu</option>
				<option value="Uganda">Uganda</option>
				<option value="Ukraine">Ukraine</option>
				<option value="United Arab Emirates">United Arab Emirates</option>
				<option value="United Kingdom">United Kingdom</option>
				<option value="United States">United States</option>
				<option value="Uruguay">Uruguay</option>
				<option value="Uzbekistan">Uzbekistan</option>
				<option value="Vanuatu">Vanuatu</option>
				<option value="Venezuela">Venezuela</option>
				<option value="Vietnam">Vietnam</option>
				<option value="Wales">Wales</option>
				<option value="Yemen">Yemen</option>
				<option value="Zambia">Zambia</option>
				<option value="Zimbabwe">Zimbabwe</option>

			</select>
		  </div>
		  <div class="form-group checkbox-sub col-sm-12" id="grpAddress1">
				<label for="txtAddress1">Address</label>
				<input type="text" class="form-control" name="txtAddress1" id="txtAddress1" maxlength="250" />
		  </div>
		  <div class="form-group checkbox-sub col-sm-12" id="grpAddress2">
				<input type="text" class="form-control" name="txtAddress2" id="txtAddress2" maxlength="60"/>
		  </div>
		  <div class="form-group checkbox-sub col-sm-12" id="cityContainer">
				<label for="city">City</label>
				<input type="text" class="form-control" name="city" id="city" maxlength="30"/>
		  </div>
		  <div class="form-group checkbox-sub col-sm-6" id="grpState">
			  <label for="drpState">State/Province</label> 
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
				<label for="txtZipOrPostal"><span id="lblZipCode">Zip Code</span><span id="lblPostalCode">Postal Code:</span></label>
				<input type="text" class="form-control" name="txtZipOrPostal" id="txtZipOrPostal" maxlength="15" />
		  	</div>
		  	<div id="contactParent">	
			  	<div class="checkbox col-sm-12">	
				 	<label>
						<input type="checkbox" class="chxInfoBy" name="contactParentInput" id="contactParentInput" value="ContactParent">
						Contact my parent
				  	</label>
				</div>
			  	<div class="form-group checkbox-sub col-sm-12" id="parentEmailContainer">
					<label for="parentEmail">Parent email address</label>
					<input type="text" class="form-control" id="parentEmail" name="parentEmail" placeholder="Enter email" maxlength="100">
				</div>
			</div>
			<input type="hidden" name="url" id="url" value="
				<?php 
					$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					echo $actual_link;
				?>" 
			>
			
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

<script src="/_resources/js/forms/rfi-combine-min.js"></script>
</body>
</html>