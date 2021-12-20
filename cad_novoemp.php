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
				
				$sql = "SELECT * FROM cad_novoempr where id = $id";
				
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
			
				<input type="hidden" name="id" value="<?php echo $nome; ?>" />
			
				<label for="nome">Usuário</label>
				<select name="nome">
					<option>Selecione</option>
					<?php
					
						$sql = "SELECT * FROM cadastro_usuarios";
						
						$res = mysqli_query($conn, $sql);
						
						if($res){
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<option value='".$row['id']."'>".$row['nome']."</option>";
								
							}
						}	
					?>
					</select>
				</br>
				<label for="item"> Item </label>
					<input type="text" id="item" name="item"Value = "<?php echo $item;?>"maxlength="30"> 
					<br/>
					<?php
					
						$sql = "SELECT * FROM cad_item";
						
						$res = mysqli_query($conn, $sql);
						
						if($res){
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<option value='".$row['id']."'>".$row['coditem']."</option>";
								
							}
								
						}			
					?>
				</select>									
				</br>
				<label for="datinicio">Data Inicial</label>
				<input type="date" name="datinicio" value="<?php echo $datinicio; ?>"><br/><br/>							
				<label for="quantidade"> Quantidade </label>
				<input type="number" id="quantidade" name="quantidade"Value = "<?php echo $quantidade;?>" maxlength="3"> 
				<br/>
				<label for="devolucao"> Devolução </label>
					<input type="date" id="devolucao" name="devolucao"Value = "<?php echo $devolucao;?>" > 
					<br/>
				
				<input type="submit" value="Novo Emprestimo">
						
			
			</form>
			<p>Para retornar para a página inicial, <a href="inicio.php">Clique Aqui</a></p></br>
			</article>
		</section>	
			
<?php
		include "rodape.php";
?>
