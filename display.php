<?php
$server="localhost";
$username="root";
$password="";
$database="finaldb";

// to create a  connection
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("there is no connection due to:".mysqli_connect_error());
}
else{
    echo "connection sucessfull!!!"."<br>". "ENJOY YOUR DAY WITH YOUR PARTNER!!!"."<br>"."<br>";
}
$sql="SELECT * FROM `final_tbl`";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
    echo "<table border='1' style='border-collapse:collapse;'>
    <tr>
    <th>id</th>
    <th>productName</th>
    <th>productPrice</th>
    <th>productQuantity</th>
    </tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr>
        <td>$row[id]</td>
        <td>$row[productName]</td>
        <td>$row[productPrice]</td>
        <td>$row[productQuantity]</td>
        </tr>";
    }
    echo "</table>";
}
else{
    echo "there is no data to display";
}
mysqli_close($conn);
?>