<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
require_once(ADMINROOT.'../config/database.php');
require_once(ADMINROOT.'../models/admin/gifts.php');
require_once(ADMINROOT.'../models/admin/user.php');

if (!isset($_SESSION['auth'])){
    $_SESSION["url_save"] = $_SERVER['REQUEST_URI'];
    header("Location: /admin/auth.php");
}

$link = db_connect();
$user = get_user_data($link);
$gifts = get_gifts($link);
$last_url = $_SERVER['REQUEST_URI'];

if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = '';

if ($user['user_cat'] == 1) {
    $user_cat = 'Администратор';
} elseif ($user['user_cat'] == 2){
    $user_cat = 'Пользователь';
}
?>