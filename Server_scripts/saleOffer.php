<?php
$inputKey = $_GET["key"];

if ($inputKey == "kService2020:18") {
	
	$basedirectory = "/var/www/html/saleOffer.txt";
  	echo file_get_contents($basedirectory);
	}
	else{
		echo "invalidKey";
	}
?>
