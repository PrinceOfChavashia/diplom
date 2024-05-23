<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$json = array();
try {
    $conn = new mysqli('localhost', "root", "", 'diplom');
} catch(PDOException $e) {
    $json['error'] = 'ERROR: ' . $e->getMessage();
    print(json_encode($json));
    exit;
}

$json = json_decode(file_get_contents('php://input'), true);
$user_id = $json[0]['user_id'];
$order_or = json_encode($json[1]);

$sqlQuery = "INSERT INTO `user_order` (`id`, `user_id`, `order_or`) VALUES (NULL, '".$user_id."', '".$order_or."')";
if($conn->query($sqlQuery)){
    unset($json);
    unset($user_id);
    unset($order_or);
    $mes = "Покупка совершена)))";
}
else{
    $mes = "Ошибка!: ".$conn->error;
}
    
print_r(json_encode($mes));
exit;
?>