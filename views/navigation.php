<?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
     if(!authenticateUser()){
         header("location: " . $path . "/index.php");
         die();
     }
    ?>

<nav>
    <ul>
        <li><a href="<?php echo $path . "/index.html" ?>">Home</a></li>
        <li><a href="<?php echo $path . "/index.php" ?>">Blog Home</a></li>        
        <li><a href="<?php echo $path . "/post.php" ?>">Blog Post Form</a></li>
        <li><a href="<?php echo $path . "/controller/logout-user.php" ?>">Log Out</a></li>
    </ul>
</nav>