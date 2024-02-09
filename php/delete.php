<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='../scripts/dentrites.js'></script>
</header>

<?php
// funcion para destruir el archivo
unlink($_GET["name"]);

// Redireccion a la vista de usuario
echo '<script>
             Swal.fire({
                position: "center",
                icon: "success",
                title: "Archivo eliminado",
                showConfirmButton: false,
                timer: 1200,
              }).then(function () {
                window.location.href = "../html/usuario.php";
              })
      </script>';
?>