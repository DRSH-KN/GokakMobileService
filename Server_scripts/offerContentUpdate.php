<?php
$inputKey = $_GET["key"];
$inputType = $_GET["type"];
$inputData = file_get_contents('php://input');
$basedirectory = "/var/www/html";

if ($inputKey == "kService2020:18") {
       if ($inputType==1) {
       	if (!(file_put_contents(($basedirectory."offerPage.txt"),$inputData) === FALSE)){
       		echo "1";
       	}
       	else{
       		echo "failed";
       	}
  }
	}
	else{
		echo "invalidKey";
	}
?>

