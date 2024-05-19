<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$name = $_GET['name'];
$password = $_GET['password'];

//Подключимся к базе данных
try {
    $conn = new mysqli('localhost', "root", "", 'diplom');
} catch(PDOException $e) {
    $json['error'] = 'ERROR: ' . $e->getMessage();
    print(json_encode($json));
    exit;
}

$userAttempt = mysqli_fetch_all($conn->query("SELECT * FROM `users` WHERE `name` = '".$name."' and `password` = '".$password."'"), MYSQLI_ASSOC);
if(count($userAttempt) > 0){
    $json = array('id'=>$userAttempt[0]['id'], 'name'=>$userAttempt[0]['name'], 'telephon'=>$userAttempt[0]['telephon'], 'email'=>$userAttempt[0]['email']);
    print(json_encode($json));
}else{
	$json = "Проверьте правильность заполнения данных";
    print(json_encode($json));
}

unset($_GET);
?>