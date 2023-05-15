<?php
    session_start();
    
    if(!isset($_SESSION['email'])){
        header('Location: aluguel_admin.php?erro=true');
        exit;
    }

    include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alocaliso | Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/cad_car.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="nav container">
            <i class="bx bx-menu" id="menu-icon"></i>
            <a href="index.php" class="logo">Aloca<span>liso</span></a>
            <ul class="navbar">
            <?php
                    print "Olá, " . $_SESSION["nome"];
                    print "<li><a href='logout.php'>Sair</a></li>";
                ?>
            </ul>
        </div>
    </header>
    <div id="grad">
        <form class="box" action="cadastrar_carro.php" method="post">
            <h1>Cadastrar Carro</h1>

            <input class="img" type="text" name="img" placeholder="Local da Imagem">
            
            <input class="marca" type="text" name="marca" placeholder="Marca do Carro">

            <input class="modelo" type="text" name="modelo" placeholder="Modelo do Carro">

            <input class="descr" type="text" name="descr" placeholder="Preco">

            <input class="ano" type="text" name="ano" placeholder="Ano">
            
            <input href="aluguel_admin.php" class="button" type="submit" name="submit" value="LISTAR">
        </form>	
    </div>
    <!-- Link to Js -->
	<script src="js/cadastro.js"></script>
</body>
</html>