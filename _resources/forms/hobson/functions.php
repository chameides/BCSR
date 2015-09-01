<?php
//This PHP script has reusable functions for the Form Submit. This includes sending data and error checking. If the there is an error, an email will be sent with the error details as well as the submission data.

//trim return string to get specific value
function get_string_between($string, $start, $end){
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
};

//return integer
function begins_with($haystack, $needle) {
    return strpos($haystack, $needle) === 0;
}

function sendData() {
    global $return, $data_contact, $url_curl, $userpwd, $content, $to_error , $headers, $modify;
    
    /* Pass JSON to web server
        If the data is a new record use, Hobson requires the Post Method. If it is exisiting record, Hobson requires the Put Method
    */
    $ch = curl_init($url_curl);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    if ($modify == 'True') {
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($content))); //prep data for put by including content length
    }
    else {
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    };
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, $userpwd);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    if ($modify == 'True') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");     
    }
    else {
        curl_setopt($ch, CURLOPT_POST, 1);
    };
    curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $return = curl_exec($ch);
    curl_close($ch);
    var_dump($return);
    
    
    /*
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
    */
    errorCheck();
};
function errorCheck() { 
    /*check for error
    Hobson returns a string after form submission. We need to parse the string to determine the error. 
    */
    global $return, $data_contact, $url_curl, $userpwd, $content, $to_error , $headers, $modify, $url_contacts, $entityID;
    
    $status = 'default';
    $status = get_string_between($return, 'status":"', '"');    
    $errorMessage = get_string_between($return, 'message":"', '"');
    $description = get_string_between($return, 'Description":"', '","Entity');
    $description2 = $fields["Description"] . $description;
    //if we are ok, then there is not error and we can move on. 
    if ($status !== "ok") {
        if (begins_with($errorMessage, "A duplicate record has been found")) {
            //The record already exists in the database, prepare to resubmit using the Modify/Put Method. 
            $modify = 'True';
            //if contacts table
            if ($url_curl == $url_contacts) {
                $entityID = filter_var($errorMessage, FILTER_SANITIZE_NUMBER_INT);
            };
            $url_curl = $url_curl . '/' . $entityID;
            sendData();
        }
        else {
        //prepare variables for email
        $subject ='Error: Hobson Radius Form';
        $message = 'There has been an error on the Hobson Radious Form Submission
            
            Status: ' . $status .
            '
            ***Modify: ' . $modify .
            '
            ***Error: ' . $errorMessage .
            '
            ***url:' . $url_curl .
            '
            ***entityID:' . $entityID .
            
            '
            ***error return:' . $return  . 
            '
            
            data send:' . print_r( $data_contact, true ) 
        ;
        //send email
        mail ( $to_error , $subject , $message, $headers );
        };
    };

    $subject ='Test: Hobson Radius Form';
        $message = 'There has been an error on the Hobson Radious Form Submission
            
            Status: ' . $status .
            '
            ***Modify: ' . $modify .
            '
            ***Error: ' . $errorMessage .
            '
            ***url:' . $url_curl .
            '
            ***entityID:' . $entityID .
            
            '
            ***Description:' . $description .
            
            '
            ***Description2:' . $description2 .
            
            '
            ***error return:' . $return  . 
            '
            
            data send:' . print_r( $data_contact, true ) 
        ;
        //send email
        mail ( $to_error , $subject , $message, $headers );
}

?>
