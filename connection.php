<?php
$server = "localhost";
$username = "root";
$password = "";

// create a connection 
$conn = mysqli_connect($server, $username, $password);

if (!$conn) {
    die("sorry we fail to connect" . mysqli_connect_errno());
} else {
    echo "connectin sucessfull";
}
// create a db 
$sql = "CREATE DATABASE sandeshdb";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "the database is created sucessfully";
} else {
    echo "unsucessfull due to---->" . mysqli_error($conn);
}
?>
CREATE TABLE `sandydb`.`mytable` (`id` INT NULL ,
 `Name` VARCHAR(100) NOT NULL ,
  `Price` INT NOT NULL , 
  `Quantity` INT NOT NULL , 
  PRIMARY KEY (`id`),
   UNIQUE `name` (`Name`))