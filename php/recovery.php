<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='../scripts/dentrites.js'></script>
</header>
<?php
include("config.php");
if (isset($_POST)) {
  $user_Name = $_POST["nick"];
  $user_Email = $_POST["mail"];
  /* sql para recuperar desde la tabla de users la pass del user a traves del mail y el nick */
  $sql = "SELECT * from users_ where nick = '$user_Name' and mail = '$user_Email'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  /* sql para recuperar la contraseña desde la tabla de users a traves del mail y el nick */
  $sql2 = "SELECT pass from users_ where nick = '$user_Name' and mail = '$user_Email'";
  $resultPass = mysqli_query($conn, $sql2);
  $row = mysqli_fetch_assoc($resultPass);
  /* mensaje con sweetalert gestionado para cuando el usuario 
  solicita la recuperacion de contraseña */
  if ($count == 1) {
    echo '<script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Hola ' . $user_Name . '",
                text:" Tu password es ' . $row["pass"] . '",
                showConfirmButton: true,
              }).then(function () {
                window.location.href = "../html/principal.html";
              })
                </script>';
  } else {
    echo '<script>
            Swal.fire({
                position: "center",
                icon: "danger",
                title: "El Nick o Email no coinciden en la base de datos",
                text:"Intentelo de nuevo",
                showConfirmButton: false,
                timer: 2000,
              }).then(function () {
                window.location.href = "../html/recuPass.html";
              })
              </script>';
  }
}
?>