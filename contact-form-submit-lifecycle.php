<?php

/* Request URL for Contacts module */
$url = 'https://api.hobsonsradius.com/crm/webservice/modules/Contacts';


/* Assemble field data to pass to web server */
$fields = array(
	"First Name" => $_POST['txtFirstName'],
	"Last Name" => 'delete_' . time() . '_' . $_POST['txtLastName'],
	"Email" => 'delete_' . time() . '_' . $_POST['txtEmail'],
	"Date of Birth" => $_POST['birth_month'] . '/' . $_POST['birth_day'] . '/' . $_POST['birth_year'],
	"Preferred Phone" => $_POST['drpPhoneType'],
	"Country Name" => $_POST['drpCountry'],
	"Contact Street" => $_POST['txtAddress1'],
	"Contact Street 2" => $_POST['txtAddress2'],
	"Primary State Code" => $_POST['drpState'],
	"Primary Zip/Postal Code" => $_POST['txtZipOrPostal'],
);
			
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
		$fields["Phone"] = $_POST['txtPhone'];
		break;
	case 'Mobile';
		$fields["Mobile"] = $_POST['txtPhone'];
		break;
}


/* User Entity IDs */
$alexandraBillickID 	= 685000000121867;
$amandaDubrowskiID 		= 685000000121891;
$chandraJoosdeKovenID 	= 685000017194351;
$joelPittID 			= 685000000121843;
$mollyGreeneID 			= 685000022393324;
$sophieMettlerGroveID 	= 685000023022766;


/* Assign Contact Owner based on State/Province */
switch($_POST['drpState']) {
	/* Alexandra  Billick */
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
		$contactOwnerID = $alexandraBillickID;
		break;
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
				$contactOwnerID = $alexandraBillickID;
				break;
			case '115':
			case '117':
			case '118':
			case '119':
				$contactOwnerID = $amandaDubrowskiID;
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
			
/* Create creatFields array per web service requirement */
$data_contact = array("createFields" => $fields);

			
/* Request URLs for modules */
$url_contacts = 'https://api.hobsonsradius.com/crm/webservice/modules/Contacts';
$url_lifecycles = 'https://api.hobsonsradius.com/crm/webservice/modules/LifeCycles';

//authentication
include 'contact-api.php';

//define variables for specic curl event
$content = json_encode($data_contact);
$url_curl = $url_contacts;

//send data to Hobson via curl
include 'contact-curl.php';

//trim return string
function get_string_between($string, $start, $end){
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}

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

//send data to Hobson via curl
include 'contact-curl.php';

?>




