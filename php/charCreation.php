<header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../scripts/dentrites.js'></script>
</header>

<?php 

include ("config.php");

if (isset($_POST['Enviar'])) {
    $asociadoa = $_COOKIE['nick'];
    $nombre	= $_POST['nombre'];
    $raza = $_POST['raza'];
    $clase = $_POST['clase'];
    $armorClass	= $_POST['armorClass'];
    $nivel = $_POST['nivel'];
    $hitPoints = $_POST['hitPoints'];
    $hitDice = $_POST['hitDice'];
    $speed = $_POST['speed'];
    
          $sql = "INSERT INTO tabla_pj (asociadoa,nombre,raza,clase,armorClass,nivel,hitPoints,hitDice,speed)
           VALUES('$asociadoa','$nombre','$raza','$clase','$armorClass','$nivel','$hitPoints','$hitDice','$speed')";  

      $result = mysqli_query($conn, $sql);
    

            if ($result) { 
            echo' <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Personaje creado",
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