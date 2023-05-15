<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alocaliso | Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="nav container">
            <i class="bx bx-menu" id="menu-icon"></i>
            <a href="index.php" class="logo">Aloca<span>liso</span></a>
            <ul class="navbar">
            </ul>
        </div>
    </header>
    <div id="grad">
        <form class="box" action="enviar.php" method="post">
            <h1>Criar Conta</h1>
            
            <input class="nome" type="text" name="nome" placeholder="Nome">

            <input class="email" type="text" name="email" placeholder="Email">
            
            <input class="senha" type="password" name="senha" placeholder="Senha">

            <input class="confirma" type="password" name="confirma" placeholder="Repetir a Senha">
            
            <input href="aluguel.php" class="button" type="submit" name="submit" value="CRIAR">
        </form>	
    </div>
    <!-- Link to Js -->
	<script src="js/cadastro.js"></script>
</body>
</html>