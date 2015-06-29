
<?php
session_start();
if($_SESSION['log']!=1)
header("location:index2.php");
echo session_id();
?>
<?php
$id = $_POST['id'];

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
	
	if ($id == "") { 
		header("location:bajacliente.php"); 
	} 
	else { 
		//Conexión a la Base de Datos
		$conexion = conectarse();
		mysql_select_db('prueba2', $conexion); 
		//Delete From clientes Where nombre='Perico'
		$query 	= "SELECT * FROM cliente WHERE id = '$id'"; 
		$consulta 		= mysql_query($query, $conexion); 
		$cant	 	= mysql_num_rows($consulta); 
		$fila   = mysql_fetch_array($consulta);
		if ($cant == 0) { //NO ESTA EN LA BASE
			echo "Error: Usuario o Contraseña incorrectos"; 
			header("location:bajacliente.php"); 
		                }
		else {
			//BORRAR
			$queryborra = "DELETE FROM cliente WHERE id = '$id'";
			$queryborra2 = "DELETE FROM usuario WHERE id = '$id'";
			
			$consultaborra = mysql_query($queryborra, $conexion);
			$consultaborra2 = mysql_query($queryborra2, $conexion);
			if(!$consultaborra || !$consultaborra2){
				echo 'No se pudo borrar al cliente';
							}
			else{
					echo 'Cliente';
					echo $fila ['id'];
					echo 'eliminado';
					header("location:bajacliente.php");
				}	
		
	} 

}
?>