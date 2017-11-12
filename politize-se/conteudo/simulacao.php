<?php
			$host = "localhost";
		    $user = "root";
		    $pass = "";
		    $db = "politizese";
		    $Candidato = $_POST['Candidato'];
		    $id = $_POST['id'];
		    $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
		    @mysql_select_db($db) or die(mysql_error());  
		    $sqrl = mysql_query("UPDATE bd set Candidato ='$Candidato' WHERE id = '$id'");
		?>