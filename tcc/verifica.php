<?php
include('cnx.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['login']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
		
        $email = $conn->real_escape_string($_POST['login']);
        $senha = $conn->real_escape_string($_POST['senha']);
		$criptografada = md5($senha);
			
        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$criptografada'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
			$_SESSION['email'] = $usuario['email'];
			$_SESSION['senha'] = $usuario['senha'];
			$_SESSION['descricao'] = $usuario['descricao'];
			$_SESSION['telefone'] = $usuario['telefone'];
			
            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
