<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='../scripts/dentrites.js'></script>
</header>

<?php
include "config.php";

if (isset($_POST["Enviar"])) {
  $id = $_POST["id"];
  $asociadoa = $_COOKIE["nick"];
  $nombre = $_POST["nombre"];
  $raza = $_POST["raza"];
  $clase = $_POST["clase"];
  $armorClass = $_POST["armorClass"];
  $nivel = $_POST["nivel"];
  $hitPoints = $_POST["hitPoints"];
  $hitDice = $_POST["hitDice"];
  $speed = $_POST["speed"];
  $spells = $_POST["spells"];
  $invent = $_POST["invent"];
  /* sql actualiza la bbdd de la tabla de personaje tras haber editado y guardado al personaje */
  $sql = "UPDATE tabla_pj SET nombre = '$nombre',clase = '$clase',raza = '$raza',
    armorClass = '$armorClass',nivel = '$nivel', hitPoints = '$hitPoints', hitDice= '$hitDice',speed = '$speed',
    spells = '$spells' , invent = '$invent'
     WHERE id = '$id'";

  $result = mysqli_query($conn, $sql);
  /* sql actualiza la bbdd de la tabla de historial de personaje tras haber editado y guardado al personaje */
  $sql2 = "UPDATE reg_uspj SET nombre = '$nombre',raza = '$raza',
    clase = '$clase',nivel = '$nivel' WHERE id = '$id'";

  $result2 = mysqli_query($conn, $sql2);
  /* mensaje con sweetalert gestionado para cuando el usuario 
  es el superuser o un usuario que salga un mensaje dependiendo el resultado*/
  if ($result && $asociadoa == 'root') {
    echo ' <script>
          Swal.fire({
              position: "center",
              icon: "success",
              title: "Personaje actualizado",
              text:"' .
      $nombre .
      '",
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
            title: "Personaje actualizado",
            text:"' .
      $nombre .
      '",
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
                  text:"No ha sido posible guardar al personaje",
                  showConfirmButton: false,
                  timer: 2000,
                }).then(function () {
                  window.location.href = "../html/usuario.php";
                })
                    </script>';
  }
}

?>