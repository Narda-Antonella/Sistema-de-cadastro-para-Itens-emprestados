<?php

	include "conecta.php";
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM cad_itens WHERE id = $id";
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: listaitenspend.php");

?>	