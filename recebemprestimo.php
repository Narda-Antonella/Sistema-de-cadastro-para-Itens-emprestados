<?php
		
	include "conecta.php";
	
	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$item = $_POST["item"];
	$datinicio = $_POST["datinicio"];
	$quantidade = $_POST["quantidade"];
	$devolucao = $_POST["devolucao"];
	
	if (empty($id)){
	
		$sql = "INSERT INTO cad_emprestimo (nome, item, datinicio, quantidade, devolucao)
						VALUES
				('$nome', '$item', '$datinicio', '$quantidade', '$devolucao')";
		
		$res = mysqli_query($conn, $sql);
		
		if ($res) {
			header("Location: listaemprestimo.php");

		}	
		else {
			echo "erro ao inserir!";
		}
	
	}
	else{
		
		$sql = "UPDATE cad_emprestimo SET
						 nome = '$nome',
						 datinicio = '$datinicio',
						 quantidade = '$quantidade',
						 devolucao = '$devolucao'
					WHERE
						 id = $id";					

		$res = mysqli_query($conn, $sql);
					
		if($res){
			header("Location: listaemprestimo.php");
		}
		
		else{
			echo "ERRO AO ATUALIZAR!";
		}
	}
	
	
?>


			
					
							
