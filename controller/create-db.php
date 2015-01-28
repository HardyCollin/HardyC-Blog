<?php
    require_once("../model/databse.php");
 $connection = new mysqli($host, $unsername, $password);
 
 if ($connection->connect_error) {
    
}
