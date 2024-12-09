<?php

session_start();
include_once 'cnx.php';


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
  <a href="index.php">Inicio</a>
  <a href="catalogo.php">Catalogo</a>
  <a href="Login.php">Cadastre-se</a>
</ul>
</div>




<title>Marketplace</title>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>


<br>
<br>
<head>
	

		<meta charset="utf-8">
		<title>Sistema de Busca sem Refresh</title>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptpersonalizado.js"></script>
	</head>
	<body>
		<center>
		
		<h1>Pesquisar Fornecedores</h1><br>
		

    <div class="col-3">
	<br>
		<form method="POST" id="form-pesquisa" action="">
   <input type="text" name="pesquisa" id="pesquisa" class="form-control" id="exampleFormControlInput1" placeholder="Insira um ramo, localização ou nome!">
    </div>
			
	
	<br><br><br>	
		
		<ul class="resultado">
		
		</ul>
	</body>
</html>