<?php
		include "Cabecalho.php";
?>
			
			<header>
				<h2>Cadastro de Emprestimo</h2>
			</header>

			<section>
			  <?php
					include "menu.php";
				?>
	
			<article>
			
					<div>
							<a href="cadastro_emprestimo.php">Cadastro de Emprestimo</a>
					</div>
					
					<table border="1">
						
								<tr>
									<td>ID</td>
									<td>Nome</td>
									<td>Item</td>
									<td>Data de inicio</td>
									<td>Devolução</td>
									<td> - </td>
									<td> - </td>
								</tr>
								<?php
								
				
								
											include "conecta.php";
											
											$sql = "select id, nome, item, datinicio, devolucao from cad_emprestimo";
											
												$res = mysqli_query($conn,$sql);
												if($res){
													
													while($row = mysqli_fetch_assoc ($res)) {
														echo " <tr>
																	<td>".  $row['id']  ."</td>
																	<td>".  $row['nome']  ."</td>
																	<td>".  $row['item']  ."</td>
																	<td>".  $row['datinicio']  ."</td>
																	<td>".  $row['devolucao']  ."</td>
																	<td><a href='cadastro_emprestimo.php?id=".  $row['id']  ." '>Editar</a</td>
																	<td><a href='excluiemprestimo.php?id=".  $row['id']  ." '>Excluir</a</td>
																</tr>	";
														}
												
											}
											
											
										
							?>
					</table>
						</br>
						<p> cadastre um novo emprestimo, <a href="cad_novoemp.php">Aqui</a></p></br>
			</article>
		</section>
		
			
<?php
		include "rodape.php";
?>
