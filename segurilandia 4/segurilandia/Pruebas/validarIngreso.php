
<?php
/*Valido datos del usuario, si exite en la Base de Datos guardo esos datos 
en la Sesion (para verificar en siguientes paginas que el usuario este autenticado) 
Si es usuario valido o registrado ok --> ingresoBusqueda
Si es administrador					 --> mostrarDetalles
*/
 
 
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
	
	session_start();
	
	if ($v_user == "" || $v_pass == "") { 
		header("Location: ../index2.php"); 
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
			header("Location: ../index2.php"); 
		                }
		else {
			//Si ingresa correctamente guardo datos de la Sesión del usuario
			$_SESSION['s_id'] = $v_id; 
			$_SESSION['s_rol'] = $v_rol; 
			$_SESSION['s_aute'] = 'Y'; 
		
			if ($registro['id'] == '1'){
				header("Location: administrador.php");
			} 
			else
			{
			if ($registro['id'] == '2'){
				header("Location: cliente.php");
			
			else  {
				  header("Location: monitor.php"); 
			}
		}
	} 
}
?> 

