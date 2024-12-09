<?php
session_start();
$usuario = $_SESSION['id'] ;



$nome_campo = $_POST['nome_campo'];
$senha_campo = $_POST['senha_campo'];
$email_campo = $_POST['email_campo'];
$descricao_campo = $_POST['descricao_campo'];
$telefone_campo = $_POST['telefone_campo'];

$criptografadas = md5($senha_campo);
include 'cnx.php';

	$result_usuario = "UPDATE cadastro SET nome='$nome_campo',senha='$criptografadas',email='$email_campo',descricao='$descricao_campo',telefone='$telefone_campo'   WHERE id = $usuario";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
?>