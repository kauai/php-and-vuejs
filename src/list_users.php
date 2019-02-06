<?php
$data = $pdo->query(
    "SELECT * FROM users"
)->fetchAll(PDO::FETCH_OBJ);


$response = [
    "msg" => "Todos os registros",
    "data" => $data
];