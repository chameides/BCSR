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
	$crumbs = array_merge(array(cal_url().'/index.php?com=digest' => 'Home', cal_url() => 'Calendar'),$crmbAdd);
	build_breadcrumb($crumbs);?>
	<div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-8">
        	<section>	
        		<?php news_archive(); ?>
        		
        	</section>
        	</div>
            <div class="col-md-3">
    	       <?php get_side(); ?>
            </div>
        </div>
	</div>
	<?php get_footer(); ?>