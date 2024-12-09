<?php

include('protect.php');

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
  <a href="painel.php">Inicio</a>
  <a href="catalogo.php">Catalogo</a>
  <a href="edita.php">Editar</a> 
  <a href="logout.php">Sair</a>
</ul>
</div>
	



<title>Marketplace</title>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>




<div id="carouselExampleIndicators"   class="carousel carousel-fade  slide" data-bs-ride="carousel" interval="5">

   <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
         aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
         aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
         aria-label="Slide 3"></button>
   </div>

   <div class="carousel-inner">
      
      <div class="carousel-item active card"> <!-- add .card here -->

         <div class="card-img-overlay">
		 <br>
		 <br>
            <CENTER><H1 style="font-size: 60px" >Seja muito bem vindo <br>ao espaço de fornecedores</H1><CENTER>
			<br><br>
			<p style="font-size: 40px"><?php echo $_SESSION['nome']; ?><br> </p> 
			<br>
			
         </div>

         <img src="imagem6.jpg" style="height: 700px; width: 700px"; class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item card"> <!-- add .card here -->

         <div class="card-img-overlay">
          
		  <br>
		  <br>
		  <CENTER><H1 style="font-size: 60px" > Seja um fornecedor em nossa plataforma <br>Hoje mesmo!</H1><CENTER>
			<br><br>
			<p style="font-size: 40px">Conheça a ferramenta capaz de promover<br> e gerir estratégias de procura!</p> 
			<br>
			<a href="http://127.0.0.1/tcc/Login.php" class="btn btn-primary btn-lg">Cadastre-se!</a>
         </div>

         <img src="imagem13.jpg" style="height: 700px; width: 700px" class="d-block w-100" alt="1">
      </div>

      <div class="carousel-item card"> <!-- add .card here -->

         <div class="card-img-overlay">
		 <br><br>
		 <br><br>
		 <br><br>
          <CENTER><p style="font-size: 60px" > "Seus sonhos não precisam de plateia, <br> eles só precisam de você."</p><CENTER>
			<br><br>
			
			
			
         </div>

         <img src="imagem12.jpg" style="height: 700px; width: 700px" class="d-block w-100" alt="2">
		 </div>
		 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
      
   </div>
</div>



<br>
<br>

<br>
<div id="pq">
<div class="container">

<div class="row">

    <div class="col-6">
	<br>
	<center> <h2 id="cadastro">Por que o Marketplace?</h2></center><br><br>
	<h3>Nós Conectamos e geramos parcerias! </h3>
	  <h5> O site marketplace une diversos interesses em um único lugar! Assim é possível tornar o mundo um lugar mais acessível, onde qualquer um consegue usurfruir de serviços de qualidade.</h5>
	  <h5>Através da plataforma é possível diminuir as distâncias, facilitar o dia a dia de qualquer produtor. O marketplace obtém destaque por ser simples e possuir o necessário para começar, sem complicações!  </h5><center>
	  <center>
    </div>
	
   
	
    <div class="col-6">
	<center><img src="conecta.png" width="500px">
	  </center>
    </div>
	
  </div>


<br>
</div>
</div>
</body>
</html>

 
    


    
