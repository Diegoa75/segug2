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
	
	$id = $_POST['id'];
    $rol = $_POST['rol'];

	function conectarse() {
		if(!($conexion = mysql_connect("localhost", "root", ""))) {
			echo "Error al conectarse a la Base de datos";
			exit();
		}
		if(!mysql_select_db("prueba2", $conexion)) {
			echo "Error al seleccionar a la Base de datos";
			exit();
		}
		return $conexion;
	}
	
	//session_start();
	
	if ($id == "" || $rol == "") { 
		header("location:index2.php"); 
	} 
	else { 
		//Conexión a la Base de Datos
		$conexion = conectarse();
		mysql_select_db("prueba", $conexion); 
		$query 	= "SELECT * FROM usuario WHERE id = '$id' AND rol = '$rol'"; 
		$consulta 		= mysql_query($query, $conexion); 
		$cant	 	= mysql_num_rows($consulta); 
		$fila   = mysql_fetch_array($consulta);
		if ($cant == 0) { //NO ESTA EN LA BASE
			echo "Error: Usuario o Contraseña incorrectos"; 
			header("location:index2.php"); 
		                }
		else {
			//Si ingresa correctamente guardo datos de la Sesión del usuario
			/*$_SESSION['s_id'] = $v_id; 
			$_SESSION['s_rol'] = $v_rol; 
			$_SESSION['s_aute'] = 'Y'; */
			
			
		
			if ($fila['id'] == '1'){
				session_start();
				
				$_SESSION['log']=1;
				header("location:administrador.php");
			} 
			else
			{
			if ($fila['id'] == '2'){
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