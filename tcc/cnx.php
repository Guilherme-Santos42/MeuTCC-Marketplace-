<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "banco";


	
$conn =mysqli_connect($host,$user,$password,$dbname);

if(!$conn){
	die("erro na conexão com banco".mysqli_connect_error());
}

?>