<?php
    require_once('../config/config.php');
    require_once('../config/database.php');
    require_once('../models/admin/user.php');
    session_start();
    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = '';

    if(isset($_POST['submit']))
    {
        $err = array();

        # проверям логин
        if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
        {
            $err[] = "Логин может состоять только из букв английского алфавита и цифр";
        }

        if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
        {
            $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
        }

        # проверяем, не сущестует ли пользователя с таким именем
        #$query = mysqli_query($link, "SELECT COUNT(user_id) FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
        $t = "SELECT * FROM users WHERE user_login='%s'";
        $query = sprintf($t, mysqli_real_escape_string($link, $_POST['login']));
        $result  = mysqli_query($link, $query);
        if(mysqli_num_rows($result) > 0)
        {
            $err[] = "Пользователь с именем ".$_POST['login']." уже существует";
        }

        # Если нет ошибок, то добавляем в БД нового пользователя
        if(count($err) == 0)
        {

            $login = $_POST['login'];

            # Убераем лишние пробелы и делаем двойное шифрование
            $password = md5(md5(trim($_POST['password'])));

            mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
            header("Location: /admin");
        }
        else
        {

        }
    }

    include('../views/admin/register.php');

?>