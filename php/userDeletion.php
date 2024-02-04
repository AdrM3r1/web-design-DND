<header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../scripts/dentrites.js'></script>
</header>

<?php
include "config.php";

if (isset($_POST)) {
    $id = $_GET["id"];
    $sql = "DELETE FROM users_ WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result ) {
      echo ' <script>
          Swal.fire({
              position: "center",
              icon: "success",
              title: "Usuario eliminado",
              showConfirmButton: false,
              timer: 2000,
            }).then(function () {
              window.location.href = "../html/superusuario.php";
            })
                </script>';
  }
}

?>
