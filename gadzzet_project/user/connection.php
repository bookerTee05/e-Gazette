
<?php
$user = 'root'; // Mysql
$password = 'root'; // Mysql Password
$server = 'localhost'; // Mysql Host
$database = 'test_db'; // Mysql Databse
// PDO Connection string
$pdo = new PDO("mysql:host=$server;dbname=$database", $user, $password);

$con = mysqli_connect('localhost', 'root', 'root', 'test_db');