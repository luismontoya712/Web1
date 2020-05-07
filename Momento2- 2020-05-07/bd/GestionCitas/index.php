<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <!--Responsivo-->
  <meta name="viewport" content="width=device-width, use-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0 ">
  <title>Gestion de Citas</title>
  <link rel="stylesheet" href="css/styleLogin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="main">
    <form method="post" action="php/login.php" >
      <input type="text" name="user" class="form-control" placeholder="Usuario" required>
      <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
      <input type="submit" class="botonlg" value="Iniciar Sesion"> 
    </form>
    <p></p>
    <p></p>
    <center>
      <button type="button" onclick="NuevoUsuario();" class="btn btn-primary btn-lg">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Registrarse
      </button>
    </center>
  </div>

  <div class="modal fade" id="modalNuevoUsuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Nuevo Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <form  method="post" action="php/RegistrarUsuarioLogin.php">
          <div class="col-lg-12">

            <div class="form-group">
              <label for="NombresLogin">Nombres</label>
              <input type="text" name="NombresLogin" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="UsuarioLogin">Usuario</label>
              <input type="text" name="UsuarioLogin" class="form-control" required>
            </div>

            <div class="form-group">
             <label for="PasswordLogin">Password</label>
              <input type="parsword" name="PasswordLogin" class="form-control" required>
            </div>


            <div class="form-group">
              <label for="TipoLogin">Tipo Acceso</label>
              <select name="TipoLogin" class="form-control" required>
                    <option selected>Choose...</option>
                    <option value='Usuario'>Usuario</option>                    
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
              <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar
            </button>
          </div>
        </form>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function NuevoUsuario() {
      $('#modalNuevoUsuario').modal('show');

    }
  </script>
</body>

</html>