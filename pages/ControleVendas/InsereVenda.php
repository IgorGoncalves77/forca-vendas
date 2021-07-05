<?php

include('ConectaBD.php');
date_default_timezone_set('America/Sao_Paulo');

$vendasclientcodigo	= $_POST['vendasclientcodigo'];
$vendasconpagcodigo	= $_POST['vendasconpagcodigo'];
$vendasdathor		= date('d/m/Y \à\s H:i:s');

$sql = "INSERT INTO vendas (vendasclientcodigo, vendasconpagcodigo, vendasdathor) VALUES (?, ?, ?)";

if ($stmt = mysqli_prepare($id_conexao, $sql)) {

	/* bind parametros for markers */
	mysqli_stmt_bind_param($stmt, 'iis', $vendasclientcodigo, $vendasconpagcodigo, $vendasdathor);

	/* executa query */
	if(mysqli_stmt_execute($stmt)){
		
		echo "Operação realizada com sucesso<br/>";

		$sql = "SELECT * FROM vendas WHERE vendascodigo = (SELECT MAX(vendascodigo) FROM vendas)";
		
		$query = mysqli_query($id_conexao, $sql);

		$row = mysqli_fetch_array($query);
		$vendascodigo       = $row['vendascodigo'];
	
		foreach ($_POST['vendasprodutcodigo'] as $item){
			
			$sql = "INSERT INTO vendasprodutos (venprovendascodigo, venproprodutcodigo) VALUES (?, ?)";

			if ($stmt = mysqli_prepare($id_conexao, $sql)) {

				/* bind parametros for markers */
				mysqli_stmt_bind_param($stmt, 'ii', $vendascodigo, $item);
			
				/* executa query */
				if(mysqli_stmt_execute($stmt)){

					echo "Operação realizada com sucesso<br/>";

				}	
			}
		}
		

			

	}
	else{
		echo "Ocorreu um erro na operação<br/>";
		// mostra o erro do banco
		echo mysqli_error($id_conexao);
	}

	/* close statement */
	mysqli_stmt_close($stmt);
}
header('Location: Vendas.php');

?>