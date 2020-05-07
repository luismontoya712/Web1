<?php
if((!isset($_POST['idNombre'])) ||  (!isset($_POST['idApellido'])) || (!isset($_POST['idDocumento'])) || 
   (!isset($_POST['idFechaNac'])) || (!isset($_POST['IdCiudad'])) || (!isset($_POST['idBarrio'])) || 
   (!isset($_POST['idDireccion'])) || (!isset($_POST['idTelefono'])) || (!isset($_POST['FechaCita'])) ||
   (!isset($_POST['idMedico'])))
{
    die("Error de Datos");
}

	$nombre=$_POST['idNombre'];
    $apellido=$_POST['idApellido'];
    $documento=$_POST['idDocumento'];
    $fechaNac=$_POST['idFechaNac'];
    $ciudad=$_POST['IdCiudad'];
    $barrio=$_POST['idBarrio'];
    $direccion=$_POST['idDireccion'];
    $telefono=$_POST['idTelefono'];
    $fechacita=$_POST['FechaCita'];
    $Medico=$_POST['idMedico'];

    // Por si algo, Validacion de numero Para El campo Documento 
    $ValidacionDocumento = (is_numeric($documento)) ? true : false;
    if ($ValidacionDocumento == false)
    {
        die('<script language="javascript">alert("El documento Debe Ser Numerico");window.location.href="../frmApp/crearcitasusuario.php"</script>');
    }

    // Por si algo, Validacion Para El campo Telefono Celular 
    $ValidacionTelfono = (is_numeric($telefono)) ? true : false;
    if ($ValidacionTelfono == false)
    {
        die('<script language="javascript">alert("El Telfono Celular Debe Ser Numerico");window.location.href="../frmApp/crearcitasusuario.php"</script>');
    }

    $longitudTelefono = strlen ($telefono); 
    if ($longitudTelefono <> 10)
    {
        die('<script language="javascript">alert("El Numero de Telefono debe ser de 10 Digitos");window.location.href="../frmApp/crearcitasusuario.php"</script>');
    }

    
    try
    {
        require_once 'conexion.php';

        $citaExistente = "SELECT * FROM citas WHERE Documento = '$documento' AND FechaCita='$fechacita' ";
        $result=mysqli_query($conexion,$citaExistente);
        if ($result->num_rows > 0) 
        {
            echo'<script language="javascript">alert("Ya Exite  Una Cita Programada para La fecha y hora Digitada");window.location.href="../frmApp/crearcitasusuario.php"</script>';
        }
        else
        {
            $sql = " INSERT INTO Citas (Nombres,Apellidos,Documento,FechaNacimiento,Ciudad,Barrio,Direccion,TelefonoCelular,
                                        FechaCita,idMedico) 
                     VALUES ('{$nombre}','{$apellido}','{$documento}','{$fechaNac}','{$ciudad}','{$barrio}',
                             '{$direccion}','{$telefono}','{$fechacita}','{$Medico}') ";        
            $result=mysqli_query($conexion,$sql);
            if($result)
            {
                 echo'<script language="javascript">alert("Cita Programda Exitosamente ");window.location.href="../frmApp/crearcitasusuario.php"</script>';         
            }  
        }     
    }
    catch (Exception $ex)
    {
        die('<script language="javascript">alert("Error de Regitro de Cita");window.location.href="../frmApp/crearcitasusuario.php"</script>'); 
    }  
   
   
?>