<!--Section allowing us to login under an account-->
<?php
    require_once (__DIR__ . "/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'");
    
  if($query -> num_rows === 1){
        $row = $query->fetch_array();
        if($row["password"] === crypt($password, $row["salt"])){
            $_SESSION["authenticated"] = true;
            header("location: " . $path . "/index.php");
        }
        else{
            header("location: " . $path . "/login.php");
        }
    }
    else{
        header("location: " . $path . "/login.php");
    }