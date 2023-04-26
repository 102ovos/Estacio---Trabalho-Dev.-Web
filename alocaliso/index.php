<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alocaliso</title>
    <!-- Link pro CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Link pro Box Icons-->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Do Jorge Teixeira à <br>Cidade de Deus. <br> Nossas <span>Ximbicas</span> vão <br>pra onde você precisar.</h1>
            <p>Pra quem não quer alugar um 'mobi' mas não<br> quer ir de ônibus.</p>
            <a href="login.php" class="btn">Quero Alugar!</a>
        </div>
        <br><br>
    </section>
    <!-- Em Destaque -->
    <section class="cars" id="cars">
        <br><br><br>
        <div class="heading">
            <span>Carros em Destaque</span>
            <h2>Para todos os gostos e tipos.</h2>
            <p>Que tal aproveitar os carros que seus avós não paravam de falar sobre?</p>
        </div>
        <!-- Conteiner dos Carros -->
        <div class="cars-container container">
            
            <!-- Box 1 -->
            <div class="box">
                <img src="img/carro1.jpg" alt="">
                <h2>Audi A3</h2>
            </div>

            <!-- Box 2 -->
            <div class="box">
                <img src="img/carro2.jpg" alt="">
                <h2>Chevrolet Chevet</h2>
            </div>

            <!-- Box 3 -->
            <div class="box">
                <img src="img/carro3.jpg" alt="">
                <h2>Fiat Palio</h2>
            </div>

            <!-- Box 4 -->
            <div class="box">
                <img src="img/carro4.jpg" alt="">
                <h2>Fiat Tempra</h2>
            </div>

            <!-- Box 5 -->
            <div class="box">
                <img src="img/carro5.jpg" alt="">
                <h2>Volkswagen Fusca</h2>
            </div>

            <!-- Box 6 -->
            <div class="box">
                <img src="img/carro6.jpg" alt="">
                <h2>Volkswagen Gol G4</h2>
            </div>
        </div>
        <br><br>
    </section>
    
    <!-- Sobre -->
    
    <section class="about container" id="about">
    <br><br><br>
        <div class="about-img">
            <img src="img/fusca-background.png" alt="">
        </div>
        <div class="about-text">
        <br><br><br>
            <span>Sobre Nós</span>
            <h2>Ele tinha um objetivo: carros<br> clássicos (de qualidade duvidosa) para todos.</h2>
            <p>Conheça a história do Dono, uma pessoa humilde, trabalhadora, esforçada e herdeira de uma fortuna deixada pelo seu pai, que teve a brilhante ideia de contratar um grupo de desenvolvedores especializados para realizar seu sonho. Descubra como algo que surgiu como um desejo de montar uma locadora de carros com preços acessíveis aos poucos foi se tornando um pesadelo.</p>
            <!-- Botao Sobre -->
            <a href="#" class="btn">Saiba Mais</a>
        </div>
    </section>
    <!-- Conteiner do Blog -->
    <section class="blog" id="blog">
    <br><br><br>
        <div class="heading">
            <span>Blogs & Dicas</span>
            <h2>Nosso Conteúdo</h2>
            <p>Notícias, curiosidades, dicas e reviews. Tudo de inútil reunido em apenas um único lugar. </p>
        </div>
        <!-- Blog -->
        <div class="blog-container container">
            <!-- Box 1-->
            <div class="box">
                <img src="img/carro1.jpg" alt="">
                <span>29 de Fevereiro 2023</span>
                <h3>"Só fizeram o a3 quebrar pra não ser perfeito."</h3>
                <p>Isso aqui foi um estrondo no mercado nacional, aproveitando que os rivais germânicos não estavam a altura e assim acabou tomando o lugar oficial do carro de playboy do final dos anos 90, posteriormente se transformando no sonho do jovem nacional odiador de lombada no início dos anos 2000. Assim chegando num estado de socorro que é o A3 usado de OLX.</p>
                <a href="#" class="blog-btn">Leia Mais<i class='bx bx-right-arrow-alt' ></i></a>
            </div>

            <!-- Box 2-->
            <div class="box">
                <img src="img/carro2.jpg" alt="">
                <span>31 de Abril 2023</span>
                <h3>Você pode se divertir com um carro nacional.</h3>
                <p>Tudo já foi feito nesta plataforma não consegue ser categorizado em apenas um único blog. É impressionante quanto o chevette aceita modificações e swaps, tudo que você pode ter imaginado provavelmente já foi feito no chevette: motor de Opala, motor de Monza, Vectra, c20xe, V6 vortec, motor LS V8, ate motor de Marea e claro, ele… O motor AP.</p>
                <a href="#" class="blog-btn">Leia Mais<i class='bx bx-right-arrow-alt' ></i></a>
            </div>
        </div>
        <br><br>
    </section>
    
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