<?php
include "config.php";

$acao = $_POST["acao"];

$nome      = $_POST["nome"];
$email     = $_POST["email"];
$tel       = $_POST["tel"];
$interesse = $_POST["opcao"];
$mensagem  = $_POST["mensagem"];

//inserir
if ($acao == "enviar") {
    $sql = "INSERT INTO `clientes_dcf`(`nome_cliente`, `email_cliente`, `telefone_cliente`, `interesse_cliente`, `mensagem_cliente`) VALUES ('$nome', '$email', '$tel', '$interesse', '$mensagem')";
	
    $sqlInsert = mysqli_query($conexao, $sql);
	
	header("Location:../contato.php?success");	
	}
	 else {
	@header("Location:../contato.php?error");
	}

?>