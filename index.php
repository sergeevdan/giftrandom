<?php
    require_once("config/database.php");
    
    $link = db_connect();
    #$articles = articles_all($link);

    include('views/gift.php');
?>