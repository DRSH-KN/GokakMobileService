<?php
    $serverName = "localhost";
    $DBName = "gokakMobileService";
    $userName = "root";
    $password = "Asif@1531";
    $table = "adminTable";

    $inputUserID = $_GET["id"];
    $inputKey = $_GET["key"];
    
   
    $conn = new mysqli($serverName, $userName, $password, $DBName);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 
		
        if ($inputKey == "kService2020:18") {
            $sql = "SELECT adminEmailID FROM ".$table." WHERE adminPhone = '".$inputUserID. "'";
            
         $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            echo $row["adminEmailID"];
    }
        }
        else{
            echo "NoEmailFOUND";
        }
    }
         
	else{
	echo "invalidKey!";
	}
?>


