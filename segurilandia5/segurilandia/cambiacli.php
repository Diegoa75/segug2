<!--RESTRICCION: NO MODIFICA EL ID-->
<?php
session_start();
if($_SESSION['log']!=1)
header("location:index2.php");
echo session_id();
?>
<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasenia = $_POST['contrasenia'];

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
	
	if ($id == "" || $nombre == "" || $apellido == "" || $contrasenia == "") { 
		header("location:modificacliente.php"); 
	} 
	else { 
		//Conexión a la Base de Datos
		$conexion = conectarse();
		mysql_select_db('prueba2', $conexion); 
		
		$query 	= "SELECT * FROM cliente WHERE id = '$id'"; 
		$consulta 		= mysql_query($query, $conexion); 
		$cant	 	= mysql_num_rows($consulta); 
		$fila   = mysql_fetch_array($consulta);
		if ($cant == 0) { //NO ESTA EN LA BASE
			echo "Error: Usuario o Contraseña incorrectos"; 
			header("location:modificacliente.php"); 
		                }
		else {
			//Cambiar
			//UPDATE `cliente` SET `id`=[value-1],`nombre`=[value-2] WHERE 1
			$querycambia = "UPDATE cliente SET nombre= '$nombre', apellido = '$apellido' WHERE id = '$id'";
			$querycambia2 = "UPDATE usuario SET rol = 'cliente', contrasenia = '$contrasenia' WHERE id = '$id'";
			$consultacambia = mysql_query($querycambia, $conexion);
			$consultacambia2 = mysql_query($querycambia2, $conexion);
			
			if(!$consultacambia || !$consultacambia2){
				echo 'No se pudo cambiar el nombre';
							}
			else{
					echo 'Cliente';
					echo $fila ['id'];
					echo 'eliminado';
					header("location:modificacliente.php");
				}	
	} 

}
?>