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
			header("Location: listausuario.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
		$sql = "UPDATE cadastro_usuarios SET
			nome = '$nome',
			cpf = '$cpf',
			telefone ='$telefone',
			endereco ='$endereco',
			usuario ='$usuario',
			senha ='$senha',
			genero ='$genero'
				WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		if($res){
			header("Location: listausuario.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
			
	}
		
?>
		
		
