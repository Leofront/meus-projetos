<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>teste</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta name="description" content="descrição do meu site">
	<meta name="keywords" content="palavras-chaves,separadas,por,virgula">
	<meta name="author" content="Leonardo alves">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
       
</head>
<body>

	<header>
		
		<div class="center">
			<div>
			<div class="logo">
					<h2>FACEBOOK</h2>
			</div><!--logo-->
			</div>

				<div>
				<form method="post" class="form-login">
					
					<div class="input-container">
						<p>email ou telefone</p>
						<input type="text" name="email" required>
					</div><!--input-container-->

			    	<div class="input-container">
			     		<p>Senha</p>
					    <input type="password" name="senha" required>
				    </div><!--input-container-->

					<div class="input-container">
						<input type="submit" name="ação" value="enviar">
					
					</div><!--submit-->
				
				</form>
			</div>
			
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
			<div class="center">
				<div>
				<div class="container-pessoas">
					<h2>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
					<img src="imagem/pessoas.png">
				</div><!--img-->
			</div>

			<div>
			<div class="abrir-conta">

				<div class="cabeça">
					<h2>ABRA SUA CONTA</h2>
					<h3>Sempre sera gratuito!</h3>
				</div>

				<form class="form">

						<div class="nome">
							<input type="text" name="nome" placeholder="nome" required>
						</div><!--w50-->

					     <div class="nome">
							  <input type="text" name="nome" placeholder="sobrenome" required>
						</div><!--w50-->

						<div class="w100">
							 <input type="email" name="email" placeholder="E-mail" required>
						</div><!--w100-->

						<div class="w100">
							<input type="password" placeholder="senha" required>
						</div><!--w100-->  

						<div class="clear"></div>
					
					<div class="data"> 

							<h2>data de nascimento</h2>

									
							<select name="nascimento-dia" class="nascimento">
								<?php 
									for ($i=1; $i <=30; $i++) { 
									# code...
								?>	
						  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>

							</select>
							<select name="nascimento-mes" class="nascimento">

							<option value="#">janeiro</option>
							<option value="#">feveiro</option>
							<option value="#">março</option>
							<option value="#">abril</option>
							<option value="#">maio</option>
							<option value="#">julho</option>
							<option value="#">junho</option>
							<option value="#">agosto</option>
							<option value="#">setembro</option>
							<option value="#">outubro</option>
							<option value="#">novembro</option>
							<option value="#">dezembro</option>
							</select>
									

									
							<select name="nascimento-ano" class="nascimento">
								<?php
									for ($i=1920; $i <=2020; $i++){

								?>
						<option value="<?php echo $i;?>"><?php echo $i; ?></option>
						<?php } ?>	
							</select>

					</div><!--data-->

						<div class="clear"></div>

						<div class="sexo">

							<div class="input-radio">
								<input type="radio" name="sexo" required>
								<h2>masculino</h2>
							</div><!--radio-->

							<div class="input-radio">
								<input type="radio" name="sexo" required=>
								<h2>feminino</h2>
							</div><!--radio-->

						</div><!--sexo-->

					<div class="submit">
							<input type="submit" name="ação" value="Enviar">
					</div><!--submit-->

					<div class="direitos">
					<h2><a href="#">Create a Page</a> for a celebrity, band or business.</h2>
					</div><!--direiros-->


			 </form>


			</div><!--abra-conta-->	
		</div>
		<div class="clear"></div>
	</div><!--center-->
</section>




	<section class="linguas">
		<div class="center">
			<div class="footer">
				<a  class="lingua-br" href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>

				<input type="submit" name="ação" value="+">

			</div><!--footer-->

			<div class="footer2">
				
				<a  href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a  href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a  href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				<a href="#">Portugues (BR)</a>
				
				<h2>Facebook@2020</h2>

			</div><!--footer-->





		</div><!--center-->
	</section>

				
		
</body>
</html>