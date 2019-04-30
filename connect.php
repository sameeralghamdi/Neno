<?php
$servername = "127.0.0.1";
$username = "root";
$pass = "";
$db_name ="NENO";

// Check connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
	die();
    }
?>