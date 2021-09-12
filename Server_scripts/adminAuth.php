<?php
    $serverName = "localhost";
    $DBName = "gokakMobileService";
    $userName = "root";
    $password = "Asif@1531";
    $table = "adminTable";

    $inputUserID = $_GET["id"];
    $inputPswd = $_GET["pswd"];
    $inputKey = $_GET["key"];
    $inputDeviceID = $_GET["deviceID"];
    
   
    $conn = new mysqli($serverName, $userName, $password, $DBName);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 
		
        if ($inputKey == "kService2020:18") {
            $sql = "SELECT adminPswd FROM ".$table." WHERE adminPhone = '".$inputUserID. "'";
            
         $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        if ($row["adminPswd"] == $inputPswd) {
            echo "1";
        }
        else{
            echo "0";
        }
    }
        }
        else{
            echo "3";
        }
    }
         
	else{
	echo "invalidKey!";
	}
?>


