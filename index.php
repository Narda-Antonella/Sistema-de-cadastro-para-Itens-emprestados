<!DOCTYPE html>
<html>
	<head>
			<title> Projeto das coisas Emprestadas - Tela inicial</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href ="tipo.css" rel="stylesheet"> 
	</head>
	<body>
			
			<header>
			  <h2>LOGIN </h2>
			</header>
			
		<div>
			
			<?php
			
						if(isset($_GET['erro'])){
							echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
						}
						
						if(isset($_GET['autentica'])){
							echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
						}
			
			?>
			
			 <form action="login.php" method="post">
				<br/>
				<label for="login"> Usuário</label>
				<input type="text" id="login" name="login"/> 
				<br/>
					
				<label for="senha"> Senha</label>
				<input type="password" id="senha" name="senha"/> 
				<br/>
				
				<input type="submit" value="Acessar">
		
			 </form>
			 <div>
			<p style="text-align:center"> Caso não tenha usuário cadastrado, <a href="cadastro_usuarios_index.php">cadastre-se aqui</a>.</p>
			 </div>
			
			
		</div>
			
		<footer>
			  <p> Projeto Fundamentos da Programação Web - Narda Antonella </p>
		</footer>
			
	</body>
</html>
