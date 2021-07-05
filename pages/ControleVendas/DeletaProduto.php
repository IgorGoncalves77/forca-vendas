<?php

include('ConectaBD.php');

$produtcodigo = $_GET['produtcodigo'];

$sql = "DELETE FROM produtos WHERE produtcodigo=?";

if ($stmt = mysqli_prepare($id_conexao, $sql)) {

	/* bind parametros for markers */
	mysqli_stmt_bind_param($stmt, 'i', $produtcodigo);


	/* executa query */
	if(mysqli_stmt_execute($stmt)){
		echo "Operação realizada com sucesso<br/>";
	}
	else{
		echo "Ocorreu um erro na operação<br/>";
		// mostra o erro do banco
		echo mysqli_error($id_conexao);
	}

	/* close statement */
	mysqli_stmt_close($stmt);
}
else {
	echo mysqli_error($id_conexao);
}
header('Location: Produtos.php');
?>
