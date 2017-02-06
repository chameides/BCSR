<?php
    ini_set('error_reporting', E_ALL);
    parse_str($_SERVER['QUERY_STRING']);
    
    if(isset($_GET["feed"])): $feed = $_GET["feed"]; elseif(!isset($feed)): $feed = "http://".$_SERVER[HTTP_HOST]."/events/rss/databuilder.php"; endif;
    if(isset($_GET["limit"])): $limit = intval($_GET["limit"]); elseif(!isset($limit)): $limit = 5; endif;
    if(isset($_GET["buttonUrl"])): $buttonUrl = $_GET["buttonUrl"]; elseif(!isset($buttonUrl)): $buttonUrl = $_SERVER[HTTP_HOST]."/events/"; endif;
    if(isset($_GET["buttonText"])): $buttonText = $_GET["buttonText"]; elseif(!isset($buttonText)): $buttonText = "View All"; endif;
    $xml=simplexml_load_file($feed);

    $guid_Check = array();
    for($i=0; $i<$limit; $i++){
        
        $category = $xml->channel->item[$i]->category;
        $location = $xml->channel->item[$i]->location;
        $title =  $xml->channel->item[$i]->eventName;
        $date = $xml->channel->item[$i]->date;
        $startTime = $xml->channel->item[$i]->startTime;
        $endTime = $xml->channel->item[$i]->endTime;
        $description = $xml->channel->item[$i]->description;
        $guid = $xml->channel->item[$i]->guid;
        
        /* Checking to see if the value guid is in the array not in the array if it isnt don't output the event. */
        /* Events with mulitple categories will only display once */    
        if (!(in_array((string)$guid, $guid_Check))) {
            echo '<a href="'.$guid.'" class="events-carousel-item" id="event_carousel_item"><h4>'.$category.'</h4><h3>'.$title.'</h3><div class="date-time">'.$date.'<br/>';
            if($endTime != ''){
                if(strcmp($startTime, $endTime) === 0 ){
                    echo 'All Day';
                } else {
                    echo $startTime.' - '.$endTime; 
                }
            } else {
                if($startTime == '12:00 AM'){
                    echo 'All Day';
                }else{
                    echo $startTime;
                }
            }
            if($location != ""){
                echo '<span class="location"><i class="fa fa-map-marker"></i>&nbsp;'.$location.'</span>';
            }
            echo '</div><p>'.$description.'</p></a>';
            /** Adding next guid to the guid Check array */
            $guid_Check[] = (string)$guid;
        }
    }
?>
