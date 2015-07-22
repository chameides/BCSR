<?php
/**
 * @package Helios Calendar
 * @subpackage Simon's Rock Theme
 */
	if(!defined('isHC')){exit(-1);}
	
	sr_event_browse_valid(1);
	
	get_header();

    $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/_resources/calendar/header.xml');
    $xmlhead = $xml->head[0]->asXML();
    $xmlcontent = $xml->content[0]->asXML();

    echo $xmlhead;
?>

	<script src="<?php echo cal_url();?>/inc/javascript/validation.js"></script>

</head>
<body id="top" class="bcsr-cal has-hero" itemscope itemtype="http://schema.org/WebPage">
  	<?php include('head.php');?>
  	<!--<a name="top"></a>-->
    <div class="container-fluid page-container">
  
<?php
	$crumbs = array_merge(array(cal_url().'/index.php?com=digest' => 'Home', cal_url().'/' => 'Calendar'),$crmbAdd);
	//build_breadcrumb($crumbs);
    
    echo $xmlcontent;
?>
	<h1 id="events-header">Events Calendar</h1>
    <div class="col-md-8">
	<section id="events">		
		<?php 
            
			sr_event_browse(1);
			// set event_browse's argument to 1 to show images, 0 to hide them
		?>
		
	</section>
	</div>
    <div class="col-md-3" id="inline-aside">
	<?php get_side(); ?>
    </div>    
    </div><!--page-container-->

	<?php get_footer(); ?>