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


$sql = "INSERT INTO categories(categoryname, priority) VALUES ('$categoryname', $priority)";

$res = mysqli_query($con, $sql);    

if ($res) {
    echo "
    <script>
        alert('Category created successfully');
        window.location.href = 'categories.php';
    </script>
    ";
} else {
    echo "Error on creating category";
}


?>