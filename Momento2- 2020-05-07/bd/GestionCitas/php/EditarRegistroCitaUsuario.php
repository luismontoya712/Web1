<?php
	
	ModificarCita($_POST['id'],$_POST['idNombre'],$_POST['idApellido'],$_POST['idDocumento'],$_POST['idFechaNac'],$_POST['idCiudad'],
	$_POST['idBarrio'],$_POST['idDireccion'], $_POST['idTelefono'],$_POST['FechaHoraCita'],$_POST['idMedico'] );			

	function ModificarCita($id,$nom,$apell,$doc,$Fecnac,$ciu,$barr,$dir,$tel,$feccit,$med)
	{
	
		try
		{

		    include 'conexion.php';
		    $sql="  UPDATE citas SET  Nombres= '".$nom."',
		                            Apellidos= '".$apell."',
							        Documento= '".$doc."',
							        FechaNacimiento= '".$Fecnac."',
							        Ciudad= '".$ciu."',
							        Barrio= '".$barr."',
							        Direccion= '".$dir."',
							        TelefonoCelular= '".$tel."',
							        FechaCita= '".$feccit."',
							        idMedico= '".$med."'		 
			        WHERE Id= '".$id."' ";
		    $result=mysqli_query($conexion, $sql);
			if($result)
			{
                echo'<script language="javascript">alert("Cita Modificada Exitosamente ");window.location.href="../frmApp/consultarcitasusuario.php"</script>';         
            }  

		}
		catch( Exception $ex)
		{
			die('<script language="javascript">alert("Error de Actualizacion de Cita");window.location.href="../frmApp/consultarcitasusuario.php"</script>'); 
		} 

		
	}
?>

