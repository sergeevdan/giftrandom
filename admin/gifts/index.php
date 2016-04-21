<?php
require_once('../main.php');

if ($action == 'add'){
    if(!empty($_POST)){
        gift_new($link, $_POST['name']);
        header('Location: index.php');
    }
    #$good_category = get_good_category($link);
    include('../../views/admin/gifts/gift.php');
}
else if($action == 'edit'){
    if(!isset($_GET['id']))
        header("Location: index.php");
    $id = (int)$_GET['id'];

    if(!empty($_POST) && $id > 0){
        gift_edit($link, $id, $_POST['name']);
        header("Location: index.php");
    }

    $gift = gift_get($link, $id);
    include('../../views/admin/gifts/gift.php');
}
else if($action == 'delete'){
    $id = $_GET['id'];
    gift_delete($link, $id);
    header("Location: index.php");
}
//    else {
//        $articles = articles_all($link);
//        include('../views/articles_admin.php');
//    }
else {

    include('../../views/admin/gifts/index.php');
}

?>