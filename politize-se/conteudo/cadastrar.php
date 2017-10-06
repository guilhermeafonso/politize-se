<?php
	$host = "localhost";
    $user = "root";
    $pass = "";
    $db = "politizese";
    $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
    @mysql_select_db($db) or die(mysql_error());  
	$Nome = $_POST['Nome']; 
	$Sexo = $_POST['Sexo'];
	$Idade = $_POST['Idade'];
	$CorRaca = $_POST['CorRaca'];
	$sql = mysql_query("INSERT INTO bd(Nome,Sexo,Idade,CorRaca) VALUES ('$Nome','$Sexo','Idade','CorRaca')");
?>
  