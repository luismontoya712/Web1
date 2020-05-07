<?php

    $datosCita=ConsultaDatosCita($_GET['Id']);  
  
    function ConsultaDatosCita($Id)
    {   require_once '../php/conexion.php';
        $sql = "SELECT A.Id,A.Nombres,A.Apellidos,A.Documento,A.FechaNacimiento,A.Ciudad,A.Barrio,A.Direccion,
				               A.TelefonoCelular,A.FechaCita,B.Nombres as Medico
				        FROM citas A inner join Medico B on A.IdMedico=B.Id WHERE A.Id='".$Id."' " ;
       
        $result = mysqli_query($conexion, $sql);
        $datos=mysqli_fetch_array($result);
        {
            return [
                $datos['Nombres'], 
                $datos['Apellidos'], 
                $datos['Documento'],
                $datos['FechaNacimiento'], 
                $datos['Ciudad'], 
                $datos['Barrio'], 
                $datos['Direccion'],
                $datos['TelefonoCelular'], 
                $datos['FechaCita'], 
                $datos['Medico']     
                        
               ];
        }
  
    }   

?>
<?php include_once('AdminUsuario.php'); ?>
<br>
<section class="content-header">
    <h1 style="text-align: center">EDITAR CITAS</h1>  
</section>
<br>
    <div class="container">
        <form <form method="get" action="../php/EditarRegistroCita.php">
           <div class="form-row">
                <div class="form-group col-md-4" style="display:none">
                    <label for="id">Id Cita</label>
                     <input type="text" class="form-control" name="id" value="<?php echo $_GET['Id'] ?>"  placeholder="Name" required>
                </div>
             </div>
           <div class="form-row">
                <div class="form-group col-md-4" >
                    <label for="idNombre">Nombres</label>
                     <input type="text" class="form-control" name="idNombre" value="<?php echo $datosCita[0] ?>"  placeholder="Name" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="idApellido">Apellidos</label>
                    <input type="text" class="form-control" name="idApellido" value="<?php echo $datosCita[1] ?>" placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-row">
                 <div class="form-group col-md-4">
                    <label for="idDocumento">Documento</label>
                    <input type="number" class="form-control" name="idDocumento" value="<?php echo $datosCita[2] ?>" placeholder="Identity Document" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="idFechaNac">Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="idFechaNac" value="<?php echo $datosCita[3] ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="idCiudad">Ciudad Residencia</label>
                    <input type="text" class="form-control" name="idCiudad" value="<?php echo $datosCita[4] ?>" placeholder="City" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="idBarrio">Barrio Residencia</label>
                    <input type="text" class="form-control" name="idBarrio" value="<?php echo $datosCita[5] ?>" placeholder="Neighborhood" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="idDireccion">Direccion Residencia</label>
                    <input type="text" class="form-control" name="idDireccion"  value="<?php echo $datosCita[6] ?>" placeholder="Direction" required>
                 </div>
                 <div class="form-group col-md-4">
                    <label for="idTelefono">Numero Telefono Celular</label>
                    <input type="number" class="form-control" name="idTelefono" value="<?php echo $datosCita[7] ?>"  placeholder="Cell phone Number" required>
                </div>
            </div>
            <div class="form-row">
                 <div class="form-group col-md-4">
                    <label for="FechaHoraCita">Confirmar Fecha y Hora Cita</label>
                    <input type="datetime-local" class="form-control"  name="FechaHoraCita"  required>
                </div>
                <div class="form-group col-md-4">
                    <label for="idMedico">Confirmar Medico</label>
                    <select name="idMedico" class="form-control" required >
                        <option selected>Choose...</option>
                        <?php
                            $conexion= new mysqli("127.0.0.1","root","","GestionCitas");

                            $sqlm = 'SELECT Id ,Nombres FROM Medico ';
                            $resultm = mysqli_query($conexion, $sqlm);

                            while ($datosM = mysqli_fetch_array($resultm)) {
                                echo "<option value='" . $datosM['Id'] . "'>" . $datosM['Nombres'] . "</option>";
                        }
                        ?>
                     </select>
                </div>    
            </div>
           <div  class="form-group col-md-2">
                  <button type="submit" class="btn btn-success" onclick="Modificar();" >Modificar</button>
            </div>
            
        </form>  	
    </div>
 

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
 function Modificar(){
    if (window.confirm("¿Está seguro que desea Modificar el registro de la Cita?" )) ;     

 }
</script>
</body>

</html>