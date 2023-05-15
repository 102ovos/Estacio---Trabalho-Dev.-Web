<?php
include_once "config2.php";

$img = $_POST["img"];
$descr = $_POST["descr"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ano = $_POST["ano"];

$sql = "INSERT INTO tbcarros (img, descr, marca, modelo, ano) VALUES ('{$img}', '{$descr}', '{$marca}', '{$modelo}', '{$ano}')";
$res = $conn->query($sql);

if(mysqli_insert_id($conn)){
    header("Location: aluguel_admin.php");
} else{
    header("Location: aluguel_admin.php");
}
