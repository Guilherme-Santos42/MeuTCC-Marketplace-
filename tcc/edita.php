 <?php
session_start();
include_once 'cnx.php';

$usuario = $_SESSION['id'] ;
$nome = $_SESSION['nome'] ;
$email = $_SESSION['email'] ;
$senha = $_SESSION['senha'] ;
$descricao = $_SESSION['descricao'] ;
$telefone = $_SESSION['telefone'] ;

?>


<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

  
<div class="navbar">

<img src="logo.jpg" style="height: 100px; width: 320px;" >
  <ul>
  <a href="carosel.php">Inicio</a>
  <a href="#">Catalogo</a>
  <a href="Login.php">Login/Cadastre-se</a>
</ul>
</div>




<title>Marketplace</title>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>


<br>
<br>

<div class="col-sm-3">

<form method="POST" action="alteracao.php">
<div class="form-group">
	Nome: <input type="text" class="form-control" value=" <?php echo $nome ?>" name="nome_campo"><br><br>
	Email: <input type="text"class="form-control" value=" <?php echo $email ?>" name="email_campo"><br><br>
	Senha: <input type="text"class="form-control" value=" <?php echo "*****" ?>" name="senha_campo"><br><br>
	Descricao: <input type="text" class="form-control" value=" <?php echo $descricao ?>" name="descricao_campo"><br><br>
	Telefone: <input type="text" class="form-control" value=" <?php echo $telefone ?>" name="telefone_campo"><br><br>
</div>	
	<input type="submit" value="Editar">
</form>
</div>



<br>
</div>
</body>
</html>
<html>

</html>