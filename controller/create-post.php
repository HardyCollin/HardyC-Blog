<?php
    require_once (__DIR__ . "/../model/config.php");
//    Section for creating a post
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//    Section for redirection from page after posting
    $query = $_SESSION["connection"] -> query("INSERT INTO posts SET title = '$title', post ='$post'");
    if($query){
        header("location: " . $path . "/index.php");
    }
    else{
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }