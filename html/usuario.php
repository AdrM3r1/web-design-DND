<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>
    <| DND BUILDER |>
  </title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!--Estilos dados-->
  <link rel='stylesheet' type='text/css' media='screen' href='../styles/diceroll.css'>
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

<body id="website">
  <div>
    <h1 class="titulo">The Iris Of The Beholder </h1>
  </div>
  <div class="content">
    <!--content start-->
    <div class="row-cols-auto">
      <div id="img_logo"></div>
      <div id="divisor">
        <ul id="contenedorNav" role="menubar">
          <li class="itemNav" role="menuitem">
            <a href="info.html"> Informacion</a>
          </li>
          <li class="itemNav" role="menuitem">
            <a href="comoSeJuega.html">Como Jugar</a>
          </li>
          <li class="itemNav" role="menuitem">
            <a href="utilidades.html">Herramientas</a>
          </li>
          <li class="itemNav" role="menuitem" id="reg">
            <a href="registro.php">Registrate</a>
          </li>
          <li class="itemNav" role="menuitem" id="log">
            <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
          </li>
          <li class="itemNav" role="menuitem" id="user">
            <a href="usuario.php">Mi cuenta</a>
          </li>
          <a onclick="logOut()" style="cursor: pointer;font-size: 14px; margin-left: 12px;" id="logout">Cerrar
            sesion</a>
        </ul>
        <div class="io">
          <div class="container">
            <div class="row justify-content-md-start">
              <div class="col-md-12">
                <h4>Lista de Personajes</h4>
                <a class="itemNav" href="../php/charCreator.php"> Crear nuevo personaje</a>
                <?php
                include "../php/config.php";

                $sql = "SELECT * from tabla_pj where asociadoa= '$_COOKIE[nick]';";
                $result = mysqli_query($conn, $sql);
                ?>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Clase</th>
                      <th scope="col">Raza</th>
                      <th scope="col">Nivel</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Borrar</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $count = mysqli_num_rows($result);
                    if ($count != 0) {
                      while ($row = mysqli_fetch_array($result)) { ?>
                        <tr class='character'>
                          <td>
                            <?php echo $row["nombre"]; ?>
                          </td>
                          <td>
                            <?php echo $row["clase"]; ?>
                          </td>
                          <td>
                            <?php echo $row["raza"]; ?>
                          </td>
                          <td>
                            <?php echo $row["nivel"]; ?>
                          </td>
                          <td>
                            <a href="../php/charEditor.php?id=<?php echo $row[
                              "id"
                            ]; ?>" style='cursor: pointer'>Edit </a>
                          </td>
                          <td>
                            <a href="../php/charDeletion.php?id=<?php echo $row[
                              "id"
                            ]; ?>" style='cursor: pointer;color: red;'>Borrar </a>
                          </td>
                        <?php }
                    }
                    ?>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ARCHIVOS</th>
                      <th scope="col">Download</th>
                      <th scope="col">Borrar</th>
                      <a class="itemNav" style="cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#uploadModal">Subir Archivo</a>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Devuelve los archivos alojados en la carpeta de cada usuario segun su login
                    $target_path = "../files/$_COOKIE[nick]/";

                    if (!is_dir($target_path)) {
                      mkdir($target_path);
                    }

                    $files = scandir("$target_path");

                    for ($a = 2; $a < count($files); $a++) { ?>
                      <tr>
                        <!-- Mostramos el nombre del archivo !-->
                        <td>
                          <?php echo $files[$a]; ?>
                        </td>
                        <!-- añadido el enlace de descarga !-->
                        <td><a href="<?php echo $target_path;
                        echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
                            Download</a></td>
                        <!-- añadido el enlace de eliminacion -->
                        <td><a href="../php/delete.php?name=<?php
                        echo $target_path;
                        echo $files[$a];
                        ?>" style="color: red;">
                            Borrar
                          </a></td>
                      </tr>
                    <?php }
                    ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="principal.html">Home</a>
        </li>
        <li style="color:greenyellow" class="breadcrumb-item active" aria-current="page">Usuario</li>
      </ol>
    </nav>
  </div>
  <!--modal de envia archivos -->
  <div id="uploadModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <form action="" method="post" enctype="multipart/form-data">
            <h5>Subir Archivo</h5>
            <br>
            <input type="file" name="file">
            <input type="submit" name="Upload" id="Upload" value="Upload">
          </form>
        </div>
        <div class=modal-footer>*Admite todo tipo de archivo </div>
      </div>
    </div>
  </div>
  <script>
    cambioLogo();
    getCookie();
  </script>
</body>
<?php
include "../php/config.php";
if (isset($_POST["Upload"])) {
  // crea una carpeta para el usuario que hay activo cuando vaya a subir un archivo, si ya existe no se crea de nuevo
  $target_path = "../files/$_COOKIE[nick]/";

  if (!is_dir($target_path)) {
    mkdir($target_path);
  }

  // que archivo va a subir
  $file = $_FILES["file"];

  // Subida de archivos
  move_uploaded_file($file["tmp_name"], "$target_path" . $file["name"]);

  echo '<script>
             Swal.fire({
                position: "center",
                icon: "success",
                title: "Archivo subido",
                showConfirmButton: false,
                timer: 1200,
              }).then(function () {
                window.location.href = "../html/usuario.php";
              })
              </script>';
}
?>



</html>