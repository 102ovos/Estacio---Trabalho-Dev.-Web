<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Alocaliso - Login</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
	<!-- Navbar -->
	<header>
        <!-- Nav Container -->
        <div class="nav container">
            <!-- Menu Icon -->
            <i class='bx bx-menu' id="menu-icon"></i>
            <!-- Logo -->
            <a href="#" class="logo">Aloca<span>liso</span></a>
            <!-- Nav List -->
            <ul class="navbar">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#cars">Em Destaque</a></li>
                <li><a href="#about">Sobre Nós</a></li>
                <li><a href="#blog">Blog</a></li>
            </ul>
        </div>
    </header>
		<div id="grad">
			<form class="box" action="login.php" method="post">
				<h1>Login</h1>
				<input type="text" name="" placeholder="User">
				<input type="password" name="" placeholder="Senha">
				<input type="submit" name="" value="ENTRAR">
				<a href="cadastro.php" class="create">Não tenho uma conta</a>
			</form>	
		</div>
	</body>
</html>