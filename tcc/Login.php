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

<div class="container" >
<div class="row">
  <div class="col-sm-6">
 

<center> <h2>Login</h2></center>
<form method="POST" action="verifica.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" name="login"  aria-describedby="emailHelp"  required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha"   required>
  </div>
 
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
  </div>



  <div class="col-sm-6">


<center> <h2 id="cadastro">Cadastre-se</h2></center>


<form method="POST" action="cadastra.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name = "emailcadastra"  aria-describedby="emailHelp"  required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name = "senhacadastra" required>
  </div>
   <div class="form-group">
    <label for="nome">Nome da empresa</label>
    <input type="text" class="form-control" name = "nomecadastra" aria-describedby="emailHelp" required>
    </div>
	<div class="form-group">
    <label for="nome">Telefone</label>
    <input type="text" class="form-control" name = "telefonecadastra" aria-describedby="emailHelp" required>
    </div>
   <div class="form-group">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="descricaocadastra" rows="3" required></textarea>
  </div>
  </div>
  
  
   <div class="row-4">
   
	<div class="form-group" >
    <label for="exampleFormControlSelect1">Localização</label>
    <select class="form-control" id="exampleFormControlSelect1"
	name="localizacadastra" >
      <option value="centro">Centro</option>
      <option  value="padre miguel">Padre Miguel</option>
      <option  value="bangu">Bangu</option>
      <option  value="jacarepagua">Jacarépagua</option>
      <option  value="barra">Barra</option>
    </select>
  </div>
  
  </div>
  
  <div class="row-4">
 <label for="exampleFormControlSelect1">Ramo</label>
    <select class="form-control" id="exampleFormControlSelect1"
	name="ramocadastra">
      <option>Costura</option>
      <option>Eletrodomésticos</option>
      <option>Informática</option>
      <option>Advocacia</option>
      <option>Administração</option>
    </select>
  </div>
	
 
 <br>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
</div>





<br>
</div>
</body>
</html>