<?php

	include "conecta.php";
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM cad_emprestimo WHERE id = $id";
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: listaemprestimo.php");

?>	