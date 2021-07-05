<?php

include('ConectaBD.php');

$usuaricodigo = $_GET['usuaricodigo'];

$sql = "DELETE FROM usuarios WHERE usuaricodigo=?";

if ($stmt = mysqli_prepare($id_conexao, $sql)) {

	/* bind parametros for markers */
	mysqli_stmt_bind_param($stmt, 'i', $usuaricodigo);


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
header('Location: Usuarios.php');
?>
