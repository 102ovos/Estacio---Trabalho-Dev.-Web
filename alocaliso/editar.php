<?php
    
    session_start();
    
    if(!isset($_SESSION['email'])){
        header('Location: aluguel_admin.php?erro=true');
        exit;
    }
    
	// Conectar ao banco de dados
	include_once('config.php');

	// Verificar se o ID foi enviado
	if (!isset($_GET['id'])) {
		header('Location: index.php');
		exit;
	}

	// Consultar o carro pelo ID
	$id = $_GET['id'];
	$sql = $conn->prepare("SELECT * FROM tbcarros WHERE id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();

	// Verificar se o carro foi encontrado
	if ($sql->rowCount() == 0) {
		header('Location: aluguel_admin.php');
		exit;
	}

	// Obter os dados do carro
	$carro = $sql->fetch(PDO::FETCH_ASSOC);

	// Verificar se o formulário foi enviado
	if (isset($_POST['modelo'])) {
		$modelo = $_POST['modelo'];
		$marca = $_POST['marca'];
		$ano = $_POST['ano'];
		$descr = $_POST['descr'];
        $img = $_POST['img'];

		// Atualizar os dados do carro no banco de dados
		$sql = $conn->prepare("UPDATE tbcarros SET modelo = :modelo, marca = :marca, ano = :ano, descr = :descr, img = :img WHERE id = :id");
		$sql->bindParam(':id', $id);
		$sql->bindParam(':modelo', $modelo);
		$sql->bindParam(':marca', $marca);
		$sql->bindParam(':ano', $ano);
		$sql->bindParam(':descr', $descr);
		$sql->bindParam(':img', $img);
		$sql->execute();

		// Redirecionar para a lista de carros
		header('Location: aluguel_admin.php');
		exit;
	}
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
        <form class="box" method="POST" enctype="multipart/form-data">
            <h1>Editar Carro</h1>

            <input class="img" type="text" value="<?php echo $carro['img'] ?>" name="img" placeholder="Local da Imagem">
            
            <input class="marca" type="text" value="<?php echo $carro['marca'] ?>" name="marca" placeholder="Marca do Carro">

            <input class="modelo" type="text" value="<?php echo $carro['modelo'] ?>" name="modelo" placeholder="Modelo do Carro">

            <input class="descr" type="text" value="<?php echo $carro['descr'] ?>" name="descr" placeholder="Preco">

            <input class="ano" type="text" value="<?php echo $carro['ano'] ?>" name="ano" placeholder="Ano">
            
            <input href="aluguel_admin.php" class="button" type="submit" name="submit" value="LISTAR">
        </form>	
    </div>
    <!-- Link to Js -->
	<script src="js/cadastro.js"></script>
</body>
</html>