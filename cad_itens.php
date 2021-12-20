<?php
		include "Cabecalho.php";
		include "conecta.php";
		
		$id = "";
		$coditem = "";
		$quantidade = "";

		if (isset($_GET['id'])) {
			
			$id = $_GET['id'];
				
			$sql = "select * from cad_itens where id = $id";
				
			$res = mysqli_query($conn,$sql);
			
			$row = mysqli_fetch_assoc($res);
			$coditem = $row['coditem'];
			$quantidade = $row['quantidade'];
	}
?>		
			
			<header>
				<h2>LISTA DE ITENS DISPONIVEIS</h2>
			</header>
			
			<section>
				<?php
					include "menu.php";
					?>
	
			<article>
			<form action="recebecaditens.php" method="post">
			<br/>
				
				<input type="hidden" name="id" value="<?php echo $id; ?>"> <br/>
				<label for="coditem"> Produto </label>
					<input type="text" id="coditem" name="coditem"Value = "<?php echo $coditem;?>">
					<br/>
				<label for="quantidade"> Quantidade</label>
				
					<input type="number" id="quantidade" name="quantidade"Value = "<?php echo $quantidade;?>"> 
					<br/>
		

				<input type="submit">
			
			 </form>
		<a href="inicio.php">Voltar</a>	
			</article>
		</section>
		
				
<?php
		include "rodape.php";
?>
