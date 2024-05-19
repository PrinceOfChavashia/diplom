<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$json = array();

$name = $_GET['name'];
$password = $_GET['password'];
$password_confirm  = $_GET['password_confirm'];
$telephon = $_GET['telephon'];
$email = $_GET['email'];

//Подключимся к базе данных
try {
    $conn = new mysqli('localhost', "root", "", 'diplom');
} catch(PDOException $e) {
    $json['error'] = 'ERROR: ' . $e->getMessage();
    print(json_encode($json));
    exit;
}


if($password != $password_confirm){
	$mes= "Пароли не совпадают";
}
else{
	
	$query = "SELECT * FROM `users` WHERE `name` = '".$name."'";
	if(count(mysqli_fetch_all($conn->query($query), MYSQLI_ASSOC)) > 0){
		$mes="Данный логин уже занят!";
	}
	else{
		if(preg_match("/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/", $telephon)){
			$sqlQuery = "INSERT INTO `users` (`id`, `name`, `telephon`, `password`, `email`) VALUES (NULL, '".$name."', '".$telephon."', '".$password."',  '".$email."')";
			if($conn->query($sqlQuery)){
				unset($_GET);
				$mes = "Вы успешно зарегистрированны!";
			}
			else
				$mes = "Ошибка!: ".$conn->error;
		}
		else
			$mes = "Проверьте правильность заполнения телефона!";
	}
}

print(json_encode($mes));
unset($_GET);
?>