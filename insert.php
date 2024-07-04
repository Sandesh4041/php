<?php
$name=$_POST['username'];
$pass=$_POST['password'];

echo  $name."<br>";

echo $pass;

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Sanitize the input to prevent XSS
//     $name = isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8') : null;
//     $pass = isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8') : null;

//     if ($name !== null && $pass !== null) {
//         echo "Username: " . $name . "<br>";
//         echo "Password: " . $pass;
//     } else {
//         echo "Username and password are required.";
//     }
// } else {
//     echo "Invalid request method.";
// }





?>
