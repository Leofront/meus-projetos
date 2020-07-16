<!DOCTYPE html>
<html>
<head>
	<title>progeto_5</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta name="description" content="descrição do meu site">
	<meta name="keywords" content="palavras-chaves,separadas,por,virgula">
	<meta name="author" content="Leonardo alves">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image-x/png" href="imagem/arrow.png">
</head>
<body>

	<header style="border-bottom: 3px solid #b21E1E">
		<div class="center">
			<div class="logo"></div><!--logo-->

			<nav class="desktop">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="venda.php" >VENDA</a></li>
					<li><a href="galeria.php" style="color: red;">GALERIA</a></li>
					<li><a href="sobre.php">SOBRE</a></li>
				</ul>
			</nav>

			<nav class="mobile">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="venda.php" style="color: red;">VENDA</a></li>
					<li><a href="galeria.php">GALERIA</a></li>
					<li><a href="sobre.php">SOBRE</a></li>
				</ul>
			</nav>	
			<div style="clear: both;"></div>
		</div><!--center-->
	</header>

	<section class="venda-single">
		<div class="center">
			<div class="wraper-contato pagina-galeria">
				<div class="texto-contato"></div><!--texto-veiculos-->
					<div class="texto-contato">
						<h2>GALERIA DE CARROS</h2>
					</div><!--texto-veiculos-->
				<div class="texto-contato"></div><!--texto-veiculos-->
			</div><!--wraper-contato-->

			<div style="clear: both;"></div>

			<div class="single-venda">
				<div class="nav-breck"><a href="index.php">HOME</a><span>></span>
					<a href="venda.php">VENDA</a><span>></span>
					<a href="galeria.php">GALERIA</a>
				</div>
				<div class="nav-img" style="background-image: url(imagem/carro3.jpg);"></div>
					<div class="nav-wraper">
						<div class="arrow-nav"></div>
						<div class="arrow-nav"></div>
						
							<div class="nav-single">
								<div class="nav-single-2">
									<div class="img-single" style="background-image: url(imagem/carro2.jpg);"></div><!--imh-single-->
									<div class="img-single" style="background-image: url(imagem/carro3.jpg);"></div><!--imh-single-->
									<div class="img-single" style="background-image: url(imagem/carro4.jpg);"></div><!--imh-single-->
									<div class="img-single" style="background-image: url(imagem/carro5.jpg);"></div><!--imh-single-->
									<div class="img-single" style="background-image: url(imagem/carro6.jpg);"></div><!--imh-single-->
									<div class="img-single" style="background-image: url(imagem/carro7.jpg);"></div><!--imh-single-->
									
								</div><!--nav-single-2-->

						</div><!--nav-single-->
					</div><!--nav-wraper-->	
			</div><!---single-venda-->

			<div class="texto-single">
				<div class="texto-wrape2">
				<h2>R$ 75.000,00</h2>
				<br>
				<p>A versão padrão do Camaro tinha um motor de 230 in³ (3.6 L) I6 de 140 cv (104 kW) ou motor V8 de 327 in³ (5.4 L), com uma transmissão manual padrão de três velocidades. Havia 8 (em 1967), 10 (em 1968) e 12 (em 1969) diferentes motores disponíveis em 1967–1969 Camaros. Houve várias transmissões opcionais. A transmissão de 4 velocidades estava disponível para qualquer motor. A transmissão automática "Powerglide" de duas velocidades estava disponível todos os três anos. O "Turbo Hydra-Matic 350" de três velocidades tornou-se disponível a partir de 1969. O opcional para os carros SS396 era o automático de três velocidades Turbo 400.</p>
				<br>

				<div class="galeria-but">
					<input type="button" name="ação" value="ENVIAR">
				</div><!--galeria-but-->
			</div><!--texto--single-->

		</div>
		</div><!--center-->
		<div style="clear: both;"></div>
	</section>

	<section class="container-contato">
		<div class="center">
			<div class="wraper-contato">
				<div class="texto-contato"></div><!--texto-veiculos-->
					<div class="texto-contato">
						<h2>ENTRE EM CONTATO</h2>
					</div><!--texto-veiculos-->
				<div class="texto-contato"></div><!--texto-veiculos-->
			</div><!--wraper-contato-->

			<div style="clear: both;"></div>

			<form class="pagina1">
				<div class=" wraper-form w100">
					<span>*NOME</span>
					<input type="text" name="name"  required=>
				</div><!--w100-->

				<div class=" wraper-form w50">
					<span>*E-MAIL</span>
					<input type="text" name="name"  required=>
				</div><!--w100-->

				<div class=" wraper-form w50">
					<span>*TELEFONE</span>
					<input type="text" name="name"  required=>
				</div><!--w100-->	

				<div style="clear: both;"></div>

				<div class="w100 textarea">
					<span>MESANGEM</span>
					<textarea ></textarea>
				</div><!---w100-->	

				<div class="button">
					<input type="submit" name="ação" value="ENVIAR">
				</div><!--buuton-->

			</form>
			<div style="clear: both;"></div>
		</div><!--center-->
	</section><!--container-contato-->

	<section class="veiculos">
		<div class="center">

			<div><!---veiculos em destaque-->
				
				<div class="texto-veiculos"></div><!--texto-veiculos-->
					<div class="texto-veiculos">
						<h2>VEICULOS EM DESTAQUE</h2>
					</div><!--texto-veiculos-->
				<div class="texto-veiculos"></div><!--texto-veiculos-->
				
				<div style="clear: both;"></div>

			</div><!---veiculos em destaque-->

			<div class="vitrine-carros">	
				<div class="img-carros" style="background-image: url('imagem/carro7.jpg');"></div><!--img-carros-->
				<div class="info-carro">
					<h2>Volkswagen Karmann-ghia</h2>
					<p>1.6 8v, Gasolina, 2P, Manual1969</p>
					<a href="">Mais Detalhes</a>
				</div><!--info-carro-->
			</div><!--vitrine-carros-->

			<div class="vitrine-carros">	
				<div class="img-carros" style="background-image: url('imagem/carro2.jpg');"></div><!--img-carros-->
				<div class="info-carro">
					<h2>Volkswagen Karmann-ghia</h2>
					<p>1.6 8v, Gasolina, 2P, Manual1969</p>
					<a href="">Mais Detalhes</a>
				</div><!--info-carro-->
			</div><!--vitrine-carros-->

			<div class="vitrine-carros">	
				<div class="img-carros" style="background-image: url('imagem/carro3.jpg');"></div><!--img-carros-->
				<div class="info-carro">
					<h2>Volkswagen Karmann-ghia</h2>
					<p>1.6 8v, Gasolina, 2P, Manual1969</p>
					<a href="">Mais Detalhes</a>
				</div><!--info-carro-->
			</div><!--vitrine-carros-->


			<div style="clear: both;"></div><!--clear-->
		</div><!--center-->
	</section>

	<section class="container-rodape"> 

			<footer>
			<nav class="menu-footer">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="venda.php" >VENDA</a></li>
					<li><a href="galeria.php"style="color: #b21E1E;">GALERIA</a></li>
					<li><a href="sobre.php">SOBRE</a></li>
				</ul>
			</nav>

			<div class="email">LEO.FROGERI@GMAIL.COM</div>
			<div style="clear: both;"></div>
		
		</footer>
	</section><!--container-rodape-->

	<script src="js/jquery.js"></script>
	<script src="js/function.js"></script>

</body>
</html>