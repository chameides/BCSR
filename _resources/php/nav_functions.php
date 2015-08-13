
<?php
	function processNavFile($filePath){
		global $nestLevel;
		$nestLevel++;

		if(file_exists($filePath)){
			$file = file_get_contents($filePath);
			$regex = '/(<li[^>]*?>[\s]*?<a[^>]*?>[\s\S]*?<\/a>[\s]*?<\/li>)/';

			if(preg_match($regex, $file))
				preg_replace_callback($regex,"matchLI",$file);
		}

		$nestLevel--;
	}

	function matchLI($matches){
		global $html;

		$li = $matches[0];
		$regex = '/<li[^>]*?>[\s]*?<a[^>]*?href=\"([^"]*?\/)(index\.php)?\"[^>]*?>([\s\S]*?)<\/a>[\s]*?<\/li>/';

		if(preg_match($regex, $li))
			preg_replace_callback($regex,"matchSectionLI",$li);
		else
			$html .= $li;
	}

	function matchSectionLI($matches){
		global $html;
		global $currentDirectory;
		global $nestLevel;
		global $processedSections;
		global $count;

		$li = $matches[0];
		$href = $matches[1];
		$page = $matches[2];
		$title = $matches[3];
		$special = "";

		$filePath = $_SERVER["DOCUMENT_ROOT"] . $href . "_nav.inc";
		$processSubnav = true;

		//check if file exists and contains no lis
		if(file_exists($filePath)){
			$file = file_get_contents($filePath);
			$regex = '/(<li[^>]*?>[\s]*?<a[^>]*?>[\s\S]*?<\/a>[\s]*?<\/li>)/';

			if(!preg_match($regex, $file))
				$processSubnav = false;
		}
		else
			$processSubnav = false;	//no _nav in section

		//check if this is the current sections index page link
		if(!strcmp($href, $currentDirectory))
			$processSubnav = false;

		//check if class=ou-no-subnav within the li's node
		if(strpos($li, "class=\"ou-no-subnav\"") !== false)
			$processSubnav = false;

		//process a section only once to avoid infinite recursion when cross/links are added
		if(in_array($href, $processedSections))
			$processSubnav = false;

		//used to be 3 and change to 1
		if($processSubnav && ($nestLevel < 1)){

			if($href != '')
				array_push($processedSections, $href);

			$html .= "<li><a href=\"{$href}{$page}\">{$title}</a>
						<ul class=\"flat-list list-group\">";

			$currentDirectory = $href;

			processNavFile($filePath);

			$html .= "</ul></li>";

			$count++;
		}
		else
			$html .= $li;	//just copy the li
	}
?>
