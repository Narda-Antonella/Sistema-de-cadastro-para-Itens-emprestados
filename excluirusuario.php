<?php

	include "conecta.php";
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM cadastro_usuarios WHERE id = $id";
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: listausuario.php");

?>	