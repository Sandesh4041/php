<?php
try {
    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Get form data
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productQuantity = $_POST['productQuantity'];

    // Validate and sanitize input
    if (empty($productName) || !is_numeric($productPrice) || !is_numeric($productQuantity)) {
        throw new Exception("Invalid input data.");
    }

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "finaldb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connection successful" . "<br>";
    }

    // Prepare and bind
    $sql="INSERT INTO `final_tbl` ( `productName`, `productPrice`, `productQuantity`) VALUES ('$productName', '$productPrice', '$productQuantity')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "data inserted sucessfully";
    }    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
