<header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../scripts/dentrites.js'></script>
</header>

<?php 

include ("config.php");

if (isset($_POST['Enviar'])) {
  $id = $_POST['id'];
  $asociadoa = $_COOKIE['nick'];
  $nombre	= $_POST['nombre'];
  $raza = $_POST['raza'];
  $clase = $_POST['clase'];
  $armorClass	= $_POST['armorClass'];
  $nivel = $_POST['nivel'];
  $hitPoints = $_POST['hitPoints'];
  $hitDice = $_POST['hitDice'];
  $speed = $_POST['speed'];


    $sql = "UPDATE tabla_pj SET nombre = '$nombre',clase = '$clase',raza = '$raza',
    armorClass = '$armorClass',nivel = '$nivel', hitPoints = '$hitPoints', hitDice= '$hitDice',speed = '$speed'
     WHERE id = '$id' and asociadoa = '$asociadoa'";

      $result = mysqli_query($conn, $sql);
        

            if ($result) { 
            echo' <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Personaje actualizado",
                text:"'.$nombre.'",
                showConfirmButton: false,
                timer: 2000,
              }).then(function () {
                window.location.href = "../html/usuario.php";
              })
                  </script>';
            } else{
              echo' <script>
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