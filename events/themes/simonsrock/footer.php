<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/footer.inc"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/footcode.inc"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/analytics.inc"); ?>
    <script>

   	$(window).load(function() {
		if( $('#frmEventSubmit').length > 0 ){
			var button = document.getElementById('submit');
			var frame = $('#eventDescription_ifr');
			var descBox = frame.contents().find('#tinymce');


			if (descBox.length > 0){
				function buttonDisplay(){
					button.disabled = (descBox.text() == '') ? true : false;
					button.value = (descBox.text() == '') ? 'Please add a description.' : 'Save Event';
				}

				button.disabled = true;
				button.value = "Please add a description.";	
				descBox.keyup(buttonDisplay);
			}

			if (descBox.length > 0){
				function buttonDisplay(){
					button.disabled = (descBox.text() == '') ? true : false;
					button.value = (descBox.text() == '') ? 'Please add a description.' : 'Save Event';
				}

				button.disabled = true;
				button.value = "Please add a description.";	
				descBox.keyup(buttonDisplay);
			}

			if($('#locPreset').length > 0)
			{
				$('#submit').click(function(e){
					if($('#locPreset').val() == 'default'){
						e.preventDefault();
						var err = "Plese select location.";
						alert(err);
					}
				});
			}

		}

	})
	</script>
</body>
</html>