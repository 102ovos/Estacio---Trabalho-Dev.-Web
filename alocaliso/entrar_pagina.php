<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Alocaliso | Login</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
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
			<form class="box" action="login.php" method="POST">
				<h1>Login</h1>
				<input type="text" name="email" placeholder="Email">
				<input type="password" name="senha" placeholder="Senha">
				<input type="submit" value="ENTRAR">
				<a href="cadastro.php" class="create">Não tenho uma conta</a>
			</form>
		</div>
	</body>
</html>