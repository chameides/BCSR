<?php
	//echo 'entityID = ' . $_SESSION['entityID'];
	if (isset($_SESSION['entityID']) && $_SESSION['entityID'] > 1){ //if session id is working
		//TESTING VARIABLE: $_SESSION['formSource'] = 'address';
	}
	else { 
	//if session id isn't working, include required fields. User will be forced to re-enter
		echo '<div id="emailAddress" class="form-group col-md-12"><label for="txtEmail">Email Address*</label> <input id="txtEmail" class="form-control" maxlength="100" name="txtEmail" required="required" type="email"  /></div>
		<div class="form-group col-md-12"><label for="txtLastName"><span id="childLast">Child&rsquo;s </span>Last Name*</label> <input id="txtLastName" class="form-control" maxlength="80" name="txtLastName" required="required" type="text" /></div>';
	}
?>