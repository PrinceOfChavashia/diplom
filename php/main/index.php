<?php
// Необходимые HTTP-заголовки 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Замерим скорость работы
$time_start = microtime(true);

// Пустой массив для данных
$json = array();

// Установим временную зону для правильного отображения даты и времени
date_default_timezone_set('Europe/Moscow');

//Подключимся к базе данных
try {
    $conn = new PDO('mysql:host=localhost;dbname=diplom', "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $json['error'] = 'ERROR: ' . $e->getMessage();
    print(json_encode($json));
    exit;
}

// Наш запрос
$query = "SELECT * FROM `katalog` limit 3"; 

// Выполним запрос
$Q = $conn->prepare($query);
$Q->execute();

// Выгрузим все строки полученные в запросе
$json = array();
$result = $Q->fetchAll();
foreach($result as $row){
    $json[] = array('id'=>$row['id'], 'name'=>$row['name'], 'opi'=>$row['opi'], 'img'=>$row['img'], 'price'=>$row['price'], 'sale'=>$row['sale'], 'weight'=>$row['weight'], 'sum'=>$row['sum']);
}

print(json_encode($json));
?>