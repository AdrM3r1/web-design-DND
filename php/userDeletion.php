<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='../scripts/dentrites.js'></script>
</header>

<?php
include "config.php";

if (isset($_POST)) {
  $id = $_GET["id"];
  $sql = "DELETE FROM users_ WHERE id = '$id'";
/*  sql de eliminacion de la tabla de usuario a traves de la id de usuario*/

  $result = mysqli_query($conn, $sql);
/* sweetaler ded eliminacion de usuario */
  if ($result) {
    echo ' <script>
          Swal.fire({
              position: "center",
              icon: "success",
              title: "Usuario eliminado",
              showConfirmButton: false,
              timer: 2000,
            }).then(function () {
              window.location.href = "../html/superUsuario.php";
            })
                </script>';
  }
}

?>