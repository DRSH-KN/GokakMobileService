
<?php
    $DBName = "gokakMobileService";
    $userName = "root";
    $serverName = "localhost";
    $password = "Asif@1531";
    $table = "customerTable";

    $inputData = $_GET["data"];
    $inputType = $_GET["type"];
    

// Create connection
$conn = new mysqli($serverName, $userName, $password, $DBName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "connection successful";

if ($inputType=='1') {
   $sql = "SELECT  firstName, lastName, phoneNumber, emailID, deviceName, IMEI, saleDate, salePeriod, deviceID, offerType,offerStat FROM ".$table." WHERE phoneNumber = '".$inputData. "'";
}
elseif ($inputType=='2') {
    $sql = "SELECT  firstName, lastName, phoneNumber, emailID, deviceName, IMEI, saleDate, salePeriod, deviceID, offerType,offerStat FROM ".$table." WHERE IMEI = '".$inputData. "'";
}
else{
           if (strpos($inputData,";") == true) {
                $keyWord = explode(";", $inputData);
                $keyWordLen = count($keyWord);
                 $keyWordQuery = " WHERE ";
  for ($i=0; $i < $keyWordLen ; $i++) { 
       
        if (($keyWordLen-1)==$i) {
             $keyWordQuery = $keyWordQuery."(firstName LIKE '%".$keyWord[$i]."%' OR lastName LIKE '%".$keyWord[$i]."%')";
        } 

        else{
             $keyWordQuery = $keyWordQuery."(firstName LIKE '%".$keyWord[$i]."%' OR lastName LIKE '%".$keyWord[$i]."%') AND ";
        }  
            }
            $sql = "SELECT  firstName, lastName, phoneNumber, deviceName, emailID, IMEI, saleDate, salePeriod, deviceID, offerType,offerStat FROM ".$table.$keyWordQuery;
                
            }

            else{
                $sql = "SELECT  firstName, lastName, phoneNumber, emailID, deviceName, IMEI, saleDate, salePeriod, deviceID, offerType,offerStat FROM ".$table." WHERE (firstName LIKE '%".$inputData."%' OR lastName LIKE '%".$inputData."%')";
            }
        }
   
    //SELECT * FROM MyTable WHERE (Column1 LIKE '%keyword1%' OR Column2 LIKE '%keyword1%') AND (Column1 LIKE '%keyword2%' OR Column2 LIKE '%keyword2%');


$result = $conn->query($sql);

if ($result->num_rows > 0) {

    if ($result->num_rows == 1) {
        $apiout = "1%a1%";
        while($row = $result->fetch_assoc()) {
       $apiout = $apiout.$row["firstName"]."//".$row["lastName"]."//".$row["phoneNumber"]."//".$row["deviceName"]."//".$row["IMEI"]."//".$row["saleDate"]."//".$row["salePeriod"]."//".$row["deviceID"]."//".$row["offerType"]."//".$row["offerStat"]."//".$row["emailID"];         
        }
    }
        else{
            $apiout = "2%a1%";
            while($row = $result->fetch_assoc()) {
        $apiout = $apiout.$row["firstName"]."//".$row["lastName"]."//".$row["phoneNumber"]."//".$row["deviceName"]."//".$row["IMEI"]."//".$row["saleDate"]."//".$row["salePeriod"]."//".$row["deviceID"]."//".$row["offerType"]."//".$row["offerStat"]."//".$row["emailID"]."%eor%";         
        }
        }
    echo $apiout;

    
} else {
    echo "0%a1%NULL";
}


$conn->close();
?>