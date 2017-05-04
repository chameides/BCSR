<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}
	
	$myEvnt = event_fetch();
	$myLnks = event_location_links($myEvnt['EventID'], $myEvnt['VenueID']);
		
	get_header();?>

	<meta property="og:title" content="<?php echo $myEvnt['Title'];?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="<?php echo cal_url().'/?eID='.$myEvnt['EventID'];?>"/>
	<meta property="og:image" content="<?php echo cal_url().'/img/like/event.png';?>"/>
	<meta property="og:site_name" content="<?php echo cal_name();?>"/>
	<meta property="og:description" content="<?php echo str_replace('"',"'",cleanBreaks(strip_tags($myEvnt['Description'])));?>"/>
	<script>
	//<!--
	function togThis(doTog, doLink){
		if(document.getElementById(doTog).style.display == 'none'){
			document.getElementById(doTog).style.display = 'block';
			document.getElementById(doLink).innerHTML = '<?php echo event_lang('Less');?>';
		} else {
			document.getElementById(doTog).style.display = 'none';
			document.getElementById(doLink).innerHTML = '<?php echo event_lang('More');?>';
		}
	}
	//-->
	</script>
</head>
<body id="top" itemscope itemtype="http://schema.org/WebPage" class="bcsr-cal no-hero">
	<?php include('head.php');?>
	<a name="top"></a>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<?php
	//$crumbs = array(cal_url().'/index.php?com=digest' => 'Events', cal_url() => 'Calendar',$myLnks['This'] => $myEvnt['Title']);
    $crumbs = array(cal_url() => 'Events',$myLnks['This'] => $myEvnt['Title']);
	build_breadcrumb($crumbs,50);?>
	<div class="container-fluid">
        <div class="row-fluid">
        <div class="col-md-8">
	<section>
		<article itemscope itemtype="http://schema.org/Event">
			<header>
				<h1 itemprop="name"><?php echo $myEvnt['Title'];?></h1>
			</header>
			<div id="evernote">
				<div id="location" itemscope itemprop="location" itemtype="http://schema.org/Place">

		<?php		if($myEvnt['Venue_Address'].$myEvnt['Venue_Address2'].$myEvnt['Venue_City'].$myEvnt['Venue_Region'].$myEvnt['Venue_Postal'].$myEvnt['Venue_Country'] != ''){?>
			<div id="detail_left_nostyle">
				<h4 class="date"><?php 
					echo $myEvnt['Date'];
					//if not this year, add year to date
					$yearEvent = substr($myEvnt['Timestamp'], 0, 4); //strip timestamp for year
					$yearCurrent = date("Y");
					if ($yearEvent != $yearCurrent) {
					    echo ', ' . $yearEvent;
					} 
				?>
				</h4>
				<time itemprop="startDate" content="<?php echo $myEvnt['Timestamp'];?>"><?php echo $myEvnt['Time'];?></time>
                <h4 itemprop="name" class="locname"><i class="fa fa-map-marker"></i>  <?php echo ($myEvnt['Venue_URL'] != '') ? ' <a href="'.$myEvnt['Venue_URL'].'" target="_blank">'. $myEvnt['Venue_Name'] . (($myEvnt['Venue_Address2'] != '') ? ' - ' . $myEvnt['Venue_Address2'] : '') .'</a>' : $myEvnt['Venue_Name'] . (($myEvnt['Venue_Address2'] != '') ? ' - ' . $myEvnt['Venue_Address2'] : '')?></h4>			
			</div>

					<br />
		<?php		}?>
					
				</div>
				<span itemprop="description"><?php echo ($myEvnt['Image'] != '') ? '<img src="'.$myEvnt['Image'].'" id="eimage_d" />':'';?><?php echo $myEvnt['Description'];?></span>
			</div>
			
			<div id="detail_right">
				
		<?php	if($myEvnt['Cost'] != ''){?>
				<p><span><?php echo event_lang('Cost');?></span> <?php echo $myEvnt['Cost'];?></p>
		<?php	}
		
				if($myEvnt['RSVP'] == 1){?>
				<span><?php echo event_lang('RSVP');?></span>
		<?php	event_rsvp_meter($myEvnt['RSVP_Spaces'],$myEvnt['RSVP_Taken'],250);?><br />
				<b><?php echo $myEvnt['RSVP_Taken'];?></b> <?php echo event_lang('Of');?> <b><?php echo $myEvnt['RSVP_Spaces'];?></b> <?php echo event_lang('SpacesTaken');?>
		<?php		if($myEvnt['RSVP_Active'] == 0){?>
				<br /><br />
				<?php event_rsvp_closed($myEvnt['RSVP_Open'],$myEvnt['RSVP_Close']);?>
		<?php		} else {?>
				<br /><br />
				<?php event_rsvp_link($myEvnt['RSVP_Spaces'],$myEvnt['RSVP_Taken'],$myEvnt['RSVP_Close']);?>	
		<?php		}
				}?>
		<?php	if($myEvnt['Contact'].$myEvnt['Contact_Email'].$myEvnt['Contact_Phone'].$myEvnt['Contact_URL'] != ''){?>
				<p><span><?php echo event_lang('Contact');?></span><br/>
				<?php echo ($myEvnt['Contact'] != '') ? $myEvnt['Contact'].'<br />' : '';?>
				<?php echo ($myEvnt['Contact_Email'] != '') ? cleanEmailLink($myEvnt['Contact_Email'],$myEvnt['Title'],event_lang('Email').' ').'<br />' : '';?>
				<?php echo ($myEvnt['Contact_Phone'] != '') ? event_lang('Phone').' '.$myEvnt['Contact_Phone'].'<br />' : '';?>
				<?php echo ($myEvnt['Contact_URL'] != '') ? event_lang('Website').' <a href="'.$myLnks['Event_URL'].'" target="_blank">'.event_lang('ClickToVisit').'</a><br />' : '';?>
                </p>
		<?php	}?>
                
                <p>
				<span><?php echo event_lang('Save');?></span><br/>
				<?php event_ical_link($myEvnt['EventID']);?>
				<a href="<?php echo $myLnks['Event_GoogleCal'];?>" class="icon google_cal" target="_blank"><?php echo event_lang('CalendarG');?></a><br />
				<a href="<?php echo $myLnks['Event_YahooCal'];?>" class="icon yahoo" target="_blank"><?php echo event_lang('CalendarY');?></a><br />
				<a href="<?php echo $myLnks['Event_LiveCal'];?>" class="icon live" target="_blank"><?php echo event_lang('CalendarW');?></a><br />
                </p>
			</div>
			
            <!--<div class="event-social-icons">-->
            		<div class="social"> 
					<div id="cmnt_cnt"><span class="arrow"><span>&nbsp;</span></span><?php get_comments_link($myEvnt['CommentsID'],$myEvnt['CommentsURL'],1)?></div>
					<div class="socialT">
						<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $myLnks['This'];?>" data-text="<?php build_tweet($myEvnt['Title'].' @ '.$myEvnt['Venue_Name'].' - '.$myEvnt['Time'].' '.event_lang('On').' '.stampToDate($myEvnt['DateRaw'],$hc_cfg[24]));?>" data-count="horizontal">Tweet</a>
						<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
					</div>
					<div class="socialG">
						<g:plusone size="medium" count="true" href="<?php echo $myLnks['This'];?>"></g:plusone>
						<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
					</div>
					<div class="socialF">
						<div class="fb-like" data-href="<?php echo $myLnks['This'];?>" data-send="false" data-layout="button_count" data-width="75" data-show-faces="false"></div>
					</div>
					<div class="socialL">
						<script type="text/javascript" src="http://platform.linkedin.com/in.js"></script>
						<script type="in/share" data-url="<?php echo urlencode($myLnks['This']);?>" data-counter="right"></script>
					</div>
				<!-- </div> -->
                <!--<a id="esi-facebook" href="#" class="fa-a"><i class="fa fa-facebook"><span class="sr-only">Facebook</span></i></a>
                <a id="esi-twitter" href="#" class="fa-a"><i class="fa fa-twitter"><span class="sr-only">Twitter</span></i></a>
                <a id="esi-gplus" href="#" class="fa-a"><i class="fa fa-google-plus"><span class="sr-only">Instagram</span></i></a>
                <a id="esi-linked" href="#" class="fa-a"><i class="fa fa-linkedin"><span class="sr-only">YouTube</span></i></a>-->
            </div>
            
			<?php get_comments($myEvnt['CommentsID'],$myEvnt['CommentsURL'],$myEvnt['Title'],1);?>
		</article>
	</section>
</div>
        <div class="col-md-3">
        <?php sr_get_side(); ?>      
        </div>
</div>
    </div><!--/container-->
	<?php get_footer(); ?>