<?php

include('ConectaBD.php');
date_default_timezone_set('America/Sao_Paulo');

$conpagdescri	    = $_POST['conpagdescri'];
$conpagdathor		= date('d/m/Y \à\s H:i:s');

$sql = "INSERT INTO condicoespagamento (conpagdescri, conpagdathor) VALUES (?, ?)";

if ($stmt = mysqli_prepare($id_conexao, $sql)) {

	/* bind parametros for markers */
	mysqli_stmt_bind_param($stmt, 'ss', $conpagdescri, $conpagdathor);

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
header('Location: CondicoesPagamento.php');
?>