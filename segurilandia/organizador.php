<?php
$login = $_POST['login'];
$clave = $_POST['clave'];
//consultar

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
	}
?>