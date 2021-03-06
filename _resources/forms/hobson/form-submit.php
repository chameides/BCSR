<?php
  session_start();
/*
Table of Contents
1. Error Check
2. Includes
3. Set Form Source
4. Assemble Field Data
5. Create Array
6. Send Data to Hobson
7. Turn Session Off
*/
//1. Error Check
/*remove comment for email error error check 
        //set email variables
        $to = 'mchameides@simons-rock.edu';
        $subject ='Script Connect - Forms';
        $message = 'Step 1 is complete' ;
        $headers = 'From: donotreply@simons-rock.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        //send email
        mail ( $to , $subject , $message, $headers );
*/
//2. Includes
include 'config.php';
include 'functions.php';
//3. Set Form Source
if ($_POST['formSource'] == 'RFI-Address-Follow-Yes') { 
    $formSource = 'RFI-Address-Follow-Yes';
}
else if ($_POST['formSource'] == 'RFI-Address-Follow-No') { 
    $formSource = 'RFI-Address-Follow-No';
}
else if ($_POST['formSource'] == 'Address') { 
    //address follow up form: /contact-form-address
    if (isset($_SESSION['entityID']) &&  $_SESSION['entityID'] > 1) { 
        //session is working
        $formSource = 'address';
    }
    else {
        //required session variable is broken, go with back up plan
        $formSource = 'addressMissingSession';
    }
}
else if ($_POST['formSource'] == 'referral') { 
    $formSource = 'Referral ';
}
else if ($_POST['formSource'] == 'discovery') { 
     $formSource = 'Discovery Form | Attendance Date: ' . $_POST['attendanceDate'] . ' ' . $_POST['interview']; //include discovery day custom fields in notes 
    $phone = $_POST['txtPhoneRequired']; //Phone comes from different field names depending on the form origin
}
else if ($_POST['attendanceDate'] > 0) { //determine Form Source, if discovery day form: 
    $formSource = 'Discovery Form | Attendance Date: ' . $_POST['attendanceDate'] . ' ' . $_POST['interview']; //include discovery day custom fields in notes 
    $phone = $_POST['txtPhoneRequired']; //Phone comes from different field names depending on the form origin
}
else if (strpos($_POST['url'],'cty') !== false) { //if the URL of the form contains cty:
    $formSource = 'CTY Inquiry '; 
    $phone = $_POST['txtPhone']; //Phone comes from different field names depending on the form origin
}
else if (strlen($_POST['referrerName']) > 0) { //determine Form Source, if Referral form: 
  $formSource = 'Referral '; 
  $phone = $_POST['txtPhone'];  //Phone comes from different field names depending on the form origin
}
else { //default
    $formSource = 'RFI Form'; 
    $phone = $_POST['txtPhone']; //Phone comes from different field names depending on the form origin
};
/* 3. Assemble field data to pass to web server */
if ($formSource == 'RFI-Address-Follow-Yes' ||
    $formSource == 'RFI-Address-Follow-No' ||
    $formSource == 'Referral ')
    {
    $phone = $_POST['txtPhone']; //Phone comes from different field names depending on the form origin
};
//add fields if data exists. Without if statement, blank result will overwrite existing data. 
if(strlen($_POST['txtFirstName']) > 0 ) {
   $fields["First Name"] = $_POST['txtFirstName'];
};
//add fields if data exists. Without if statement, blank result will overwrite existing data. 
if(strlen($_POST['txtLastName']) > 0 ) {
   $fields["Last Name"] = $_POST['txtLastName'];
};
if(strlen($_POST['txtAddress1']) > 0 ) {
    $fields["Contact Street"] = $_POST['txtAddress1'];
    if ($formSource == 'RFI-Address-Follow-Yes'){
        $_SESSION['addressSubmit'] = 'True';
    }
};
if(strlen($_POST['txtAddress2']) > 0 ) {
     $fields["Contact Street 2"] = $_POST['txtAddress2'];  
};
if(strlen($_POST['city']) > 0 ) {
     $fields["Contact City"] = $_POST['city'];
};
if($_POST['txtZipOrPostal'] > 0 ) {
    $fields["Primary Zip/Postal Code"] = $_POST['txtZipOrPostal'];
};
if(strlen($_POST['parentFirstName']) > 0 ) {
    $fields["Parent 1 First Name"] = $_POST['parentFirstName'];
};
if(strlen($_POST['parentLastName']) > 0 ) {
    $fields["Parent 1 Last Name"] = $_POST['parentLastName'];
};
if ($_POST['birth_month'] > 0 ) {
    $fields["Date of Birth"] = $_POST['birth_month'] . '/' . $_POST['birth_day'] . '/' . $_POST['birth_year'];
};
//only post country, if country is not US. and Country is assigned
if ( ($_POST['drpCountry'] !== 'United States' ) && (strlen($_POST['drpCountry']) > 0) ) {
    $fields["Country Name"] = $_POST['drpCountry'] ;
    $_SESSION['addressInternationalExists'] = 'true';
}
else {
    $_SESSION['addressInternationalExists'] = 'false';
};
//only post state, if country is US or Canada
if ($_POST['drpCountry'] == 'United States' | $_POST['drpCountry'] == 'Canada') {
    if(strlen($_POST['drpState']) > 0 ) {
        $fields["Primary State Code"] = $_POST['drpState'];
    };
}
// else, prep contact assignments
else {
    $countryLength = strlen($_POST['drpCountry']);
};
 
            
//determine user type in order to select which fields to map to contact data 
if ($_POST['userRole'] == 'Parent') {
    if(strlen($_POST['drpPhoneType']) > 0){ 
        $fields["Parent 1 Preferred Phone type"] = $_POST['drpPhoneType'];
    };
    if($phone > 0) {
        $fields["Parent 1 Preferred Phone"] = $phone;
    };
    if(strlen($_POST['parentEmailSelf']) > 0) {
        $fields["Parent 1 Email"] = $_POST['parentEmailSelf'];
    };
}
else {
    if(strlen($_POST['drpPhoneType']) > 0){ 
        $fields["Preferred Phone"] = $_POST['drpPhoneType'];
    };
    if(strlen($_POST['txtEmail']) > 0) {
        $fields["Email"] = $_POST['txtEmail'];
    };
    //if($_POST['contactParentInput'] == 'ContactParent'){ };
    if (strlen($_POST['parentEmail']) > 0) {
        $fields["Parent 1 Email"] = $_POST['parentEmail'];
    }
    /*
    Determine preferred method of contact.
    Email trumps phone, phone trumps mail.
*/
    $prefContactMethod = array();
    if($_POST['chxInfoByEmail'] == 'Email'){
        array_push($prefContactMethod, 'Email');
    }
    if($_POST['chxInfoByPhone'] == 'Phone'){
        array_push($prefContactMethod, 'Phone');
    }
    if($_POST['chxInfoByMail'] == 'Mail'){
        array_push($prefContactMethod, 'Mail');
    }
    if(strlen($_POST['$prefContactMethod']) > 0){ 
        $fields["Preferred methods of contact"] = $prefContactMethod;
    };
    //if phone number exists... 
    if($phone > 0) {
        // Determine where to put phone number based on phone type
        switch($_POST['drpPhoneType']) {
            case 'Home':
                $fields["Phone"] = $phone;
                break;
            case 'Mobile';
                $fields["Mobile"] = $phone;
                break;
            default:
                $fields["Phone"] = $phone;
                break;
        }
    }
}
if ($_POST['formSource'] !== 'Address') {
    //Dump misc data into description field. Would be better to put this data into specific fields.
    if ($formSource == 'RFI-Address-Follow-Yes' ||
        $formSource == 'RFI-Address-Follow-No'
        ) {
        $formSourceOutput = 'RFI';
    }
    else {
        $formSourceOutput = $formSource;
    }
    $fields["Description"] = date("Y-m-d") . ' Source: ' . $formSourceOutput . ' | Form User: ' . $_POST['userRole'] . ' | Form url: ' . $_POST['url'] . ' | Note: ' . $_POST['note'];
}
//If Referral Form...
if ($formSource == 'Referral ') {
    //...dump misc referrer data into field. Would be better to put this data into specific fields.
    $fields["Referral Comment"] = 
        'Referrer: ' . $_POST['referrerName'] . 
        ' | ' . $_POST['referrerClassYear'] .
        ' | ' . $_POST['title'] .
        ' | ' . $_POST['organization'] . 
        ' | ' . $_POST['referrerEmail'] .
        ' | ' . $_POST['txtPhoneRequired'] .
        ' | ' . $_POST['referrerComment'] .
        ' | Student School: ' . $_POST['school']
    ;
};
//determine graduation year based on gradelevel
if (strlen($_POST['gradeLevel']) > 0) {
    $gradeLevel = $_POST['gradeLevel']; //pull data from form
    $YearsToGraduation = 12 - $gradeLevel;
    $graduationYear =  date("Y") + $YearsToGraduation; //calculate value
    if (date("m")>7) { //if change this calculation, make sure to change the helper text
        $graduationYear = $graduationYear + 1;
    }
    $fields["High School Graduation Year"] = $graduationYear; //add to array
}
/* Contact Owner (Admission Counselors) User Entity IDs */
$alexandraBillickID     = 685000000121867;
$amandaDubrowskiID      = 685000000121891;
$chandraJoosdeKovenID   = 685000017194351;
$joelPittID             = 685000000121843;
$mollyGreeneID          = 685000022393324;
$sophieMettlerGroveID   = 685000023022766;
$coleenCoxID            = 685000002082963;
$kirinTerniID           = 685000030899633;
$alanDupont             = 685000050377037;


/* Assign Contact Owner based on Country, State/Province, and Zip */
if ($_POST['drpCountry'] == 'United States' | $_POST['drpCountry'] == 'Canada') {
    switch($_POST['drpState']) {
        /* Amanda Dubrowski */
        case 'AL': 
        case 'AR':
        case 'DE':
        case 'DC':
        case 'FL':
        case 'GA':
        case 'IN': 
        case 'KY':
        case 'LA':
        case 'MD':
        case 'MI':
        case 'MS':
        case 'MO':
        case 'NC':
        case 'OH':
        case 'SC':
        case 'TN':
        case 'VA':
        case 'WV':
            $contactOwnerID = $amandaDubrowskiID;
            break;
        /* Alan Dupont */
        case 'NJ':
        case 'PA':
        case 'RI':
        case 'TX':
        case 'VT':
            $contactOwnerID = $alanDupont;
            break;
        /* Chandra Joos deKoven */
        case 'AB':
        case 'BC':
        case 'CT':
        case 'IA':
        case 'IL':
        case 'MB':
        case 'MN':
        case 'NB':
        case 'NF':
        case 'ND':
        case 'NL':
        case 'NT':
        case 'NU':
        case 'NS':
        case 'ON':
        case 'PE':
        case 'QC':
        case 'SK':
        case 'SD':
        case 'WI':
        case 'YT':
            $contactOwnerID = $chandraJoosdeKovenID;
            break;
         /* Kirin */
        case 'AZ':
        case 'CA':
        case 'CO':
        case 'ID': 
        case 'KS':
        case 'MT':
        case 'NE':   
        case 'NV':
        case 'NM':
        case 'OK':
        case 'OR':
        case 'UT':
        case 'WA':
        case 'WY':
        $contactOwnerID = $kirinTerniID; 
            break;
        /* Joel Pitt */
        case 'ME':
        case 'NH':
        case 'MA':
            $contactOwnerID = $joelPittID;
            break;
        /* Sophie Mettler-Grove */
        case 'AA':
        case 'AE':
        case 'AK':
        case 'AP':
        case 'AS':
        case 'CNMI':
        case 'GU':
        case 'HI':
        case 'MH':
        case 'PR':
        case 'RI':
        case 'TX':
        case 'VI':
            $contactOwnerID = $sophieMettlerGroveID;
            break;
        /* NY, broken up by zip codes (first 3 digits) */
        case 'NY':
            switch(substr($_POST['txtZipOrPostal'], 0, 3)){
               
                case '110':
                case '115':
                case '117':
                case '118':
                case '119':
                    $contactOwnerID = $chandraJoosdeKovenID;
                    break;
                case '100':
                case '101':
                case '102':
                case '103':
                case '104':
                case '111':
                case '112':
                case '113':
                case '114':
                case '116':
                    $contactOwnerID = $kirinTerniID;
                    break;
                default:
                    $contactOwnerID = $sophieMettlerGroveID;
                    break;
            }
            break;
        default:
            $contactOwnerID = $coleenCoxID;
            break;
    }
}
//international country
elseif ($countryLength >= 1) {
    $contactOwnerID = $sophieMettlerGroveID;
}
//no address
else {
    $contactOwnerID = $coleenCoxID;
};
$fields["Contact Owner"] = $contactOwnerID;
/* 5. Create createFields array per web service requirement */
$data_contact = 
    array(
        "createFields" => $fields,
        "returnFields" => array(
                "Entity ID",
                "Contact Street",
                "Description",
            )
    );
//define variables for specific curl event
$content = json_encode($data_contact);
$url_curl = $url_contacts;
if ($formSource == 'address') {
    $modify = 'True';
    $url_curl = $url_contacts . '/' . $_SESSION['entityID'];
}
//6. send data to Hobson
sendData();
//get entity id from return string
$entityID = get_string_between($return, 'Entity ID":', ',"Contact');
if ($formSource == 'RFI-Address-Follow-Yes'){
    global $modify;
    if (isset($_SESSION['addressSubmit']) &&  $_SESSION['addressSubmit'] == 'True') {
        //just submitted an address on the form
    }
    else {
        if ($modify == 'True'){
            //record already exists, check database 
            checkIFAddressExists();
        }
        else {
            //$_SESSION['testing-modify'] = $modify;
            //$_SESSION['testing-nocheck'] = 'true';
            $_SESSION['addressExists'] = 'false';
        }
    }
    //$_SESSION['testingReturn'] = $return;
    if (isset($_SESSION['addressExists']) && $_SESSION['addressExists'] == 'false') {
        //pass entity ID to address form
        $_SESSION['entityID'] = $entityID;  
    }
}
else if ($formSource == 'address') {
    $_SESSION['return'] = $return;
    $_SESSION['addressExists'] = 'true';
}
else if ($formSource == 'addressMissingSession') {
}
else {
    if ($_POST['userRole'] !== 'Other') {
        //prepare and send data for lifecycle 
        //don't send lifecycle on address and addressmissingsession
            $modify = 'False'; //reset to default
            $data_lifecycle = array("createFields" => array(
                "Contact" => $entityID,
                "Lifecycle Role" => 'Inquirer',
                "Lifecycle Stage" => 'Open',
                "Primary Role" => 'True',
            ));
        //define variables for specific curl event
        $content = json_encode($data_lifecycle);
        $url_curl = $url_lifecycles;
        //send data to Hobson
        sendData();
    }
}
//7. end session for form types that don't need it
if ($formSource !== 'RFI-Address-Follow-Yes' &&
    $_POST['formSource'] !== 'Address' ) {
    session_unset();
    session_destroy();
    session_write_close();
}
?>