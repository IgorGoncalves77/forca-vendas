<?php

include('ConectaBD.php');
date_default_timezone_set('America/Sao_Paulo');

$clientnome     = $_POST['clientnome'];
$clientaniver	= $_POST['clientaniver'];
$clientfisjur	= $_POST['clientfisjur'];
$clientsexo	    = $_POST['clientsexo'];
$clienttelef	= $_POST['clienttelef'];
$clientcel	    = $_POST['clientcel'];
$clientemail	= $_POST['clientemail'];
$clientendere	= $_POST['clientendere'];
$clientnumero	= $_POST['clientnumero'];
$clientbairro	= $_POST['clientbairro'];
$clientcomple	= $_POST['clientcomple'];
$clientuf	    = $_POST['clientuf'];
$clientcidade	= $_POST['clientcidade'];
$clientdathor	= date('d/m/Y \à\s H:i:s');

$sql = "INSERT INTO clientes (clientnome, clientaniver, clientfisjur, clientsexo, clienttelef,
clientcel, clientemail, clientendere, clientnumero, clientbairro, clientcomple, clientuf, clientcidade, clientdathor) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

if ($stmt = mysqli_prepare($id_conexao, $sql)) {

	/* bind parametros for markers */
    mysqli_stmt_bind_param($stmt, 'ssssssssssssss', $clientnome, $clientaniver, $clientfisjur, $clientsexo, $clienttelef,
    $clientcel, $clientemail, $clientendere, $clientnumero, $clientbairro, $clientcomple, $clientuf, $clientcidade, $clientdathor);

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
header('Location: Clientes.php');
?>