<?php

# Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

function get_user_data($link){
    if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
    {
        $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
        $userdata = mysqli_fetch_assoc($query);

        //    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])
        //        or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['user_ip'] !== "0")))
        //    {
        //        setcookie("id", "", time() - 3600*24*30*12, "/");
        //        setcookie("hash", "", time() - 3600*24*30*12, "/");
        //        echo "Хм, что-то пошло не так!";
        //    }
        //    else
        //    {
        //        echo "Привет, ".$userdata['user_login'].". Всё работает!";
        //    }
    }
    return $userdata;
}


?>