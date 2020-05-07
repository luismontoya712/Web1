
<?php

 $id=$_GET['id'];

 try
 { 
    require_once 'conexion.php';

    $sql = " DELETE FROM Citas WHERE Id= '$id' ";
    $result=mysqli_query($conexion,$sql);
    if($result)
        {
            echo'<script language="javascript">alert("Cita Eliminada Exitosamente ");window.location.href="../frmApp/consultarcitas.php"</script>';         
        }  

 }
 catch (Exception $ex)
 {
     
    die('<script language="javascript">alert("Error de Eliminacion de Cita");window.location.href="../frmApp/consultarcitas.php"</script>'); 

 }


 ?>