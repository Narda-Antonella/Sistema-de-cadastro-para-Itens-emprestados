<?php
		include "Cabecalho.php";
		include "conecta.php" ;
		
		$id = "";
		$nome = "";
		$cpf = "";
		$telefone = "";
		$endereco = "";
		$genero = "";
		$usuario = "";
		$senha = "";

		if (isset($_GET['id'])) {
			
				$id = $_GET['id'];
				
				$sql = "SELECT * FROM cadastro_usuarios where id = $id";
				
				$res = mysqli_query($conn, $sql);
				
				$row = mysqli_fetch_assoc($res);
				
				$nome = $row["nome"];
				$cpf = $row["cpf"];
				$telefone =$row["telefone"];
				$endereco = $row["endereco"];
				$genero = $row["genero"];
				$usuario = $row["usuario"];
				$senha = $row["senha"];
				
		}
?>
			
			<header>
				<h2>Cadastro de Usuarios</h2>
			</header>

			<section>
	
			<article>
					<form action="recebeusuario_index.php" method="post">		
					<br/>

							<input type="hidden" name="id" value="<?php echo $id; ?>"> <br/>
							<label for="nome"> Nome</label>
							<input type="text" id="nome" name="nome"maxlength="50"> 
							<br/>
							
							<label for="cpf"> CPF</label>
							<input type="text" id="number" name="cpf" Value = "<?php echo $cpf;?>" maxlength="11"> 
							<br/>
							
							<label for="telefone"> Telefone</label>
							<input type="number" id="phone" name="telefone" Value = "<?php echo $telefone;?>"maxlength="15"> 
							<br/>
							
							<label for="endereco"> Endereço</label>
							<input type="text" id="endereco" name="endereco" Value = "<?php echo $endereco;?>"maxlength="50"> 
							<br/>
							
							<label for="usuario"> Usuário</label>
							<input type="text" id="login" name="usuario" Value = "<?php echo $usuario;?>" maxlength="10"> 
							<br/>
							<label for="senha"> Senha</label>
							<input type="password" id="senha" name="senha" Value = "<?php echo $senha;?>" maxlength="32"> 
							<br/>
								
							<label for="genero"> Gênero</label>
								<select name="genero">
									<option value="M" <?php if($genero=='M'){echo "selected";}?> >Masculino</option>
									<option value="F" <?php if($genero=='F'){echo "selected";}?> >Feminino</option>
									</select>
								
								<input type="submit" value="Cadastrar">	

		
					</form>
					<a href="inicio.php">Voltar</a>	
			</article>
		</section>
		
			
<?php
		include "rodape.php";
?>
