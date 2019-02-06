<?php
$data = $pdo->prepare(
    "INSERT INTO users (name,email) VALUES(?,?)"
);

$name = filter_input(INPUT_POST,'name',FILTER_DEFAULT);
$email = filter_input(INPUT_POST,'email',FILTER_DEFAULT);

if(!$email || !$name){
    http_response_code(422);
    $response = [
        "msg" => "Preencha todos os campos!!!"
    ];
    return $response;
}


$data->bindValue(1,$name, PDO::PARAM_STR);
$data->bindValue(2,$email, PDO::PARAM_STR);
$data->execute();

$response = [
    "msg" => "Criando registros",
    "data" => [
        "id" => $pdo->lastInsertId()
    ]
];