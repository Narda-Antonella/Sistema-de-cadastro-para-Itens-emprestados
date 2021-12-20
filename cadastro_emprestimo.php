<?php
		include "Cabecalho.php";
		include "conecta.php" ;
		
		$id = "";
		$nome = "";
		$item = "";
		$datinico = "";
		$quantidade = "";
		$devolucao = "";

		if (isset($_GET['id'])) {
			
				$id = $_GET['id'];
				
				$sql = "SELECT * FROM cad_emprestimo where id = $id";
				
				$res = mysqli_query($conn, $sql);
				
				$row = mysqli_fetch_assoc($res);
				
				$nome = $row["nome"];
				$item = $row["item"];
				$datinicio = $row["datinicio"];
				$quantidade = $row["quantidade"];
				$devolucao = $row["devolucao"];
				
		}
?>
			
			<header>
				<h2>Empréstimo</h2>
			</header>
			
			<section>
			  <?php
					include "menu.php";
				?>
	
			<article>
			<form action="recebemprestimo.php" method="post">
			<br/>
				<input type="hidden" name="id" value="<?php echo $id; ?>"> <br/>
				<label for="nome"> Nome</label>
					<input type="text" id="nome" name="nome"Value = "<?php echo $nome;?>"maxlength="50"> 
					<br/>
					
				<label for="item"> Item </label>
					<input type="text" id="item" name="item"Value = "<?php echo $item;?>"maxlength="15"> 
					<br/>
					
				<label for="datinicio"> Data de incio </label>
					<input type="date" id="datinicio" name="datinicio"Value = "<?php echo $datinicio;?>" >
					<br/>
					
				<label for="quantidade"> Quantidade </label>
					<input type="number" id="quantidade" name="quantidade"Value = "<?php echo $quantidade;?>" maxlength="3"> 
					<br/>
				
				<label for="devolucao"> Devolução </label>
					<input type="date" id="devolucao" name="devolucao"Value = "<?php echo $devolucao;?>" > 
					<br/>

				<input type="submit">
			
			</form>
			</article>
		</section>	
			
<?php
		include "rodape.php";
?>
