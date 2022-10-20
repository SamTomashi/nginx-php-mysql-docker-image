<?php
//Conecting to the data using PDO
// $pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
// $query = $pdo->query('SHOW VARIABLES like "version"');
// $row = $query->fetch();
// echo 'MySQL version:' . $row['Value'];


//Connecting to the database using MySQLi
$conn = new mysqli('mysql', 'tutorial', 'secret', 'tutorial', 3306);

if ($conn->connect_error) {
    $conn->connect_error;
}else{
    echo "connected";
}