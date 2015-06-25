<?php
session_start();
if($_SESSION['log']!=1)
header("location:index2.php");
echo session_id();
?>
<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];

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
		
		$query 	= "SELECT * FROM cliente WHERE id = '$id' AND nombre = '$nombre'"; 
		$consulta 		= mysql_query($query, $conexion); 
		$cant	 	= mysql_num_rows($consulta); 
		$fila   = mysql_fetch_array($consulta);
		if ($cant != 0) { //YA EXISTE
			echo "Error: Cliente repetido"; 
			header("location:altacliente.php"); 
		                }
		else {
			//Cambiar
			//"INSERT INTO USUARIO VALUES ('$realname','$pass','$rol','')"
			$queryalta = "INSERT INTO CLIENTE VALUES ('$id', '$nombre')";
			$consultaalta = mysql_query($queryalta, $conexion);
			if(!$consultaalta){
				echo 'Ingreso fallido';
							}
			else{
					echo 'Cliente insertado con exito';
					
					header("location:altacliente.php");
				}	
	} 

}
?>