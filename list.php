<?php 
	require_once('config.php')
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		@import "bootstrap/css/bootstrap.min.css";
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			text-decoration: none;

		}
		form div.container{
			width: 100%;
			height: 200px;
		}
		.inputbox{
			width: 10%;
			align-items: center;
		}
		input{
			width: 100%;
			height: 30px;
		}
		a{
			width: 80px;
			height: 50px;
			background-color: dodgerblue;
			padding: 10px;
			margin: 10px;
			color: white;
		}
		thead{
			background-color: #ff008a;
			color: white;
			font-size: 25px;
		}
		th{
			margin: 15px;
			padding: 15px;
			font-size: 25px;
		}
	</style>
</head>
<body>
<section>
 <table >
 	<thead>
 		<tr>
 			<th>Id</th>
 			<th>Nome</th>
 			<th>Email</th>
 			<th>Contacto</th>
 			<th>Morada</th>
 			<th>Ações</th>
 		</tr>
 	</thead>
 	<tbody>
  <?php 
 	foreach ($clientes as $key => $value) {
 		echo "<tr>";
 		echo "<th>".$value['id'];
 		echo "<th>".$value['nome'];
 		echo "<th>".$value['email'];
 		echo "<th>".$value['contacto'];
 		echo "<th>".$value['morada'];
 		echo "<th>".'<a href="?delete='.$value['id'].'">Eliminar</a>';
 		echo "</tr>";
 	}
  ?>
 	</tbody>
 </table>

</section>
<br><br>
<div>
	 <a href="index.php">Voltar</a>
</div>

	<script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
