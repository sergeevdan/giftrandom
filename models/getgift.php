<?php

//function get_gift_data($link){
//	$query = "SELECT * FROM gifts ORDER BY id_gift";
//	$result = mysqli_query($link, $query);
//
//	if(!$result)
//		die(mysqli_error($link));
//
//	$n = mysqli_num_rows($result);
//	$gifts = array();
//
//	for ($i=0; $i<$n; $i++)
//	{
//		$row = mysqli_fetch_assoc($result);
//		$gifts[] = $row;
//	}
//
//	foreach ($gifts as $result){
//		echo $result['name_gift'], ';';
//	};
//}

require_once("../config/database.php");

$link = db_connect();

ini_set('memory_limit', '100M');

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	
//	$file_handle = fopen("../cache/gifts.txt", "r");
//	while (!feof($file_handle)) {
//	   $line = fgets($file_handle);
//	}
//	fclose($file_handle);
//
//	$arr = explode(', ', $line);
//
//	echo $arr[rand(0, count($arr)-1)];

//	$query = "SELECT id_gift FROM gifts ORDER BY id_gift";
//	$result = mysqli_query($link, $query);
//
//	if(!$result)
//		die(mysqli_error($link));
//
//	$gift_nums = mysqli_num_rows($result);


	$query = sprintf("SELECT * FROM gifts WHERE id_gift ORDER BY RAND(NOW()) LIMIT 1");
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	$gift = mysqli_fetch_assoc($result)['name_gift'];

	echo $gift;

	#Отправялем весь массив в js
//	if(isset($_GET['action']))
//		$action = $_GET['action'];
//	else
//		$action = '';
//
//	if ($action == 'getgiftdata'){
//		get_gift_data($link);
//	}

}