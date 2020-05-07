<?php include_once('AdminUsuario.php'); ?>

    <br>
    <br>
    <section class="content-header">
        <h1 style="text-align: center">LISTADO DE CITAS</h1>
    </section>

    <div class="container-fluid">
        <hr width=100% align="Center" size=60 color="#FFFFFF">
            <div class="row row-cols-13 ">
                <div class="col" id="Lista"><h5>Nombres</h5></div>
                <div class="col" id="Lista"><h5>Apellidos</h5></div>
                <div class="col" id="Lista"><h5>Documento</h5></div>
                <div class="col-1" id="Lista"><h5>Fecha Nacimiento</h5></div>
                <div class="col" id="Lista"><h5>Ciudad</h5></div>
                <div class="col" id="Lista"><h5>Barrio</h5></div>
                <div class="col" id="Lista"><h5>Direccion</h5></div>
                <div class="col" id="Lista"><h5>Telefono</h5></div>
                <div class="col" id="Lista"><h5>Fecha Cita</h5></div>
                <div class="col" id="Lista"><h5>Medico</h5></div>
                <div class="col" id="Lista"></div>
                <div class="col" id="Lista"></div>
            </div>
                           
                    <?php

                        require_once '../php/conexion.php';
                         $sql = 'SELECT A.Id,A.Nombres,A.Apellidos,A.Documento,A.FechaNacimiento,A.Ciudad,A.Barrio,A.Direccion,
				                        A.TelefonoCelular,A.FechaCita,B.Nombres as Medico
				                  FROM  citas A inner join Medico B on A.IdMedico=B.Id order by A.Id desc';
                        $result = mysqli_query($conexion, $sql);
                        if ($result->num_rows > 0)
                        {
                            while ($datos = mysqli_fetch_array($result))                        
                            {
                    ?>
                                <hr width=100% align="Center" size=60 color="#FFFFFF">
                                <div class="row row-cols-13 ">
                                    <div class="col"><?php echo $datos['Nombres']; ?></div>
                                    <div class="col"><?php echo $datos['Apellidos']; ?></div>
                                    <div class="col"><?php echo $datos['Documento']; ?></div>
                                    <div class="col"><?php echo $datos['FechaNacimiento']; ?></div>
                                    <div class="col"><?php echo $datos['Ciudad']; ?></div>
                                    <div class="col"><?php echo $datos['Barrio']; ?></div>
                                    <div class="col"><?php echo $datos['Direccion']; ?></div>
                                    <div class="col"><?php echo $datos['TelefonoCelular']; ?></div>
                                    <div class="col"><?php echo $datos['FechaCita']; ?></div>
                                    <div class="col"><?php echo $datos['Medico']; ?></div>
                                    <div class="col"><a href='EditarCita.php?Id=<?php echo $datos['Id']; ?> <button type=' button' class='btn btn-success'>EDITAR</button></a></div>
                                    <div class="col"><a href='#' onclick="Confirmar(<?php echo $datos['Id']; ?>)" <button type='button' class='btn btn-danger'>X</button></a></div>
                                 </div>
                    <?php
                            }
                        }
                    ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script language="JavaScript">
        function Confirmar(id) {
            if (confirm("Esta Seguro de Eliminar La Cita? ")) {
                window.location.href = "../php/EliminarCita.php?Id=" + id;
            }
        }
    </script>
</body>
</html>