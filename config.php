<?php 
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=hospital', 'root','');

	if (isset($_GET['delete'])) {
		// code...
		$id = (int)$_GET['delete'];
		$pdo->exec("DELETE FROM clientes WHERE id=$id");
	}
	
	if (isset($_POST['nome'])) {
			// code...
		$sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?,?)");
		$sql->execute(array($_POST['nome'],$_POST['email'],$_POST['contacto'],$_POST['morada']));
	}	

	$sql = $pdo->prepare("SELECT * FROM clientes");
 	$sql->execute();

 	$clientes = $sql->fetchAll();
 ?>