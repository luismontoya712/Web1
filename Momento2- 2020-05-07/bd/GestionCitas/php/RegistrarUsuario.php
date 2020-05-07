<?php

if((!isset($_POST['idNombre'])) ||  (!isset($_POST['idUsuario'])) || (!isset($_POST['idPassword'])) || (!isset($_POST['idTipo'])))
{
    die("Error de Datos");
}
   
	$nombre=$_POST['idNombre'];
    $usuario=$_POST['idUsuario'];
    $pass=$_POST['idPassword'];
    $tipo=$_POST['idTipo'];
 
    
    try
    {
        require_once 'conexion.php';

        $UsuarioExistente = "SELECT * FROM Usuarios WHERE usuario = '$usuario' ";
        $result=mysqli_query($conexion,$UsuarioExistente);
        if ($result->num_rows > 0) 
        {
            die('<script language="javascript">alert("El Usuario Ingresado ya Existe ");window.location.href="../frmApp/crearusuario.php"</script>');
        }
        else
        {
            $sql = " INSERT INTO usuarios (Nombres,Usuario,Password,Tipo) VALUES ('{$nombre}','{$usuario}','{$pass}','{$tipo}') ";        
            $result=mysqli_query($conexion,$sql);
            if($result)
            {
                 echo'<script language="javascript">alert("Registro Realizado ");window.location.href="../frmApp/crearusuario.php"</script>';         
            }  
        }     
    }
    catch (Exception $ex)
    {
        die('<script language="javascript">alert("Error de Regitro de Usuario");window.location.href="../frmApp/crearusuario.php"</script>'); 
    }  
   
?>