<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='../scripts/dentrites.js'></script>
</header>

<?php
include "config.php";
/* variables para pasarlos a la llamada sql de insercion en la tabla de personajes */
if (isset($_POST["Enviar"])) {
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
  /* llamada de sql para insertar los valores a la tabla */
  $sql = "INSERT INTO tabla_pj (asociadoa,nombre,raza,clase,armorClass,nivel,hitPoints,hitDice,speed,spells,invent)
           VALUES('$asociadoa','$nombre','$raza','$clase','$armorClass','$nivel','$hitPoints','$hitDice','$speed','$spells','$invent')";

  $result = mysqli_query($conn, $sql);
  /* llamada de sql para insertar los valores a la tabla de 'historial de personajes'*/
  $sql2 = "INSERT INTO reg_uspj (asociadoa,nombre,raza,clase,nivel) VALUES('$asociadoa','$nombre','$raza','$clase','$nivel')";
  $result2 = mysqli_query($conn, $sql2);
  /* echo con sweetalert si ha podido crear personaje sale un mensaje si no sale otro*/
  if ($result) {
    echo '<script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Personaje creado",
                text:"' . $nombre . '",
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
                  text:"No ha sido posible crear al personaje",
                  showConfirmButton: false,
                  timer: 2000,
                }).then(function () {
                  window.location.href = "../html/usuario.php";
                })
                    </script>';
  }
}


?>