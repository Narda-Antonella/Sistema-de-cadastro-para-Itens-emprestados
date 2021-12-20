
<?php
		
	include "conecta.php";
	
	$id = $_POST["id"];
	$coditem = $_POST["coditem"];
    	$quantidade = $_POST["quantidade"] ;
	
	if (empty($id)){
	
		$sql = "INSERT INTO cad_itens(coditem, quantidade)
						VALUES
				('$coditem', '$quantidade')";
		
		$res = mysqli_query($conn, $sql);
		
		if ($res) {
			header("Location: listaitens.php");

		}	
		else {
			echo "erro ao inserir!";
		}
	
	}
	else{
		
		$sql = "UPDATE cad_itens SET
					coditem = '$coditem',
					quantidade = '$quantidade'
				WHERE
					id = $id";					

		$res = mysqli_query($conn, $sql);
					
		if($res){
			header("Location: listaitens.php");
		}
		
		else{
			echo "ERRO AO ATUALIZAR!";
		}
	}

	
?>
