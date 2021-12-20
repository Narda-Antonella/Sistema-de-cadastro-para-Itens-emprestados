<?php
		
	include "conecta.php";
	
	$id = $_POST["id"];
	$nome = $_POST["nome"];
    	$cpf = $_POST["cpf"];
	$telefone = $_POST["telefone"];
	$endereco = $_POST["endereco"];
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"] ;
	$genero = $_POST["genero"];
	
	if(empty($id)){
		
		$sql = "INSERT INTO cadastro_usuarios (nome, cpf, telefone, endereco, usuario, senha, genero) 
					VALUES 
				('$nome', '$cpf', '$telefone', '$endereco', '$usuario', '$senha', '$genero')";
		$res = mysqli_query($conn, $sql);		
		if($res){
			header("Location: index.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
		
?>
		
		
