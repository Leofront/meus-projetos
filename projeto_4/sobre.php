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
					<li><a href="galeria.php">GALERIA</a></li>
					<li><a href="sobre.php" style="color: red;">SOBRE</a></li>
				</ul>
			</nav>

			<nav class="mobile">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="venda.php">VENDA</a></li>
					<li><a href="galeria.php">GALERIA</a></li>
					<li><a href="sobre.php" style="color: red;">SOBRE</a></li>
				</ul>
			</nav>	
			<div style="clear: both;"></div>
		</div><!--center-->
	</header>

	<section class="sobre">
		<div class="wraper-contato line-sobre">
				<div class="texto-contato"></div><!--texto-veiculos-->
					<div class="texto-contato">
						<h2>SOBRE</h2>
					</div><!--texto-veiculos-->
				<div class="texto-contato"></div><!--texto-veiculos-->
		</div><!--wraper-contato-->

		<div class="center">
			<div style="background-image: url(imagem/carro5.jpg);" class="img-sobre"></div><!--img-sobre-->
			<div class="texto-sobre">
				<h2>RM VEICULOS</h2>
				<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam commodo leo nec mauris placerat porta. Morbi bibendum volutpat lectus a fringilla. Pellentesque sagittis tortor eget mauris commodo, sit amet mattis elit pretium. Donec vulputate molestie molestie. Nullam gravida magna imperdiet, posuere lectus id, feugiat mauris. Praesent sagittis elit sed lacus venenatis dignissim. Mauris dictum diam in diam varius, vel semper massa ultricies. Vivamus in nibh imperdiet, venenatis est consequat, accumsan erat. Nulla finibus lacus nec velit suscipit, at facilisis ante facilisis. Fusce accumsan leo in purus vulputate accumsan. Vivamus pharetra, dui sed euismod blandit, diam arcu</P>
			</div><!--texto-sobre-->

			<div class="descricao-sobre">
				<div style="background-image:url(imagem/eu.jpg);" class="img-small"></div><!--img-small-->

				<div class="wraper-sobre">
					<p>feugiat mauris. Praesent sagittis elit sed lacus venenatis dignissim. Mauris dictum diam in diam varius, vel semper massa ultricies. Vivamus in nibh imperdiet, venenatis est consequat, accumsan erat. Nulla finibus lacus nec velit suscipit, at facilisis ante facilisis. Fusce accumsan leo in purus vulputate accumsan. Vivamus pharetra, dui sed euismod blandit, diam arcu</p>
				</div><!--wraper-sobre-->
			</div><!--descrição-sobre-->

			<div style="clear: both;"></div>
		</div><!--center-->

	</section>


	<section class="container-rodape"> 
			<footer>
			<nav class="menu-footer">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="venda.php">VENDA</a></li>
					<li><a href="galeria.php">GALERIA</a></li>
					<li><a href="sobre.php" style="color: red;">SOBRE</a></li>
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