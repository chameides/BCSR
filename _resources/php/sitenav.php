
<?php

	include_once('nav_functions.php');
	parse_str($_SERVER['QUERY_STRING']);

	$leftnav = (isset($leftnav)) ? $leftnav : "/_nav.inc";
	$serverFilePath = $_SERVER["DOCUMENT_ROOT"] . $leftnav;
	$currentDirectory = str_replace("_nav.inc", "", $leftnav);
	$nestLevel = 1;
	$count = 1;
	$processedSections = array();
	$html = "";

	processNavFile($serverFilePath);

	echo $html;

?>
