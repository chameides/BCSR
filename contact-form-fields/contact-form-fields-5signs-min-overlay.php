<form id="contactForm">
		<div class="form-group col-md-12">
			<!-- pass country to ensure state submit -->
			<input id="drpCountry" class="form-control" maxlength="40" name="drpCountry" type="hidden" value="United States" />
		</div>
		<div class="form-group col-md-6"><label for="txtFirstName">First Name*</label> <input id="txtFirstName" class="form-control" maxlength="40" name="txtFirstName" required="required" type="text" /></div>
		<div class="form-group col-md-6"><label for="txtLastName">Last Name*</label> <input id="txtLastName" class="form-control" maxlength="80" name="txtLastName" required="required" type="text" /></div>
		<div id="emailAddress" class="form-group col-md-12"><label for="txtEmail">Email Address*</label> <input id="txtEmail" class="form-control" maxlength="100" name="txtEmail" required="required" type="email"  /></div>
		<div class="form-group col-sm-12 col-md-12">
			<label for="gradeLevel">Grade Level*</label>
			<select class="form-control" id="gradeLevel" name="gradeLevel" required="required">
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
		
		<div id="State" class="form-group col-sm-12 col-md-12"><label for="drpState">State/Province</label>
			<select id="drpState" class="form-control" name="drpState" required="required">
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
				<option value="Other">Other</option>
			</select>
		</div>
			<?php
						// replace php with xsl-freindly code in CMS <php>
							include $_SERVER['DOCUMENT_ROOT']. '/_resources/php/form-url.php';
						//</php>
					?>
		<div class="form-group col-sm-12"><input id="RFI_btn_submit" class="btn btn-primary" type="Submit" value="Get the Checklist" /></div>
	</form>
