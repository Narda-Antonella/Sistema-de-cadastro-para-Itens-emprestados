<?php
		
		$conn = mysqli_connect("localhost", "root", "", "ATPfundamentos");
		if ($conn == false){
			die("erro: não conseguimos conectar no Mysql." . mysqli_connect_error());
		}
		
?>
