<input type="hidden" name="url" id="url" value="<?php 
		//get current url and pass through form
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		echo $actual_link;            
	?>
" \>