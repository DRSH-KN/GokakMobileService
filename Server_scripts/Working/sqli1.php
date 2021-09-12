
<?php
    $userName = "fdb28.awardspace.net";
    $serverName = "3699328_alcazerservicekeys001";
    $DBName = "3699328_alcazerservicekeys001";
    $userName = "3699328_alcazerservicekeys001";
    $password = "Alcazermill@18";
    $table = "alcazer_service_keys";

    $inputData = $_GET["data"];
    $inputType = $_GET["type"];
    
    function debug_to_console( $data ) {
    echo "<script>console.log( '" . $data . "' );</script>";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $DBname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "connection successful";
if ($inputType=="1") {
   $sql = "SELECT  firstName, lastName, phoneNumber, deviceName, IMEI, saleDate, salePeriod, deviceID, offerType,offerStat FROM ".$table." WHERE phoneNumber = '".$inputData. "'";
}
elseif ($inputType=="2") {
    $sql = "SELECT  firstName, lastName, phoneNumber, deviceName, IMEI, saleDate, salePeriod, deviceID, offerType,offerStat FROM ".$table." WHERE IMEI = '".$inputData. "'";
}
else{
    $keyWord = explode(";", $inputData);
    $keyWordLen = count($keyWord);
    $keyWordQuery = " WHERE";
    for ($i=0; $i < $keyWordLen ; $i++) { 
        $keyWordQuery = $keyWordQuery."[firstName] LIKE ('%".$keyWord[i]."%') OR ";
        if (($keyWordLen-1)==i) {
            $keyWordQuery = $keyWordQuery."[lastName] LIKE ('%".$keyWord[i]."%'))";  
        }else
        {
          $keyWordQuery = $keyWordQuery."[lastName] LIKE ('%".$keyWord[i]."%') OR ";  
        }
        
    }
    $sql = "SELECT  firstName, lastName, phoneNumber, deviceName, IMEI, saleDate, salePeriod, deviceID, offerType,offerStat FROM ".$table.$keyWordQuery;

}

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    if ($result->num_rows == 1) {
        $apiout = "1%a1%";
        while($row = $result->fetch_assoc()) {
       $apiout = $apiout.$row["firstName"]."//".$row["lastName"]."//".$row["phoneNumber"]."//".$row["deviceName"]."//".$row["IMEI"]."//".$row["saleDate"]."//".$row["salePeriod"]."//".$row["deviceID"]."//".$row["offerType"]."//".$row["offerStat"];         
        }
    }
        else{
            $apiout = "2%a1%";
            while($row = $result->fetch_assoc()) {
        $apiout = "1%a1%".$row["firstName"]."//".$row["lastName"]."//".$row["phoneNumber"]."//".$row["deviceName"]."//".$row["IMEI"]."//".$row["saleDate"]."//".$row["salePeriod"]."//".$row["deviceID"]."//".$row["offerType"]."//".$row["offerStat"]."%eor%";         
        }
        }
    echo $apiout;

    
} else {
    echo "0%a1%NULL";
}


$conn->close();
?>
<html>
<head>
    <title></title>
</head>
<body>


</body>
</html>