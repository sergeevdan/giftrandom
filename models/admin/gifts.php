<?php

function get_gifts($link){
    $query = "SELECT * FROM gifts ORDER BY id_gift";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $gifts = array();

    for ($i=0; $i<$n; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $gifts[] = $row;
    }

    return $gifts;
}

function gift_new($link, $name){
    $name = trim($name);

    if($name == '')
        return false;

    $t = "INSERT INTO gifts (name_gift) VALUES ('%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $name));

    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return true;
}

function gift_delete($link, $id){
    $id = (int)$id;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM gifts WHERE id_gift='%d'", $id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

function gift_get($link, $id_gift){
    $query = sprintf("SELECT * FROM gifts WHERE id_gift=%d",(int)$id_gift);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $gift = mysqli_fetch_assoc($result);

    return $gift;
}

function gift_edit($link, $id, $name){
    $name = trim($name);
    $id = (int)$id;

    if($name == '')
        return false;

    $sql = "UPDATE gifts SET name_gift='%s' WHERE id_gift='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($link, $name), $id);

    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);

}