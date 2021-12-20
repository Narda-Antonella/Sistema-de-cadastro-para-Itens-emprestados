<?php
		include "Cabecalho.php";
?>
			
			<header>
				<h2>Lista de itens</h2>
			</header>

			<section>
			  <?php
					include "menu.php";
				?>
	
			<article>
			
					<div>
							<a>Itens Disponiveis</a>
					</div>
					
					<table border="1">
						
								<tr>
									<td>ID</td>
									<td>Produto</td>
									<td>Quantidade</td>
									
								</tr>
								<?php
											include "conecta.php";
											
											$sql = "select id, coditem, quantidade from cad_itens";
											
											$res = mysqli_query($conn,$sql);
											if($res){
												
												while($row = mysqli_fetch_assoc ($res)) {
													echo " <tr>
																<td>".  $row['id']  ."</td>
																<td>".  $row['coditem']  ."</td>
																<td>".  $row['quantidade']  ."</td>
																
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
