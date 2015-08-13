<?php
	parse_str($_SERVER['QUERY_STRING']);
	
	if(isset($_GET["feed"])): $feed = $_GET["feed"]; elseif(!isset($feed)): $feed = "http://".$_SERVER[HTTP_HOST]."/events/rss/databuilder.php"; endif;
	if(isset($_GET["limit"])): $limit = intval($_GET["limit"]); elseif(!isset($limit)): $limit = 5; endif;
	if(isset($_GET["buttonUrl"])): $buttonUrl = $_GET["buttonUrl"]; elseif(!isset($buttonUrl)): $buttonUrl = $_SERVER[HTTP_HOST]."/events/"; endif;
	if(isset($_GET["buttonText"])): $buttonText = $_GET["buttonText"]; elseif(!isset($buttonText)): $buttonText = "View All"; endif;

    $xml=simplexml_load_file($feed);

    for($i=0; $i<$limit; $i++){
        
        $category = $xml->channel->item[$i]->category;
        $location = $xml->channel->item[$i]->location;
        $title =  $xml->channel->item[$i]->eventName;
        $date = $xml->channel->item[$i]->date;
        $startTime = $xml->channel->item[$i]->startTime;
        $endTime = $xml->channel->item[$i]->endTime;
        $description = $xml->channel->item[$i]->description;
        $guid = $xml->channel->item[$i]->guid;

        echo '<a href="'.$guid.'" class="events-carousel-item"><h4>'.$category.'</h4><h3>'.$title.'</h3><div class="date-time">'.$date.'<br/>'.$startTime;
        if($endTime != ""){
            echo ' - '.$endTime; 
        }
        if($location != ""){
            echo '<span class="location"><i class="fa fa-map-marker"></i>&nbsp;'.$location.'</span>';
        }
        echo '</div><p>'.$description.'</p></a>';

    }

?>