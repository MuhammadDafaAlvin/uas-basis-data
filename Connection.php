<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'testing';
$conn = mysqli_connect($host, $username, $password, $db);

if($conn){
    // echo "Database successfully connected!";
} else {
    echo "Cannot connected to database!";
}

mysqli_select_db($conn, $db);

?>
