<?php
/*$login = $_POST['login'];
$clave = $_POST['clave'];
consultar

if($clave=="administrador")
	{session_start();
	$_SESSION['log']=1;
	header("location:administrador.php");
    }
else{	
if($clave=="monitor")
	{session_start();
	$_SESSION['log']=1;
	header("location:monitor.php");
    } 
else{	
if($clave=="cliente")
	{session_start();
	$_SESSION['log']=1;
	header("location:cliente.php");
    } 
 else{
		header("location:index2.php");
		}
	}
	}*/
	
	$v_id = $_POST['id'];
    $v_rol = $_POST['rol'];

	function conectarse() {
		if(!($id = mysql_connect("localhost", "root", ""))) {
			echo "Error al conectarse a la Base de datos";
			exit();
		}
		if(!mysql_select_db("prueba", $id)) {
			echo "Error al seleccionar a la Base de datos";
			exit();
		}
		return $id;
	}
	
	//session_start();
	
	if ($v_id == "" || $v_rol == "") { 
		header("location:index2.php"); 
	} 
	else { 
		//Conexión a la Base de Datos
		$con = conectarse();
		mysql_select_db("prueba", $id); 
		$consulta 	= "SELECT * FROM usuario WHERE id = '$v_id' AND rol = '$v_rol'"; 
		$datos 		= mysql_query($consulta, $con); 
		$cant	 	= mysql_num_rows($datos); 
		$registro   = mysql_fetch_array($datos);
		if ($cant == 0) { 
			echo "Error: Usuario o Contraseña incorrectos"; 
			header("location:index2.php"); 
		                }
		else {
			//Si ingresa correctamente guardo datos de la Sesión del usuario
			$_SESSION['s_id'] = $v_id; 
			$_SESSION['s_rol'] = $v_rol; 
			$_SESSION['s_aute'] = 'Y'; 
		
			if ($registro['id'] == '1'){
				session_start();
				$_SESSION['log']=1;
				header("location:administrador.php");
			} 
			else
			{
			if ($registro['id'] == '2'){
				session_start();
				$_SESSION['log']=1;
				header("location:cliente.php");}
			
			else  {
				  session_start();
				$_SESSION['log']=1;
				header("location:monitor.php"); 
			}
		}
	} 
}
?>