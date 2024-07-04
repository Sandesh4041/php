<?php
$server="localhost";
$username="root";
$password="";
$database="sandeshdb";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("connection unsucessful".mysqli_connect_error());
}
else{
    echo "connection sucessfull"."<br>";
}
$sql="INSERT INTO `sandytable` ( `Name`, `Price`, `Quantity`) VALUES ( 'mango', '160', '2')";

try{
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "data inserted sucessfully";
    }
}
catch(mysqli_sql_exception){
echo "data wasn't inserted due to some error";
}