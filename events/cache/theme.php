<?php
//	Helios Theme Select Cache - Delete this file when upgrading.
echo '
		<select name="hc_theme" id="hc_theme" onchange="window.location.href=this.value;">
			<option'.(($_SESSION['Theme'] == 'mobile') ? ' selected="selected"' : '').' value="http://simons-rock.edu/events/?theme=mobile">Mobile</option>
			<option'.(($_SESSION['Theme'] == 'ou-default') ? ' selected="selected"' : '').' value="http://simons-rock.edu/events/?theme=ou-default">Ou-default</option>
			<option'.(($_SESSION['Theme'] == 'publisher') ? ' selected="selected"' : '').' value="http://simons-rock.edu/events/?theme=publisher">Publisher</option>
			<option'.(($_SESSION['Theme'] == 'simonsrock') ? ' selected="selected"' : '').' value="http://simons-rock.edu/events/?theme=simonsrock">Simonsrock</option>
		</select>';