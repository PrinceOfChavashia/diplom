<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=UTF-8");
//header("Access-Control-Allow-Headers: Content-Type,X-Auth-Token, Origin, Authorization");

//Подключимся к базе данных
$conn = new mysqli('localhost', "root", "", 'marmalade');
if($conn === false)
    die("Ошибка :".mysqli_connect_error());

$json = [];

$user_id = $_GET['asdasd'];
// $user_id = 2;
$orderArray = mysqli_fetch_all($conn->query("SELECT order_or FROM `user_order` WHERE `user_id` = '".$user_id."'"), MYSQLI_ASSOC);

foreach($orderArray as $key => $value){
    array_push($json, [json_decode($value['order_or'], true)]);
}
$json = array_reverse($json);
echo(json_encode($json));
?> 