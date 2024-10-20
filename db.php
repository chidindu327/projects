<?php
$host = 'localhost';
$dbname ='social';
$username ='root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error){
    die("connection failed:". $conn->connect_error);
}
echo "";
?>