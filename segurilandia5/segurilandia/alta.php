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
	
	if ($id == "" || $nombre == "") { 
		header("location:altacliente.php"); 
	} 
	else { 
		//Conexión a la Base de Datos
		$conexion = conectarse();
		mysql_select_db('prueba2', $conexion); 
		
		$query 	= "SELECT * FROM cliente WHERE id = '$id' AND nombre = '$nombre' AND apellido = '$apellido'"; 
		$query2 = "SELECT * FROM usuario WHERE id = '$id'";
		$consulta 		= mysql_query($query, $conexion);
		$consulta2 = mysql_query($query2, $conexion);	
		$cant	 	= mysql_num_rows($consulta); 
		$cant2	 	= mysql_num_rows($consulta2);
		$fila   = mysql_fetch_array($consulta);
		$fila2   = mysql_fetch_array($consulta2);
		if ($cant != 0 || $cant2 !=0) { //YA EXISTE
			echo "Error: Cliente repetido"; 
			header("location:altacliente.php"); 
		                }
		else {
			//Cambiar
			//"INSERT INTO USUARIO VALUES ('$realname','$pass','$rol','')"
			$queryalta2 = "INSERT INTO usuario VALUES ('$id', '$nombre', '$contrasenia')";
			$consultaalta2 = mysql_query($queryalta2, $conexion);
			
			
			$queryalta = "INSERT INTO cliente VALUES ('$id','$nombre','$apellido')";
			$consultaalta = mysql_query($queryalta, $conexion);
			
			if(!$consultaalta2 || !$consultaalta){
				echo 'Ingreso fallido';
							}
			else{
					echo 'Cliente insertado con exito';
					
					header("location:altacliente.php");
				}	
	} 

}
?>