<?php

// Configurações do banco de dados
$host = 'localhost';
$dbname = 'db_alocaliso';
$user = 'root';
$password = '';

// Conectar ao banco de dados
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    exit;
}

    
?>

