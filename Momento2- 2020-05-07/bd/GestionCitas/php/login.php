<?php

    session_start();
    

    require_once 'conexion.php';

	$user=$_POST['user'];
	$pass=$_POST["password"];
	
	$sql="Select tipo  From usuarios Where usuario='".$user."' AND password='".$pass."'";
    $result=mysqli_query($conexion,$sql)or die("no se Ejecuto la consulta");
	if($datos=mysqli_fetch_array($result))	{
		
		if($datos["tipo"]=="Admin")
		{
			header("Location: ../frmApp/Admin.php");
		}
		else 
		{
			header("Location: ../frmApp/AdminUsuario.php");
		}		
		
	}		
	else
	{			
		mysqli_close($conexion);			
		echo'<script language="javascript">alert("Error de Autenticacion");window.location.href="../index.php"</script>'; 
	}

?>