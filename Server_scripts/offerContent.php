<?php
$inputKey = $_GET["key"];
$inputType = $_GET["type"];
$basedirectory = "/var/www/html/";
if ($inputKey == "kService2020:18") {
        if ($inputType==1) {
             $directory = $basedirectory."offerPage.txt";
        }

        $output = file_get_contents($directory);
        if ($output === FALSE) {
      echo "error";
   }    
       else{
            echo $output;
        } 
}
else{
    echo "invalidKey!";
}

   

?>



