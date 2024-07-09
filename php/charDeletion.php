<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='../scripts/dentrites.js'></script>
</header>

<?php
include "config.php";

if (isset($_POST)) {
  $id = $_GET["id"];
  $asociadoa = $_COOKIE["nick"];
  /* sql para eliminar de la tabla de personajes por id a la hora de hacer clic en borrar desde el html */
  $sql = "DELETE FROM tabla_pj WHERE id = '$id'";

  $result = mysqli_query($conn, $sql);
  /* tres respuestas con sweetalert, si eres root y existe el user, si es el usuario elimina el pj y si no se puede eliminar */
  if ($result && $asociadoa == 'root') {
    echo ' <script>
          Swal.fire({
              position: "center",
              icon: "success",
              title: "Personaje eliminado",
              showConfirmButton: false,
              timer: 2000,
            }).then(function () {
              window.location.href = "../html/superUsuario.php";
            })
                </script>';
  } elseif ($result) {
    echo ' <script>
          Swal.fire({
              position: "center",
              icon: "success",
              title: "Personaje eliminado",
              showConfirmButton: false,
              timer: 2000,
            }).then(function () {
              window.location.href = "../html/usuario.php";
            })
                </script>';
  } else {
    echo ' <script>
              Swal.fire({
                  position: "center",
                  icon: "warning",
                  title: "Personaje no creado",
                  text:"No ha sido posible eliminar al personaje",
                  showConfirmButton: false,
                  timer: 2000,
                }).then(function () {
                  window.location.href = "../html/usuario.php";
                })
                    </script>';
  }
}


?>