<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='../scripts/dentrites.js'></script>
</header> <?php
    include ("config.php");
    if (isset($_POST)) {
        $user_Name = $_POST["nick"];
        $user_Password = $_POST["pass"];
        $sql = "SELECT * from users_ where nick = '$user_Name' and pass = '$user_Password'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);  
        $cookie_name = "nick";
        $cookie_value = $user_Name;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");;

        if($count == 1 && $user_Name == "root"){  
          echo '<script>
              Swal.fire({
                position: "center",
                icon: "success",
                title: "Bienvenido administrador",
                showConfirmButton: false,
                timer: 2000,
              }).then(function () {
                  createCookie();
                  window.location.href = "../html/superusuario.php";
              })
            </script>';
        } elseif($count == 1){  
          echo '<script>
              Swal.fire({
                position: "center",
                icon: "success",
                title: "Bienvenido '.$user_Name.'",
                showConfirmButton: false,
                timer: 2000,
              }).then(function () {
                  createCookie();
                  window.location.href = "../html/usuario.php";
              })
            </script>';
        }  
        else{  
          echo '<script>
              Swal.fire({
                  position: "center",
                  icon: "danger",
                  title: "Password o Nick erroneo",
                  text:"Intentalo de nuevo",
                  showConfirmButton: false,
                  timer: 2000,
                })
            </script>';
        }     
    }
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
        <div id="log">
          <h3 style="color:black;margin: 0px 55px 10px;text-decoration: underline;text-decoration-thickness:2px;">login </h3>
          <form action="login.php" method="post">
            <div class="form-group">
              <input id="nick" type="text" class="form-control" name="nick" placeholder="Nick" required="required">
            </div>
            <br>
            <div class="form-group">
              <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
            </div>
            <br>
            <button id="Enviar" class="submitButton" type="submit">Enviar</button>
            <button id="retorno" class="submitButton" type="button" value="volver">Volver</button>
          </form>
          <div class="form-group">
            <a href="../html/recuPass.html">¿Olvidaste la contraseña?</a>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    $('#retorno').click(function() {
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Volvemos al inicio',
        showConfirmButton: false,
        timer: 1200
      }).then(function() {
        window.location.href = "../html/principal.html";
      })
    })
  </script>
</html>