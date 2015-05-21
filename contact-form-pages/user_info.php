<?php

/* Request URL for Contacts module */
$url = 'https://api.hobsonsradius.com/crm/webservice/modules/Users/search';



$data = array("searchFields" => array(
				"Last Name" => 'Mettler-Grove',
			),
			"returnFields" => array(
				"Entity ID",
				"Last Name",
			)
			);
			


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
	
?>




