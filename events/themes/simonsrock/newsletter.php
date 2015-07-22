<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}
	
	get_header();?>

</head>
<body id="top" class="bcsr-cal no-hero" itemscope itemtype="http://schema.org/WebPage">
	<?php include('head.php');?>
	<a name="top"></a>
<?php	
	//$crumbs = array_merge(array(cal_url().'/index.php?com=digest' => 'Home', cal_url() => 'Calendar'),$crmbAdd);
    $crumbs = array_merge(array(cal_url() => 'Events'),$crmbAdd);
	build_breadcrumb($crumbs);?>
	<div class="container-fluid">
    <div class="row-fluid">
    <div class="col-md-8">
	<section>	
		
		<?php echo news_lang('Welcome');?>

		<fieldset style="text-align:center;">
			<br />
			<?php news_link_signup();?>
				<span style="margin:0px 25px 0px 25px;">|</span>
			<?php news_link_edit();?>
			<br /><br />
		</fieldset>
		
			<?php sr_news_link_archive();?>

	</section>
	    </div>
    <div class="col-md-3">
	<?php get_side(); ?>
        </div>
        </div>
	</div>
	<?php get_footer(); ?>