<?php
    $serverName = "localhost";
    $DBName = "gokakMobileService";
    $userName = "root";
    $password = "Asif@1531";
    $table = "productTable";

    $inputKey = $_GET["key"];
    $inputProductName = $_GET["productName"];
    $inputProductCost = $_GET["productCost"];
    $inputProductValidity = $_GET["productValidity"];
    $inputProductDate = $_GET["productDate"];

// Create connection
$conn = new mysqli($serverName, $userName, $password, $DBName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "connection successful";

if ($inputKey=="kService2020:18") {
     $sql = "INSERT INTO ".$table."(productName, productCost, productValidity, productDate) VALUES ('".$inputProductName."','".$inputProductCost."','".$inputProductValidity."','".$inputProductDate."')";
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