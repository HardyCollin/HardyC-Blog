<?php
require_once (__DIR__ . "/controller/login-verify.php");
require_once (__DIR__ . "/views/header.php");
if (authenticateUser()) {
    require_once (__DIR__ . "/views/navigation.php");
} else {
    require_once (__DIR__ . "/views/login-nav.php");
}
require_once (__DIR__ . "/views/register-form.php");
require_once (__DIR__ . "/views/footer.php");