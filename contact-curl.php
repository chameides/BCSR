<?
	// Pass JSON to web server
	$ch = curl_init($url_curl);
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

	//check for error
	$status = 'default';
	$status = get_string_between($return, 'status":"', '"');
	if ($status !== "ok") {
		//set email variables
		$to = 'mchameides@simons-rock.edu';
		$subject ='Error: Hobson Radius Form';
		$message = 'There has been an error on the Hobson Radious Form Submission <br> 
			Status: ' . $status .
			'<br> error return:' . $return  . 
			'<br> data send:' . print_r( $data_contact, true ) ;
		$headers = 'From: donotreply@simons-rock.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
		//send email
		mail ( $to , $subject , $message, $headers );
	}
?>
		