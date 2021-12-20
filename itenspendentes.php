<?php
		include "Cabecalho.php";
		include "conecta.php" ;
?>
			
			<header>
				<h2>Itens Pendentes</h2>
			</header>
									
			<section>
					<?php
						include "menu.php";
					?>
							
			<article>
					<form action="recebe itens pendentes.php" method="post">		
					<br/>
					
							<label for="nome"> Nome </label>
							<input type="text" id="text" name="nome"maxlength="50"> 
							<br/>	
							<label for="cpf"> CPF</label>
							<input type="number" id="number" name="cpf"maxlength="11"> 
							<br/>
							<input type="submit">
			

		
						</form>
					<a href="inicio.php">Voltar</a>	
			</article>
		</section>
		
			
<?php
		include "rodape.php";
?>
