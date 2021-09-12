<?php
   $serverName = "localhost";
    $DBName = "gokakMobileService";
    $userName = "root";
    $password = "Asif@1531";

    $table = "customerTable";

    $inputKey = $_GET["key"];
    $inputFirstName = $_GET["firstName"];
    $inputLastName = $_GET["lastName"];
    $inputPhoneNumber = $_GET["phoneNumber"];
    $inputEmailID = $_GET["emailID"];
    $inputIMEI = $_GET["IMEI"];
    $inputDeviceName = $_GET["deviceName"];
    $inputSaleDate = $_GET["saleDate"];
    $inputSalePeriod = $_GET["salePeriod"];
    $inputDeviceID = $_GET["deviceID"];
    $inputOfferType = $_GET["offerType"];
    $inputOfferStat = $_GET["offerStat"];
    $inputOfferCode = $_GET["offerCode"];
// Create connection
$conn = new mysqli($serverName, $userName, $password, $DBName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "connection successful";

if ($inputKey=="kService2020:18") {
     $sql = "INSERT INTO ".$table."(firstName, lastName, phoneNumber, emailID, deviceName, IMEI, saleDate, salePeriod, deviceID, offerType, offerStat, offerCode) VALUES ('".$inputFirstName."','".$inputLastName."','".$inputPhoneNumber."','".$inputEmailID."','".$inputDeviceName."','".$inputIMEI."','".$inputSaleDate."','".$inputSalePeriod."','".$inputDeviceID."','".$inputOfferType."','".$inputOfferStat."','".$inputOfferCode."')";
    if ($conn->query($sql) === TRUE) {
            echo "1";
        } else {
            echo "Error: ".$conn->error;
            }
    }
else{
    echo "invalidKey!";
    }

$conn->close();
?>