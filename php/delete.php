<header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../scripts/dentrites.js'></script>
</header>

<?php
// Built-in PHP function to delete file
unlink($_GET["name"]);

// Redirecting back
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