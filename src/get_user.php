<?php
$data = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$data->execute([filter_input(INPUT_GET,'id')]);
$dados = $data->fetch(\PDO::FETCH_OBJ);

$response = [
    "msg" => "Um registro",
    "data" => $dados
];