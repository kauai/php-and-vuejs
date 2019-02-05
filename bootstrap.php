<?php

// $response = [];
// if($_SERVER['REQUEST_METHOD'] === 'POST'){
//     //salvar dados
//     $response = require __DIR__. "./src/save_user.php";
// }elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
//     //retornar um dado especifico
//     $response = require __DIR__. "./src/get_user.php";
// }elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
//     //listar dados
//     $response = require __DIR__. "./src/list_users.php";
// }
// header('Content-type:application-json');

// echo json_encode($response);


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require __DIR__. "./src/save_user.php";
}elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    require __DIR__. "./src/get_user.php";
}elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
    require __DIR__. "./src/list_users.php";
}
header('Content-type:application-json');

echo json_encode($response);