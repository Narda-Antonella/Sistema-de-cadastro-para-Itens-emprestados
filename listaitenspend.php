<?php
		include "Cabecalho.php";
		include "conecta.php" ;
?>
			
			<header>
				<h2>Lista de Itens Pendentes</h2>
			</header>

			<section>
			  <?php
					include "menu.php";
				?>
	
			<article>
			
					<table border="1">
						
								<tr>
									<td>Nome</td>
									<td>Item</td>
								</tr>
								<?php
											include "conecta.php";
											
											$sql = "select id, nome, item  from cad_emprestimo";
											
											$res = mysqli_query($conn,$sql);
											if($res){
												
												while($row = mysqli_fetch_assoc ($res)) {
													echo " <tr>
																<td>".  $row['nome']  ."</td>
																<td>".  $row['item']  ."</td>
															</tr>	";
														}
												
											}
											
											
										
							?>
					</table>		
			</article>
		</section>
		
