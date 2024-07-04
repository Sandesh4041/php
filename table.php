<?php 
$server="localhost";
$username="root";
$password="";
$database="sandeshdb";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("conncetion unsucessful".mysqli_connect_error());
}
else{
    echo "connection sucessfull"."<br>";
}
//create table
$sql="CREATE TABLE `sandytable` (`id` INT NULL ,
`Name` VARCHAR(100) NOT NULL ,
 `Price` INT NOT NULL , 
 `Quantity` INT NOT NULL , 
 PRIMARY KEY (`id`),
  UNIQUE `name` (`Name`))";
 

  try{
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "table was created sucessfully";
      }
  }
  catch( mysqli_sql_exception){
echo "table has already created";
  }
  ?>
