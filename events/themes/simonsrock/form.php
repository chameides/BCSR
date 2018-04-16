<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}
	
	set_cat_cols(3);
	
	get_header();
	
	get_form_validation();?>

</head>
<body id="top" class="bcsr-cal no-hero" itemscope itemtype="http://schema.org/WebPage">
	<?php include('head.php');?>
	<a name="top"></a>
<?php
	//$crumbs = array_merge(array(cal_url().'/index.php?com=digest' => 'Home', cal_url() => 'Calendar'),$crmbAdd);
    $crumbs = array_merge(array(cal_url() => 'Events'),$crmbAdd);
	build_breadcrumb($crumbs);
?>
		<div class="container-fluid">
        <div class="row-fluid">
        <div class="col-md-8">
	<section id="form-section" aria-label="Matching Event Listings">
		<?php sr_forms_get_form();?>
	</section>
            </div>
            <div class="col-md-3">
	<?php sr_get_side(); ?>
	</div>
            </div>
    </div>
	<?php get_footer(); ?>