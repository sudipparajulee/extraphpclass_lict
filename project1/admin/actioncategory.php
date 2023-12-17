<?php
$categoryname = $_POST['categoryname'];
$priority = $_POST['priority'];

//create connection
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'newsapp';

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>