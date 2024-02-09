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
         <div id="divisor"><!-- menu navegacion -->
            <ul id="contenedorNav" role="menubar">
               <a onclick="logOut()" style="cursor: pointer;font-size: 14px; margin-left: 12px;" id="logout">Cerrar
                  sesion</a>
            </ul><!-- fin menu navegacion -->
            <div class="io">
               <div class="container">
                  <div class="row justify-content-md-start">
                     <div class="col-md-12">
                        <h3>Lista de Personajes almacenados por usuario</h3>
                        <?php
                        include "../php/config.php";

                        $sql = "SELECT * from tabla_pj ";
                        $result = mysqli_query($conn, $sql);
                        ?><!-- tabla de los personajes, en este caso de todos los users -->
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
                           <tbody><!-- columnas de los personajes -->
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
                                          <?php echo $row["asociadoa"]; ?>
                                       </td>
                                       <td>
                                          <a href="../php/charEditor.php?id=<?php echo $row[
                                             "id"
                                          ]; ?>" style='cursor: pointer'>Edit </a>
                                       </td>
                                       <td>
                                          <a href="../php/charDeletion.php?id=
                                    <?php echo $row[
                                       "id"
                                    ]; ?>" style='cursor: pointer;color: red;'>Borrar </a>
                                       </td>
                                    <?php }
                              }
                              ?>
                              </tr>
                           </tbody>
                        </table>
                        <h3>Archivos almacenados por usuario</h3>
                        <?php
                        // Devuelve los archivos alojados en la carpeta de cada usuario
                        
                        function dirToOptions($path = '../files', $level = 0)
                        {
                           $items = scandir($path);
                           foreach ($items as $item) {
                              // ignora todos los objetos que comiencen por .
                              if (strpos($item, '.') === 0) {
                                 continue;
                              }

                              $fullPath = $path . DIRECTORY_SEPARATOR . $item;
                              // añade espacio en blanco para hacerlo similar a la estructura de archivos
                              $item = str_repeat('&nbsp;', $level * 3) . $item;
                              //archivo
                              if (is_file($fullPath)) {
                                 echo "
                        <option>$item</option>";
                              }
                              // carpeta
                              else if (is_dir($fullPath)) {
                                 // cierra el grupo para evitar errores
                                 echo "
                        <optgroup label='$item'></optgroup>";
                                 // llamada recursiva para añadir el objeto
                                 dirToOptions($fullPath, $level + 1);
                              }
                           }
                        }
                        echo "
                        <li class='itemNav'>
                        <a target='_blank' style='cursor: pointer;' href='../files'>../files</a>
                        </li>
                        <br>";
                        echo "
                        <ol>";
                        dirToOptions();
                        echo "</ol>";
                        ?>
                        <h3>Registro de todos los personajes creados en total </h3>
                        <?php /* muestra la tercera tabla de todos los pj creados por los usuario */
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
                           <tbody>
                              <?php
                              $count = mysqli_num_rows($result);
                              if ($count != 0) {
                                 while ($row = mysqli_fetch_array($result)) { ?>
                                    <tr class='character'>
                                       <td>
                                          <?php echo $row["asociadoa"]; ?>
                                       </td>
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
                                          <?php echo $row["fecha"]; ?>
                                       </td>
                                    <?php }
                              }
                              ?>
                              </tr>
                           </tbody>
                        </table><!-- fin de tabla de historial de personajes -->
                     </div>
                  </div>
                  <div class="col-md-12">
                     <h3>Usuarios registrados</h3>
                     <?php
                     include "../php/config.php";
                     /* tabla de los usuarios registrados, botones de eliminar usuarios */
                     $sql = "SELECT * FROM `users_` WHERE NOT nick = 'root';";
                     $result = mysqli_query($conn, $sql);
                     ?>
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">Usuario</th>
                              <th scope="col">Borrar</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $count = mysqli_num_rows($result);
                           if ($count != 0) {
                              while ($row = mysqli_fetch_array($result)) { ?>
                                 <tr class='usuario'>
                                    <td>
                                       <?php echo $row["nick"]; ?>
                                    </td>
                                    <td>
                                       <a value="borrar" type="button"
                                          href="../php/userDeletion.php?id=<?php echo $row["id"]; ?>"
                                          style='cursor: pointer;color: red;'>Borrar</a>
                                    </td>
                                 <?php }
                           }
                           ?>
                  </div>
               </div>
            </div>
         </div>
         <script>
            function logOut() {
               /* funcion para cerrar sesion */
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
                     }).then(function () {
                        window.location.href = "../html/principal.html";
                     })
                  }
               }
            }
         </script>
</body>

</html>