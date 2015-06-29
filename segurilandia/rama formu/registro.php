<?php
	$realname = $_POST['realname'];
	rol$      = $_POST['rol'];
	$pass     = $_POST['pass'];
	$rpass    = $_POST['rpass'];
	$reqlen   = strlen ($realname) * strlen ($pass) * strlen ($rpass);    
	
	if (reqlen > 0){
		if ($pass === $rpass){
			require("connect_db.php");
			$pass = md5($pass);
			mysql_query("INSERT INTO USUARIO VALUES ('$realname','$pass','$rol','')");
			mysql_close($link);
			echo 'Se ha registrado de manera exitosa';
				
		}else {
			echo 'Verifique que las contraseñas ingresadas sean iguales.';
		}	
	}else {
		echo 'Por favor, complete todos los campos obligatorios';
	 
	}
?>