<?php

if((!isset($_POST['NombresLogin'])) ||  (!isset($_POST['UsuarioLogin'])) || (!isset($_POST['PasswordLogin'])) || (!isset($_POST['TipoLogin'])))
{
    die("Error de Datos");
}
   
	$nombre=$_POST['NombresLogin'];
    $usuario=$_POST['UsuarioLogin'];
    $pass=$_POST['PasswordLogin'];
    $tipo=$_POST['TipoLogin'];
 
    
    try
    {
        require_once 'conexion.php';

        $UsuarioExistente = "SELECT * FROM Usuarios WHERE usuario = '$usuario' ";
        $result=mysqli_query($conexion,$UsuarioExistente);
        if ($result->num_rows > 0) 
        {
            die('<script language="javascript">alert("El Usuario Ingresado ya Existe ");window.location.href="../Index.php"</script>');
        }
        else
        {
            $sql = " INSERT INTO usuarios (Nombres,Usuario,Password,Tipo) VALUES ('{$nombre}','{$usuario}','{$pass}','{$tipo}') ";        
            $result=mysqli_query($conexion,$sql);
            if($result)
            {
                 echo'<script language="javascript">alert("su Usuario se ha Creado, Ya puede Ingresar ");window.location.href="../Index.php"</script>';         
            }  
        }     
    }
    catch (Exception $ex)
    {
        die('<script language="javascript">alert("Error de Regitro de Usuario");window.location.href="../Index.php"</script>'); 
    }  
   
?>