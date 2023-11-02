<?php
	require('config.php')	
?>	
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<style type="text/css">
		@import "css/estilo.css";
	</style>
</head>
<body>
	<section class="box">
		<div class="img-box"></div>
		<div class="form-box">
			<h2>Cadastrar-se</h2>
			<p>Quer acessar a lista? <a href="list.php">Acessar</a></p>
			<form method="post">
				<div class="input-group">
					<label>Nome Completo</label>
					<input type="text" id="nome" name="nome" placeholder="Insira seu nome completo">
				</div>
				<div class="input-group">
					<label>E-mail</label>
					<input type="email" id="email" name="email" placeholder="Insira seu E-mail">
				</div>
				<div class="input-group">
					<label>Telefone</label>
					<input type="tel" id="telefone" name="contacto"placeholder="Insira seu numero elefone">
				</div>
				<div class="input-group w50">
					<label>Morada</label>
					<input type="text" id="senha" name="morada" placeholder="Insira sua morada">
				</div>
				<div class="input-group">
					<input class="button"  type="submit" Value="Cadastrar">
				</div>
			</form>
		</div>
	</section>
</body>
</html>