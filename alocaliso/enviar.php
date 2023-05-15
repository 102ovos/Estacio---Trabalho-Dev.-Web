<?php 
include_once "config2.php";

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


$sql = "INSERT INTO tbclientes(nome, email, senha) VALUES('$nome','$email','$senha')";
$resultado_cliente = mysqli_query($conn, $sql);

if(mysqli_insert_id($conn)){
    header("Location: entrar_pagina.php");
} else{
    header("Location: entrar_pagina.php");
}
?>