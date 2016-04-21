<?php
    require_once('../config/database.php');
    require_once('../config/config.php');
    require_once('../models/admin/user.php');
    session_start();

    if (isset($_SESSION['auth'])){
        header("Location: /admin");
    }

    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = '';

//    if($action == 'login') {
//        if ($_POST['login'] == 'admin' && $_POST['pass'] == 'admin') {
//            $_SESSION['auth'] = '1';
//            header('Location: '.$_SESSION["url_save"]);
//        } else {
//            header('Location: auth.php');
//        }
//    }

    if(isset($_POST['submit']))
    {
        $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
        $data = mysqli_fetch_assoc($query);

        # Сравниваем пароли
        if($data['user_password'] == md5(md5(trim($_POST['pass']))))
        {
            # Генерируем случайное число и шифруем его
            $hash = md5(generateCode(10));

            if(!@$_POST['not_attach_ip'])
            {
                # Если пользователя выбрал привязку к IP
                # Переводим IP в строку
                $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
            }

            # Записываем в БД новый хеш авторизации и IP
            mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

            # Ставим куки
            setcookie("id", $data['user_id'], time()+60*60*24*30);
            setcookie("hash", $hash, time()+60*60*24*30);


            $_SESSION['auth'] = '1';

            # Переадресовываем браузер на страницу проверки нашего скрипта
            header('Location: '.$_SESSION["url_save"]);
        }
        else
        {
            $error_message = 'Вы ввели неправильные данные для входа';
            include('../views/admin/login.php');
        }
    }
    else if ($action == 'logout'){
        unset($_SESSION['auth']);
        $_SESSION["url_save"] = '/admin';
        header('Location: auth.php');
    }
    else {
        include('../views/admin/login.php');
    }

?>