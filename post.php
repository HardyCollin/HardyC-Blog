<?php
require_once (__DIR__ . "/controller/login-verify.php");
require_once (__DIR__ . "/views/header.php");
if (authenticateUser()) {
    require_once (__DIR__ . "/views/navigation.php");
} else {
    require_once (__DIR__ . "/views/login-nav.php");
}
require_once (__DIR__ . "/views/form.php");
require_once (__DIR__ . "/views/footer.php");

class BlogPost
{
    public $id;
    public $title;
    public $post;
    public $author;
    public $tags;
    public $datePosted;
}

