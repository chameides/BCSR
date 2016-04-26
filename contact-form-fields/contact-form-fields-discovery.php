<div class="row"><!-- row inside the col -->
	<form id="contactForm">
		<div class="form-group col-md-12">
			<h3 class="subheadline">I'm a future:</h3>
			<div class="radio"><label> <input id="userRoleStudent" checked="checked" name="userRole" type="radio" value="Student" /> Student </label></div>
			<div class="radio"><label> <input id="userRoleParent" name="userRole" type="radio" value="Parent" /> Parent </label></div>
			<div class="radio"><label> <input id="userRoleOther" name="userRole" type="radio" value="Other" /> Other </label></div>
		</div>
		<div class="form-group col-md-12">
			<h3 id="dateHeadlineParent" class="subheadline">My child is attending Discovery Day On:</h3>
			<h3 id="dateHeadlineDefault" class="subheadline">I'm attending Discovery Day On:</h3>
			<div class="radio"><label> <input name="attendanceDate" type="radio" value="10-24-15" /> Saturday, October 24, 2015  </label></div>
			<div class="radio"><label> <input name="attendanceDate" type="radio" value="11-14-15" /> Saturday, November 14, 2015 </label></div>
			<div class="radio"><label> <input name="attendanceDate" type="radio" value="1-30-16" /> Saturday, January 30, 2016 </label></div>
			<div class="radio"><label> <input name="attendanceDate" type="radio" value="4-23-16" /> Saturday, April 23, 2016 </label></div>
		</div>
		<div>
			<div id="interviewParent" class="checkbox col-md-12"><label> <input name="interview" type="checkbox" value="Request Interview" /> I'd like my child to interview during the visit </label></div>
			<div id="interviewDefault" class="checkbox col-md-12"><label> <input name="interview" type="checkbox" value="Request Interview" /> I'd like to interview during my visit </label></div>
		</div>

		
		<div id="parentName">
			<div class="form-group col-md-6">
				<label for="parentFirstName">First Name*</label> <input id="parentFirstName" class="form-control" maxlength="40" name="parentFirstName" required="required" type="text" /> <!-- use max-length based on CRM import limits-->
			</div>
			<div class="form-group col-md-6">
				<label for="parentLastName">Last Name*</label> <input id="parentLastName" class="form-control" maxlength="80" name="parentLastName" required="required" type="text" />
			</div>
			<div class="form-group col-md-12">
				<label for="txtEmail">Email Address*</label> <input id="parentEmailSelf" class="form-control" maxlength="100" name="parentEmailSelf" required="required" type="email" />
			</div>
		</div>
		<div class="form-group col-md-6"><label for="txtFirstName"><span id="childFirst">Child&rsquo;s </span>First Name*</label> <input id="txtFirstName" class="form-control" maxlength="40" name="txtFirstName" required="required" type="text" /></div>
		<div class="form-group col-md-6"><label for="txtLastName"><span id="childLast">Child&rsquo;s </span>Last Name*</label> <input id="txtLastName" class="form-control" maxlength="80" name="txtLastName" required="required" type="text" /></div>
		<div id="emailAddress" class="form-group col-md-12"><label for="txtEmail">Email Address*</label> <input id="txtEmail" class="form-control" maxlength="100" name="txtEmail" required="required" type="email" /></div>
		<div id="Phone" class="form-group col-sm-6">
			<label for="txtPhone">Phone Number*</label>
			<input id="txtPhoneRequired" class="form-control" name="txtPhoneRequired" type="text" required="required"/>
		</div>
		<div id="PhoneType" class="form-group col-sm-6">
			<label for="drpPhoneType">Phone Type*</label>
			<select id="drpPhoneType" class="form-control" name="drpPhoneType" required="required">
			<option value="">- Select Phone Type -</option>
			<option value="Home">Home</option>
			<option value="Mobile">Mobile</option>
			</select>
		</div>
		<div id="DOB">
			<div class="form-group col-sm-6"><label for="birth_month"><span id="childDOB">Child&rsquo;s </span>Date of Birth* <span class="sr-only">(Month)</span></label><select id="birth_month" class="form-control" name="birth_month" required="required">
		<option value="">Month</option>
		<option value="01">January</option>
		<option value="02">February</option>
		<option value="03">March</option>
		<option value="04">April</option>
		<option value="05">May</option>
		<option value="06">June</option>
		<option value="07">July</option>
		<option value="08">August</option>
		<option value="09">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
		</select></div>
		<div class="form-group col-sm-3"><label class="hidden-xs" for="birth_day"><span class="sr-only">Date of Birth (Day)</span>&nbsp;</label><select id="birth_day" class="form-control" name="birth_day" required="required">
		<option value="">Day</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		</select></div>
		<div class="form-group col-sm-3"><label class="hidden-xs" for="birth_year"><span class="sr-only">Date of Birth (Year)</span>&nbsp;</label><select id="birth_year" class="form-control" name="birth_year" required="required">
		<option value="">Year</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
		<option value="1999">1999</option>
		<option value="1998">1998</option>
		<option value="1997">1997</option>
		<option value="1996">1996</option>
		<option value="1995">1995</option>
		<option value="1994">1994</option>
		<option value="1993">1993</option>
		<option value="1992">1992</option>
		<option value="1991">1991</option>
		<option value="1990">1990</option>
		</select></div>
		<div id="gradeLevel-container" class="form-group col-sm-12 col-md-12">
			<label for="gradeLevel">Grade Level*</label>
			<select class="form-control" name="gradeLevel" required="required">
				<option value="">
					<?php
						// replace php with xsl-freindly code in CMS <php>
							include $_SERVER['DOCUMENT_ROOT']. '/_resources/php/form-grade-date.php';
						//</php>
					?>
				</option>
				<option value="6">6th Grade</option>
				<option value="7">7th Grade</option>
				<option value="8">8th Grade</option>
				<option value="9">9th Grade</option>
				<option value="10">10th Grade</option>
				<option value="11">11th Grade</option>
				<option value="12">12th Grade</option>
			</select>
		</div>
		</div>
		<div id="note-container" class="col-sm-12 col-md-12 form-group"><label for="text_area">Tell us about yourself</label> <textarea id="note" class="form-control" name="note"></textarea></div>
		<div id="chxInfoByErr" class="col-sm-12 col-md-12"><label>I'd like to receive information by</label></div>
		<div class="checkbox col-sm-12"><label> <input id="chxInfoByEmail" class="chxInfoBy" checked="checked" name="chxInfoByEmail" type="checkbox" value="Email" /> Email </label></div>
		<div class="checkbox col-sm-12"><label> <input id="chxInfoByPhone" class="chxInfoBy" name="chxInfoByPhone" type="checkbox" value="Phone" /> Phone </label></div>
		<div class="checkbox col-sm-12"><label> <input id="chxInfoByMail" class="chxInfoBy" name="chxInfoByMail" type="checkbox" value="Mail" /> Mail </label></div>
		<div id="grpCountry" class="form-group checkbox-sub col-sm-12"><label for="drpCountry">Country</label><select id="drpCountry" class="form-control" name="drpCountry">
		<option value="">- Select Your Country -</option>
		<option value="United States">United States</option>
		<option value="Canada">Canada</option>
		<option value=""></option>
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
		<option value="Other">Other</option>
		</select></div>
		<div id="grpAddress1" class="form-group checkbox-sub col-sm-12"><label for="txtAddress1">Address</label> <input id="txtAddress1" class="form-control" maxlength="250" name="txtAddress1" type="text" /></div>
		<div id="grpAddress2" class="form-group checkbox-sub col-sm-12"><input id="txtAddress2" class="form-control" maxlength="60" name="txtAddress2" type="text" /></div>
		<div id="cityContainer" class="form-group checkbox-sub col-sm-12"><label for="city">City</label> <input id="city" class="form-control" maxlength="30" name="city" type="text" /></div>
		<div id="grpState" class="form-group checkbox-sub col-sm-6"><label for="drpState">State/Province</label><select id="drpState" class="form-control" name="drpState" required="required">
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
		</select></div>
		<div id="grpZip" class="form-group checkbox-sub col-sm-6 col-sub-trailing-sm"><label for="txtZipOrPostal"><span id="lblZipCode">Zip Code</span><span id="lblPostalCode">Postal Code</span></label> <input id="txtZipOrPostal" class="form-control" maxlength="15" name="txtZipOrPostal" type="text" /></div>
		<div id="contactParent">
			<div class="checkbox col-sm-12">
				<label> <input id="contactParentInput" class="chxInfoBy" name="contactParentInput" type="checkbox" value="ContactParent" /> Contact my parent </label>
			</div>
			<div id="parentEmailContainer" class="form-group checkbox-sub col-sm-12">
				<label for="parentEmail">Parent email address</label> <input id="parentEmail" class="form-control" maxlength="100" name="parentEmail" type="text" />
			</div>
		</div>
		
			<?php
						// replace php with xsl-freindly code in CMS <php>
							include $_SERVER['DOCUMENT_ROOT']. '/_resources/php/form-url.php';
						//</php>
					?>
		<input type="hidden" name="formSource" id="formSource" value="discovery" />
		<div class="form-group col-sm-12"><input id="RFI_btn_submit" class="btn btn-primary" type="submit" value="Submit" /></div>
	</form>
</div>