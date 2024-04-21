<?php
function displayCurrentDateTime() {
  
    date_default_timezone_set('Europe/Belgrade'); 

    $currentDateTime = date('Y-m-d H:i:s'); 

    echo "Current date and time: $currentDateTime";
}
?>
