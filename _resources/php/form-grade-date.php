<?php 
  //Helper text based on current month. During the summer, are we asking prospectives to use previous grade or next grade? If change the month, make sure to adjust the math in the form-sumbit script
  if (date("m")>7) {
      echo "Select Current Grade Level";
  }
  else {
      $year = date('Y');
      echo "Select Grade Completing in $year";
  }                        
?>

