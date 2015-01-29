<?php
    require_once("../model/databse.php");
 $connection = new mysqli($host, $unsername, $password);
 
 if ($connection->connect_error) {
     die("Error: " . $connection->connect_error);
}
 else {
    echo "success: " . $connection->host_info;
}
$connection->close();