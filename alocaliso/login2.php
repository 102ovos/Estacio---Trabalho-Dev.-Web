<?php

    session_start();

    if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))){
        print "<script>location.href='entrar_pagina.php';<script>";
    }

    include("config2.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM tbadmin WHERE email = '{$email}' AND senha = '{$senha}'";

    $res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;
if($qtd > 0){
    $_SESSION["email"] = $email;
    $_SESSION["nome"]  = $row->nome;
    
    print "<script>location.href='aluguel_admin.php';</script>";
} else{
    print "<script>alert('Usuário e/ou senha incorreto(s)');</script>";
    print "<script>location.href='entrar_pagina.php';</script>";
}
?>