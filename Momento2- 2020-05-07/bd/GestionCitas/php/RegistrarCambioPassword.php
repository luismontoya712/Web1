<?php
     
    $Id=($_POST['usuario']);
    $newPassword=($_POST['password1']);
  

    try
     {
        require_once 'conexion.php';
          $sql = " UPDATE usuarios SET Password=$newPassword  where id= '$Id'   ";
          $result=mysqli_query($conexion,$sql);
          if($result)
          {    
               
               echo'<script language="javascript">alert("Password Modificado ");window.location.href="../Index.php"</script>';         
          }    

     }
     catch(Exception $ex)
     {
        die('<script language="javascript">alert("Error en cambio de Acceso ");window.location.href="../frmApp/cambiarpassword.php"</script>');         
     }


?>