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

            <a onclick="logOut()" style="cursor: pointer;font-size: 14px; margin-left: 12px;" id="logout">Cerrar sesion</a>
          </ul>
          <div class="io">
            <div class="container">
              <div class="row justify-content-md-start">
                <div class="col-md-12">
                  <h4>Lista de Personajes almacenados</h4>
                <?php
                  include "../php/config.php";

                  $sql = "SELECT * from tabla_pj ";
                  $result = mysqli_query($conn, $sql);
                  ?> 
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Clase</th>
                        <th scope="col">Raza</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Propietario</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>

                      </tr>
                    </thead>
                    <tbody> <?php
                    $count = mysqli_num_rows($result);
                    if ($count != 0) {
                        while ($row = mysqli_fetch_array($result)) { ?>
                         <tr class='character'>
                        <td> <?php echo $row["nombre"]; ?> </td>
                        <td> <?php echo $row["clase"]; ?> </td>
                        <td> <?php echo $row["raza"]; ?> </td>
                        <td> <?php echo $row["nivel"]; ?> </td>
                        <td> <?php echo $row["asociadoa"]; ?> </td>
                        <td>
                          <a href="../php/charEditor.php?id=<?php echo $row[
                              "id"
                          ]; ?>" style='cursor: pointer'>Edit </a>
                        </td> 
                        <td>
                          <a href="../php/charDeletion.php?id=<?php echo $row[
                              "id"
                          ]; ?>" style='cursor: pointer;color: red;' >Borrar </a>
                        </td>
                        <?php }
                    }
                    ?>
                      </tr>
                    </tbody>
                  </table>
 
                    <h4>Lista de Archivos almacenados por usuario</h4>
                      <?php
                      // Devuelve los archivos alojados en la carpeta de cada usuario
   
                    function dirToOptions($path = '../files', $level = 0) {
                      $items = scandir($path);
                      foreach($items as $item) {
                          // ignora todos los objetos que comiencen por .
                          if (strpos($item, '.') === 0) {
                              continue;
                          }
                  
                          $fullPath = $path . DIRECTORY_SEPARATOR . $item;
                          // añade espacio en blanco para hacerlo similar a la estructura de archivos
                          $item = str_repeat('&nbsp;', $level * 3) . $item;
                          //archivo
                          if (is_file($fullPath)) {
                               echo "<option>$item</option>";
                          }
                          // carpeta
                          else if (is_dir($fullPath)) {
                              // cierra el grupo para evitar errores
                              echo "<optgroup label='$item'></optgroup>";
                              // llamada recursiva para añadir el objeto
                              dirToOptions($fullPath, $level + 1);
                          }
                      }
                  }
                  echo "<h6>../files/</h6>";
                  echo "<ol>";
                  dirToOptions();
                  echo "</ol>";
                         ?> 

    <h4>Registro de todos los personajes creados en total </h4>
                <?php
                  include "../php/config.php";

                  $sql = "SELECT * from reg_uspj ";
                  $result = mysqli_query($conn, $sql);
                  ?> 
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Propietario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Clase</th>
                        <th scope="col">Raza</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">fecha</th>
                      </tr>
                    </thead>
                    <tbody> <?php
                    $count = mysqli_num_rows($result);
                    if ($count != 0) {
                        while ($row = mysqli_fetch_array($result)) { ?>
                         <tr class='character'>
                        <td> <?php echo $row["asociadoa"]; ?> </td>
                        <td> <?php echo $row["nombre"]; ?> </td>
                        <td> <?php echo $row["clase"]; ?> </td>
                        <td> <?php echo $row["raza"]; ?> </td>
                        <td> <?php echo $row["nivel"]; ?> </td>
                        <td> <?php echo $row["fecha"]; ?> </td>

                        <?php }
                    }
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
            <a >Home</a>
          </li>
          <li style="color:greenyellow" class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
      </nav>
    </div>

    <script>
      cambioLogo();
      getCookie();
    </script>

<script>
  function logOut() {
	let name = c_name_base + "=";
	let ca = document.cookie.split(';');
	let x = true;

	for (let i = 0; i < ca.length; i++) {
		let c = ca[i].trim();

		if (c.includes(name) && c.substring(name.length) === "true") {
			document.cookie = c_name_base + "=" + true + ";" + "expires=Thu, 01 Jan 1970 00:00:00 GMT" + ";path=/";
			document.cookie = c_user + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';

			Swal.fire({
				position: 'center',
				icon: 'success',
				title: "Logout ",
				text: "Nos vemos pronto",
				showConfirmButton: false,
				timer: 1500,
			}).then(function() {
				window.location.href = "../html/principal.html";
			})
		}
	}
}

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