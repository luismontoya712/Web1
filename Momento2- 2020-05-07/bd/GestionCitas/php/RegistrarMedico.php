<?php

if((!isset($_POST['idNombre'])) || (!isset($_POST['idTipo'])) || (!isset($_POST['idDocumento']) ))
{
    die("Error de Datos");
}
   
    $nombre=$_POST['idNombre'];
    $documento=$_POST['idDocumento'];
    $tipo=$_POST['idTipo'];
 
    
    try
    {
        require_once 'conexion.php';

        $MedicoExistente = "SELECT * FROM Medico WHERE Documento = '$documento' ";
        $result=mysqli_query($conexion,$MedicoExistente);
        if ($result->num_rows > 0) 
        {
            die('<script language="javascript">alert("El Medico Ingresado ya Existe ");window.location.href="../frmApp/crearmedico.php"</script>');
        }
        else
        {
            $sql = " INSERT INTO Medico (Documento,Nombres,Tipo) VALUES ('{$documento}','{$nombre}','{$tipo}') ";        
            $result=mysqli_query($conexion,$sql);
            if($result)
            {
                 echo'<script language="javascript">alert("Registro Realizado ");window.location.href="../frmApp/crearmedico.php"</script>';         
            }  
        }     
    }
    catch (Exception $ex)
    {
        die('<script language="javascript">alert("Error de Regitro de Medico");window.location.href="../frmApp/crearmedico.php"</script>'); 
    }  
   
?>