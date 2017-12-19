<?php
	//set this up!
	date_default_timezone_set('America/New_York');
	ini_set('display_errors', '1');

	//$xml_feed="/academics/index.xml";
	if(!isset($xml_feed)) {
		$xml_feed = $_GET["xml_feed"];
	}
	//$id set by academics.js ajax call
	if(isset($_GET["id"])) {
		$id = $_GET["id"]-1;
	}

	//build out the feed
	if(file_exists($_SERVER["DOCUMENT_ROOT"].$xml_feed)) {
		$feed = simplexml_load_file($_SERVER["DOCUMENT_ROOT"].$xml_feed);
		//declare sortable array
		$sortable = array();
		//add each simpleXml object to array
		foreach($feed->program as $i) { $sortable[] = $i; }
		//define alpha-sort function
		function compare_name($a, $b) { return strnatcmp($a->name, $b->name); }
		//sort array
		usort($sortable, 'compare_name');
		
		//$id is only used by AJAX call, call the right function..
		if(!isset($id)){
			programItems();
		} else {
			expandedContent();
		}
	} else {
		echo "<p>Feed does not exist.. Maybe publish the page?</p>";
	} 

//ajax calls this php file with an $id query
function expandedContent() {
	global $sortable;
	global $id;
	$name = $sortable[$id]->name;
	$img = $sortable[$id]->image->img->attributes()->src;
	$imgAlt = $sortable[$id]->image->img->attributes()->alt;
	$intro = $sortable[$id]->intro;
	$link = $sortable[$id]->attributes()->href;
//if image exists. Dependency scanner fills in a blank field with dummy data. So look if image exists that doesn't equal dummy data. 
if ((strlen($img)>1) && ($img != "/academics/program-overview/")) {
	$imageWrapper = "
		<div class=\"col-xs-3 col-sm-6 col-md-6\">
			<img src=\" ".$img."\" alt=\" ". $imgAlt  ." \"/>
		</div>
		<div class=\"col-xs-9 col-sm-6 col-md-6\">";
}
//else, no image
else {
	$imageWrapper = "<div class=\"col-xs-0\"></div>
	<div class=\"col-xs-12\">";
}

 

  echo "<div class=\"row\">".$imageWrapper."
        <a id=\"expander-close\" href=\"#close\"><i class=\"fa fa-times\" aria-hidden=\"true\" title=\"Close\"><span class=\"sr-only\">Close</span></i></a>
        <h2>".$name."</h2>
        <p>".$intro."</p>
        <a href=\"".$link."\" class=\"btn btn-primary\">Learn More</a>
      </div>
    </div>";
}

//academics.php is first loaded
function programItems() {
	global $sortable;
	$count = 0;
	//loop through array and output html
	foreach($sortable as $item) {
		$name = $item->name;
		$img = $item->image->img->attributes()->src;
		$imgAlt = $item->image->img->attributes()->alt;
		$link = $item->attributes()->href;
		$type = $item->type;
		$interest = $item->interest;
		//extract valid class names
		$typeFiltered = preg_replace('/[\W ]+/', '-', $type);
		$intFiltered = preg_replace('/[\W ]+/', '-', $interest);

		//Display output
		echo "<li class=\"program-item ".strtolower($typeFiltered)." ".strtolower($intFiltered)."\" data-program-sort=\"".$count."\">
				<a href=\"".$link."\">
					<div class=\"box\"><span class=\"box-text\">".$name."</span></div>
				</a>
			</li>";
		$count++;
	}
	echo "<li id=\"expanded-content\" class=\"program-item expander\" data-program-sort=\"1\">
		</li>";
	if (empty($sortable))
		echo "<span>No programs found in feed.</span>";		
}	
	
?>