<?php

include('cnx.php');
  
  
  
$descricao = $_POST['descricaocadastra'];
$nome =$_POST[ 'nomecadastra'];
$senha = $_POST['senhacadastra'];
$email = $_POST['emailcadastra'];
$ramo = $_POST['ramocadastra'];
$localiza = $_POST['localizacadastra'];
$telefone = $_POST['telefonecadastra'];

$criptografada = md5($senha);

  
$sql="INSERT INTO cadastro (nome,email,senha,descricao,telefone,localizacao,ramo) VALUES ('$nome','$email','$criptografada','$descricao','$telefone','$localiza','$ramo')";

if(mysqli_query($conn,$sql)){
echo "usuario cadastrado" ;

header('Location: cadastrado.php');

}
else{ 
echo "erro".mysqli_connect_error($conn);
};

?>