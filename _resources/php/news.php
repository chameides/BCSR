
<?php
	date_default_timezone_set('America/New_York');
	ini_set('display_errors', '1');
	//$url="http://simons-rock.edu/rss.xml";

	// search backwards starting from haystack length characters from the end
	function startsWith($haystack, $needle) {
		return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
	}
	$namespace = "http://search.yahoo.com/mrss/";
	
	if(isset($_GET["url"])) {
		$url = $_GET["url"];
	} else if(!isset($url)) {
		$url = "";
	}

	if(isset($_GET["limit"])) {
		$limit = $_GET["limit"];
	} else if(!isset($limit)) {
		$limit = 10;
	}

	if(startsWith($url, '/')){
		$feed = simplexml_load_file($_SERVER["DOCUMENT_ROOT"].$url);
	} else {
		$feed = simplexml_load_file($url);
	}

	$count = 0;
	$output = "";
	
	/* Sort by publish date */
	function cmp($a, $b) { return strtotime($b->pubDate) - strtotime($a->pubDate); }
	$items = $feed->channel->xpath("//item");
	usort($items,'cmp');


	foreach($items as $item) {
		if (($count < $limit) && ($count <= $limit)) {
			//Set variables from RSS
			$title = $item->title;
			$desc = $item->description;
			$link = $item->link;
			//March 16, 2015
			$date = date("F d, Y", strtotime($item->pubDate));
			$img = "";

			if($item->children($namespace) && $item->children($namespace)->attributes()->url) {
				$img = '<a class="link-news-image" href="'.$link.'"><img class="image-news" src="'.$item->children($namespace)->attributes()->url.'" alt="'.$title.'"/></a>';
			}

			//Display output
			$output = $output.'<div class="news-article">
				'.$img.'
				<a class="link-news-header" href="'.$link.'"><h3 class="squeeze">'.$title.'</h3></a>
				<a class="link-news-header" href="'.$link.'"><h5 class="squeeze">'.$date.'</h5></a>
				<div class="news-content-container"> 
					<div class="news-content">'.$desc.'</div>
					<div class="news-more">
						<a class="right-arrow" href="'.$link.'"><i class="fa fa-angle-right bold"></i> Read More</a>
					</div>
				</div>
			</div>';
			$count++;
		}
	}

	if ($count == 0)
		$output = $output.'<span>No items found in feed.</span>';

	echo $output;
?>
