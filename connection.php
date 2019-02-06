<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=php_vue"
    ,"root",
    "",
    [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
);

return $pdo;

// echo "<pre>";
//     var_export($dpo);
// echo "</pre>";