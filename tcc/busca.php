<?php
	//Incluir a conexão com banco de dados
	include_once('cnx.php');
	
	//Recuperar o valor da palavra
	
	$cursos = $_POST['palavra'];


	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$cursos = "SELECT * FROM cadastro WHERE CONCAT(nome,ramo,localizacao) LIKE '%$cursos%'";
	$resultado_cursos = mysqli_query($conn, $cursos);
	
	if(mysqli_num_rows($resultado_cursos) <= 0){
		echo "<center><h5>Não há dados.</h5>";
	}else{
		
		echo" <table class='table col-6'>
		 <thead class='thead-dark'>
  
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>Nome</th>
      <th scope='col'>Descricao</th>
      <th scope='col'>Email</th>
	  <th scope='col'>Ramo</th>
	  <th scope='col'>Telefone</th>
	  <th scope='col'>Localização</th>
    </tr>
  </thead>
  <tbody>
    <tr>" ;
		
		
while($rows = mysqli_fetch_assoc($resultado_cursos)){
			
echo" <tr>
			<td>".$rows['id']."</td>
			<td>".$rows['nome']."</td>
			<td>".$rows['descricao']."</td>
			<td>".$rows['email']."</td>
			<td>".$rows['ramo']."</td>
			<td>".$rows['telefone']."</td>
			<td>".$rows['localizacao']."</td>
			
</tr>";



  }
  
  
	}
?>