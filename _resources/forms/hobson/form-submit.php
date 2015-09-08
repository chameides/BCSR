<?php

/*
Table of Contents
1. Error Check
2. Includes
3. Assemble Field Data
4. Create Array
5. Send Data to Hobson
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

/* 3. Assemble field data to pass to web server */


if ($_POST['attendanceDate'] > 0) { //determine Form Source, if discovery day form: 
    $formSource = 'Discovery Form | Attendance Date: ' . $_POST['attendanceDate'] . ' ' . $_POST['interview']; //include discovery day custom fields in notes 
    $phone = $_POST['txtPhoneRequired']; //Phone comes from different field names depending on the form origin
}
else { //not discovery day form
    $formSource = 'RFI Form'; 
    $phone = $_POST['txtPhone']; //Phone comes from different field names depending on the form origin
};



$fields = array(
    "First Name" => $_POST['txtFirstName'],
    "Last Name" => $_POST['txtLastName'],
    "Contact Street" => $_POST['txtAddress1'],
    "Contact Street 2" => $_POST['txtAddress2'],
    "Contact City" => $_POST['city'],
    "Primary Zip/Postal Code" => $_POST['txtZipOrPostal'],
    "Parent 1 First Name" => $_POST['parentFirstName'],
    "Parent 1 Last Name" => $_POST['parentLastName']                    
);



if ($_POST['birth_month'] > 0 ) {
    $fields["Date of Birth"] = $_POST['birth_month'] . '/' . $_POST['birth_day'] . '/' . $_POST['birth_year'];
};

//only post country, if country is not US
if ($_POST['drpCountry'] !== 'United States' ) {
    $fields["Country Name"] = $_POST['drpCountry'] ;
};

//only post state, if country is US or Canada
if ($_POST['drpCountry'] == 'United States' | $_POST['drpCountry'] == 'Canada') {
    $fields["Primary State Code"] = $_POST['drpState'] ;
};

            
//determine user type in order to select which fields to map to contact data 
if ($_POST['userRole'] == 'Parent') {
    $fields["Parent 1 Preferred Phone type"] = $_POST['drpPhoneType'];
    $fields["Parent 1 Preferred Phone"] = $phone;
    $fields["Parent 1 Email"] = $_POST['parentEmailSelf'];
}
else {
    $fields["Preferred Phone"] = $_POST['drpPhoneType'];
    $fields["Email"] = $_POST['txtEmail'];
    //if($_POST['contactParentInput'] == 'ContactParent'){ };
    $fields["Parent 1 Email"] = $_POST['parentEmail'];
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
    $fields["Preferred methods of contact"] = $prefContactMethod;
    /* Determine where to put phone number based on phone type */
    switch($_POST['drpPhoneType']) {
        case 'Home':
            $fields["Phone"] = $phone;
            break;
        case 'Mobile';
            $fields["Mobile"] = $phone;
            break;
    }
}

$fields["Description"] = date("Y-m-d") . ' Source: ' . $formSource . '| Form User: ' . $_POST['userRole'] . ' | Form url: ' . $_POST['url'] . ' | Note: ' . $_POST['note'];


//determine graduation year based on gradelevel
if ($_POST['gradeLevel'] > 0) {
    $gradeLevel = $_POST['gradeLevel']; //pull data from form
    $YearsToGraduation = 12 - $gradeLevel; //this needs to be updated in January
    $graduationYear =  date("Y") + $YearsToGraduation; //calculate value
    if (date("m")>7) { //if change this calculation, make sure to change the helper text
        $graduationYear = $graduationYear + 1;
    }
    $fields["High School Graduation Year"] = $graduationYear; //add to array
}


/* User Entity IDs */
$alexandraBillickID     = 685000000121867;
$amandaDubrowskiID      = 685000000121891;
$chandraJoosdeKovenID   = 685000017194351;
$joelPittID             = 685000000121843;
$mollyGreeneID          = 685000022393324;
$sophieMettlerGroveID   = 685000023022766;


/* Assign Contact Owner based on State/Province */
switch($_POST['drpState']) {
    /* Amanda Dubrowski */
    case 'AL':
    case 'AB':
    case 'AR':
    case 'DE':
    case 'DC':
    case 'FL':
    case 'GA':
    case 'IL':
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
    /* Chandra Joos deKoven */
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
    case 'BC':
    case 'IA':
    case 'MB':
    case 'MN':
    case 'NB':
    case 'NF':
    case 'ND':
    case 'NT':
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
    /* Joel Pitt */
    case 'ME':
    case 'NH':
    case 'VT':
        $contactOwnerID = $joelPittID;
        break;
    /* Molly Greene */
    case 'CT':
    case 'MA':
    case 'NJ':
    case 'PA':
    case 'RI':
    case 'TX':
        $contactOwnerID = $mollyGreeneID;
        break;
    /* Sophie Mettler-Grove */
    case 'AK':
    case 'AS':
    case 'CNMI':
    case 'GU':
    case 'HI':
    case 'MH':
    case 'PR':
    case 'VI':
        $contactOwnerID = $sophieMettlerGroveID;
        break;
    /* NY, broken up by zip codes (first 3 digits) */
    case 'NY':
        switch(substr($_POST['txtZipOrPostal'], 0, 3)){
            case '100':
            case '101':
            case '102':
            case '103':
            case '104':
            case '110':
            case '111':
            case '112':
            case '113':
            case '114':
            case '116':
            case '115':
            case '117':
            case '118':
            case '119':
                $contactOwnerID = $chandraJoosdeKovenID;
                break;
            default:
                $contactOwnerID = $sophieMettlerGroveID;
                break;
        }
        break;
    default:
        $contactOwnerID = $sophieMettlerGroveID;
        break;
}

$fields["Contact Owner"] = $contactOwnerID;


/* 4. Create createFields array per web service requirement */
$data_contact = 
    array(
        "createFields" => $fields,
        "returnFields" => array(
                "Entity ID",
                "Description",
            )
    );

//define variables for specic curl event
$content = json_encode($data_contact);
$url_curl = $url_contacts;

//5. send data to Hobson
sendData();


if ($_POST['userRole'] !== 'Other') {
    $modify = 'False'; //reset to default
    //get entity id from return string
    $entityID = get_string_between($return, 'Entity ID":', '}');

    $data_lifecycle = array("createFields" => array(
        "Contact" => $entityID,
        "Lifecycle Role" => 'Inquirer',
        "Lifecycle Stage" => 'Open',
        "Primary Role" => 'True',
    ));

    //define variables for specic curl event
    $content = json_encode($data_lifecycle);
    $url_curl = $url_lifecycles;
    //send data to Hobson
    sendData();

}
?>
