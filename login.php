<?php

	$login = $_POST["login"];
	$senha = $_POST["senha"];

	include "conecta.php";
	
	$sql = "SELECT * FROM cadastro_usuarios WHERE usuario = '$login' AND senha = '$senha'";
	
	$res = mysqli_query($conn, $sql);
	
	//Obtém QTDE de registros encontrados
	$qtdeRegistros = mysqli_num_rows($res);
	//Encontrou login e senha compatíveis
	if($qtdeRegistros >= 0){
		//Inicia a sessão
		session_start();
		//Obtém dados do usuário
		$row = mysqli_fetch_assoc($res);
		//Armazena informaçoes do usuário na Sessão
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];
		
		header("Location: inicio.php");
	}
	else{
		header("Location: inicio.php");
	}

		
?>