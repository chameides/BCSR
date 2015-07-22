<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}?>
<!doctype html>
<html lang="<?php echo get_lang_config('HTMLTemplate');?>">
<head>
	<meta http-equiv="preview-refresh" content="3600" />
	<link rel="stylesheet" type="text/css" href="<?php echo cal_url();?>/themes/core.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo theme_dir();?>/css/style.css" />
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/headcode.inc"); ?>
	<link rel="shortcut icon" href="/favicon.ico">
	<?php sr_theme_hc_header();?>
	<script>
	//<!--
	var listDivs = ["hc_featured","hc_popular","hc_newest"];
	var listLinks = ["hc_l","hc_c","hc_r"];
	function toggleList(show){var i = 0;while(i < listDivs.length){document.getElementById(listDivs[i]).style.display = (i == show) ? "block" : "none";document.getElementById(listLinks[i]).className = (i == show) ? "on" : "off";i++;}}
	//-->
	</script>
