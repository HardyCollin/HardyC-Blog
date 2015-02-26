<!--Section allowing us to log out of an account-->
<?php
require_once (__DIR__ . "/../model/config.php");
unset($_SESSION["authenticated"]);
session_destroy();
header("location: " . $path . "/index.php");