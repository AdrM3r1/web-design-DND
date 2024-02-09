<?php
include("../php/config.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>
    <| DND BUILDER |>
  </title>
  <!--estilo y js inicio-->
  <link rel='stylesheet' type='text/css' media='screen' href='../styles/pupils.css'>
  <script src='../scripts/dentrites.js'></script>
  <!--JQuery-->
  <script src="../lib/jquery-3.4.1.min.js"></script>
  <!--Bootstrap-->
  <script src='../scripts/bootstrap.bundle.js'></script>
  <link rel='stylesheet' type='text/css' media='screen' href='../styles/bootstrap.css'>
  <!--Sweet alert-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="index-bg">
  <div id="container">
    <div id="indexcontent">
      <div id="log"><!-- ventana del formulario -->
        <h3 style="color:black;margin: 0px 55px 10px;text-decoration: underline;text-decoration-thickness:2px;">Registro
          <span class="tooltip-arrow" data-bs-toggle="tooltip" data-bs-placement="right"
            title="Enviar se desbloqueara cuando los campos esten rellenos">*</span>
        </h3>
        <!-- inicio de formulario -->
        <form action="../php/procesoRegistro.php" method="post" id="registro">
          <label style="margin-left:85px ;" class="labInput">
            <center>Nick</center>
          </label>
          <input class="logger" id="userName" type="text" name='nick'>
          <label style="margin-left:25px ;" class="labInput">Correo Electronico</label>
          <input class="logger" id="userEmail" type="email" name='email'>
          <label style="margin-left: 55px;" class="labInput">Contrase&ntilde;a</label>
          <input class="logger" id="userPassword" type="password" name="password">
          <label style="margin-left: 25px;" class="labInput">Confirma Contrase&ntilde;a</label>
          <input class="logger" id="userCpass" type="password" name="cpass">

          <button id="Enviar" class="submitButton" type="submit">Enviar</button>

          <button id="retorno" class="submitButton" type="button" value="volver">Volver</button>
        </form>
        <!-- fin formulario -->
        <!-- boton para hacer inicio en el caso de que estes registrado -->
        <div style="margin:10px 12px;font-size: 16px;font-family: 'Dalelands'"><br>
          <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#loginModal">¿Ya estas registrado?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal HTML -->
  <div id="loginModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="../php/login.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="nick" placeholder="Nick" required="required">
            </div>
            <br>
            <div class="form-group">
              <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
            </div>
            <br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href="recuPass.html">¿Olvidaste la contraseña?</a>
        </div>
      </div>
    </div>
  </div>
</body>

<script>
  /* activador de tooltip */
  $(document).ready(function () {
    $('[data-bs-toggle="tooltip"]').tooltip();
  });
  /* Jquery para el boton de regreso con sweetalert */
  $('#retorno').click(function () {
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Volvemos al inicio',
      showConfirmButton: false,
      timer: 1200
    }).then(function () {
      window.location.href = "../html/principal.html";
    })
  })
  /* se desbloquea el envio de formulario si todos los campos estan rellenos */
  {
    const btn = document.getElementById("Enviar");
    const name = document.getElementById("userName");
    const email = document.getElementById("userEmail");
    const pass = document.getElementById("userPassword");
    const CPass = document.getElementById("userCpass");
    deactivate()

    /* activador desactivador del boton de enviar */
    function activate() {
      btn.disabled = false;
    }

    function deactivate() {
      btn.disabled = true;
    }
    /* Comprobador de campos de formulario, si estan vacios el boton se bloquea si no lo estan se desbloquea */
    function check() {
      if (name.value != '' && email.value != '' && pass.value != '') {
        activate()
      } else {
        deactivate()
      }
    }
    name.addEventListener('input', check)
    email.addEventListener('input', check)
    pass.addEventListener('input', check)
    CPass.addEventListener('input', check)

  }

</script>

</html>