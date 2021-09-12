<?php
    $serverName = "localhost";
    $DBName = "gokakMobileService";
    $userName = "root";
    $password = "Asif@1531";
    $table = "productTable";

    $inputKey = $_GET["key"];

// Create connection
$conn = new mysqli($serverName, $userName, $password, $DBName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "connection successful";

if ($inputKey=="kService2020:18") {
   $sql = "SELECT productName FROM ".$table;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $output= "Product,";
        while($row = $result->fetch_assoc()) {
       $output = $output.$row["productName"].",";      
        }
        echo $output;
    }
    else{
        echo "Choose;NA;";
    }
}
else{
echo "invalidKey!";
}

$conn->close();
?>