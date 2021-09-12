<?php
            $inputKey = $_GET["key"];
           $inputOKey = $_GET["oKey"];
           $inputEmail = $_GET["email"];
        if ($inputKey == "kService2020:18") {
            $msg = "Gokak Mobile Service Admin Password Reset: \nYour OTP for Password Reset is :".$inputOKey."\nDo Not Share OTP to anyone.";

            $msg = wordwrap($msg,70);
            mail($inputEmail,"Gokak Mobile Service Password Reset OTP!",$msg);
            echo "1";
    }
         
	else{
	echo "invalidKey!";
	}
?>


