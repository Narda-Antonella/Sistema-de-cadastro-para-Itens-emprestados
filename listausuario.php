<?php
		include "Cabecalho.php";
?>
			
			<header>
				<h2>Cadastro de Usuarios</h2>
			</header>

			<section>
			  <?php
					include "menu.php";
				?>
	
			<article>
			
					<div>
							<a href="cadastro_usuarios.php">Cadastra novo usuário</a>
					</div>
					
					<table border="1">
						
								<tr>
									<td>ID</td>
									<td>Nome</td>
									<td>CPF</td>
									<td> - </td>
									<td> - </td>
								</tr>
								<?php
											include "conecta.php";
											
											$sql = "select id, nome, cpf from cadastro_usuarios";
											
											$res = mysqli_query($conn,$sql);
											if($res){
												
												while($row = mysqli_fetch_assoc ($res)) {
													echo " <tr>
																<td>".  $row['id']  ."</td>
																<td>".  $row['nome']  ."</td>
																<td>".  $row['cpf']  ."</td>
																<td><a href='cadastro_usuarios.php?id=".  $row['id']  ." '>Editar</a</td>
																<td><a href='excluirusuario.php?id=". $row['id'] ." '>Excluir</a</td>
															</tr>	";
														}
												
											}
											
											
										
							?>
					</table>		
			</article>
		</section>
		
			
<?php
		include "rodape.php";
?>
