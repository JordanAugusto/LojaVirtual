<?php

$database = 'lojavirtual';
$host = 'localhost';
$user = 'root';
$password = '';

date_default_timezone_set('America/Sao_Paulo');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8","$user","$password");
} catch (PDOException $e) {
    echo 'Erro na conexão' .$e;
}

