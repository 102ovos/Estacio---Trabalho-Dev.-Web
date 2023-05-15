<?php
    session_start();
    
    if(!isset($_SESSION['email'])){
        header('Location: entrar_pagina.php?erro=true');
        exit;
    }

    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alocaliso | Aluguel</title>
    <!-- Link pro CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Link pros icones-->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Navbar -->
    <header>
        <!-- Nav Container -->
        <div class="nav container">
            <i class='bx bx-menu' id="menu-icon"></i>
            <a href="index.php" class="logo">Aloca<span>liso</span></a>
            <ul class="navbar">
            <li><a href='novo_carro.php'>Cadastrar</a></li>
                <?php
                    print "Olá, " . $_SESSION["nome"];
                    print "<li><a href='logout.php'>Sair</a></li>";
                ?>
            </ul>
        </div>
    </header>
    <br>

    <div>
    </div>
    <!-- LISTAR CARROS -->

    <section class="services" id="services">
        <div class="heading">
            <br><br>
            <span>Carros em Destaque</span>
            <h1>Para todos os gostos e tipos. <br> </h1>
        </div>
        
            
            <?php
                $sql = $conn->query("SELECT * FROM tbcarros");
                echo "<div class='services-container'>";
                    
                while ($carro = $sql->fetch(PDO::FETCH_ASSOC)){
                    echo"<div class='box'>";
                        echo "<div class='box-img'>";
                            echo "<img src='img/{$carro['img']}'>";    
                        echo"</div>";
                        
                        echo "<p>{$carro['ano']}</p>";
                        echo "<h3>{$carro['marca']} ";
                        echo "{$carro['modelo']}</h3>";
                        echo "<h2>R$ {$carro['descr']}<span>/mês</span></h2>";
                        echo "<br><br>";
                        echo "<a href='editar.php?id={$carro['id']}' class='btn'>Editar</a>";
                        echo "<br>";
                        echo "<a href='excluir.php?id={$carro['id']}' class='btn'>Excluir</a>";
                    echo"</div>";   
                    
                }
                echo "</div>"
            ?>
        
    </section>

    <br><br><br><br><br><br>

    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">Aloca<span>liso</span></a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                </div>
            </div>
            
            
            <div class="footer-box">
                <h3>Legalidade</h3>
                <a href="">Privacidade</a>
                <a href="">Reembolso</a>

            </div>

            <div class="footer-box">
                <h3>Contatos</h3>
                <p>Manaus</p>
                <p>Acre</p>
                <p>Vale do Rio Doce</p>
            </div>
        </div>	
    </section>
    
    <!-- Link to Js -->
	<script src="js/main.js"></script>
</body>
</html>