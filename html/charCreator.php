<!DOCTYPE html>
<html>

<?php 
include ("../php/config.php");
// if (isset($_POST)) {
//     //WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP
//     $user_Name = $_POST["nick"];
//     $user_Email = $_POST["email"];
//     $user_Password = $_POST["password"];
//     $user_Cpass = $_POST["cpass"];

//     $sql = "Select * from users_ where nick='$user_Name'";
//     $result = mysqli_query($conn, $sql);
//     $count_user = mysqli_num_rows($result);

//     $sql = "Select * from users_ where mail='$user_Email'";
//     $result = mysqli_query($conn, $sql);
//     $count_email = mysqli_num_rows($result);

//     $cookie_name = "nick";
//     $cookie_value = $user_Name;
//     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");;

//     if ($count_user == 0 && $count_email == 0) {
//         if ($user_Password == $user_Cpass) {
            
//             // Password Hashing is used here.
//             $sql = "INSERT INTO users_(nick, mail, pass) VALUES('$user_Name', '$user_Email','$user_Password')";

//             $result = mysqli_query($conn, $sql);

//             if ($result) { 
//             echo' <script>
//             Swal.fire({
//                 position: "center",
//                 icon: "success",
//                 title: "Personaje creado",
//                 text:"Bienvenido '.$user_Name.'",
//                 showConfirmButton: false,
//                 timer: 2000,
//               }).then(function () {
//                 window.location.href = "usuario.php";
//               })
                    
                        
//                   </script>';
//             }
//           }
//         }
//     } 
        //WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP

    ?>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>
    <| DND BUILDER |>
  </title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!--Estilos dados-->
  <link rel='stylesheet' type='text/css' media='screen' href='../styles/diceroll.css'>
  <!--estilo y js inicio-->
  <link rel='stylesheet' type='text/css' media='screen' href='../styles/pupils.css'>
  <script src='../scripts/dentrites.js'></script>
  <!--JQuery-->
  <script src="../lib/jquery-3.4.1.min.js"></script>
  <!--Bootstrap-->
  <script src='../scripts/bootstrap.bundle.js'></script>
  <link rel='stylesheet' type='text/css' media='screen' href='../styles/bootstrap.css'>
  <!--Sweet alert-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="website">
  <div>
    <h1 class="titulo">The Iris Of The Beholder </h1>
  </div>
  <div class="content">
    <!--content start-->
    <div class="row-cols-auto">
      <div id="divisor">
        <ul>
          <li class="itemNav" role="menuitem"><a href="http://dnd5e.wikidot.com/" target="_blank"> Wiki DnD</a></li>
          <li class="itemNav" role="menuitem"><a href="https://es.fantasynamegenerators.com/" target="_blank">Generador
              de nombre</a></li>
          <li class="itemNav" role="menuitem"><a href="https://chicken-dinner.com/5e/5e-point-buy.html"
              target="_blank">Calculadora de puntos</a></li>
          <li class="itemNav" role="menuitem"><a href="usuario.php">Volver</a></li>
        </ul>
        <div class="io">
          <h4>Crea tu personaje <a href="" style="cursor: pointer; display: inline-block;" data-bs-toggle="modal"
              data-bs-target="#RecoModal">&#10068;</a></h4>
        <form action="charCreator.php" method="post" id="PJcreator">
          <div class="container col-md-12">
            <div class="row justify-content-md-start">
              <hr>        
              <div class="col-md-12">
                NAME &nbsp;<input style="width:300px" type="text">
                CLASS &nbsp;<input style="width:200px" type="text">
                RACE &nbsp;<input style="width:200px" type="text"><br><br>
                ALINGMENT &nbsp;<input style="width:200px" type="text">
                ARMOR CLASS &nbsp;<input style="width:70px" type="number">
                INITIATIVE &nbsp;<input style="width:60px" type="number">
                SPEED &nbsp;<input style="width:60px" type="number">
                LEVEL &nbsp;<input style="width:60px" type="number">
                <br><br>
              </div>
              <hr>
              <div class="col-md-3">
                TEMPORARY HIT POINTS&nbsp;
                <input style="width:100px" type="number">
              </div>
              <div class="col-md-3">
                CURRENT HIT POINTS &nbsp;<input style="width:100px" type="number">
              </div>
              <div class="col-md-2">
                HIT DICE &nbsp;<input style="width:100px" type="text"><br><br>
              </div>

              <div class="col-md-3">
                DEATH SAVES<br>
                SUCESS &nbsp; <input type="checkbox"> <input type="checkbox"> <input type="checkbox"><br>
                FAILS &nbsp;<input type="checkbox"> <input type="checkbox"> <input type="checkbox">
              </div>

              <!-- division -->
              <hr>
              <div class="col-md-2">
                STRENGTH
                <br><input style="width:70px" type="number"> <br>
                +<input style="width:45px" type="number">
              </div>

              <div class="col-md-2">
                DEXTERITY
                <br><input style="width:70px" type="number"><br>
                +<input style="width:45px" type="number">
              </div>

              <div class="col-md-2">
                CONSTITUTION
                <input style="width:70px" type="number"><br>
                +<input style="width:45px" type="number">
              </div>

              <div class="col-md-2">
                INTELLIGENCE
                <input style="width:70px" type="number"><br>
                +<input style="width:45px" type="number">
              </div>

              <div class="col-md-2">
                WISDOM
                <br><input style="width:70px" type="number"><br>
                +<input style="width:45px" type="number">
              </div>

              <div class="col-md-2">
                CHARISMA
                <br><input style="width:70px" type="number"><br>
                +<input style="width:45px" type="number"><br><br>
              </div>
              <hr>

              <!-- division -->

              <div class="col-md-3"><br>
                INSPIRATION
                &nbsp;<input style="width:80px" type="number">
              </div>

              <div class="col-md-6"><br>
                PROFICIENCY BONUS
                &nbsp;<input style="width:80px" type="number"><br><br>
              </div>

              <h5 style="padding:0px;margin:10px">SAVING THROWS</h5>
              <hr>

              <div class="col-md-2">
                <input type="checkbox">STRENGH <br><input style="width:50px" type="number"><br>
              </div>

              <div class="col-md-2">
                <input type="checkbox">DEXTERITY <br><input style="width:50px" type="number"><br>
              </div>

              <div class="col-md-2">
                <input type="checkbox">CONSTITUTION <br><input style="width:50px" type="number"><br>
              </div>

              <div class="col-md-2">
                <input type="checkbox">INTELLIGENCE <br><input style="width:50px" type="number"><br>
              </div>

              <div class="col-md-2">
                <input type="checkbox">WISDOM <br><input style="width:50px" type="number"><br>
              </div>

              <div class="col-md-2">
                <input type="checkbox">CHARISMA<br><input style="width:50px" type="number"><br><br>
              </div>
              <!-- division -->

              <h4>Skills</h4>
              <hr>

              <div class="col-md-4">
                <input type="checkbox">ACROBATICS (Dex) <br><input style="width:50px" type="number"><br>
                <input type="checkbox">ANIMAL HANDLING (Wis)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">ARCANA (Int)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">ATHLETICS (Str)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">DECEPTION (Cha)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">HISTORY (Int)<br> <input style="width:50px" type="number"><br>
              </div>

              <div class="col-md-4">
                <input type="checkbox">INSIGHT (Wis)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">INTIMIDATION (Cha)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">INVESTIGATION (Int)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">MEDICINE (Wis)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">NATURE (Int)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">PERCEPTION (Wis)<br> <input style="width:50px" type="number"><br>
              </div>

              <div class="col-md-4">
                <input type="checkbox">PERFORMANCE (Cha)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">PERSUASION (Cha)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">RELIGION (Int)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">SLEIGHT OF HAND (Dex)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">STEALTH (Dex)<br> <input style="width:50px" type="number"><br>
                <input type="checkbox">SURVIVAL (Wis)<br> <input style="width:50px" type="number"><br><br>
              </div>
              <!-- division -->
              <hr>
              <div class="col-md-4">
                PASSIVE WISDOM (PERCEPTION)
                <input style="width:75px" type="number">
              </div>

              <div class="col-md-5">
                OTHER PROFICIENCIES & LANGUAGES
                <textarea style="width:100%"></textarea><br><br>
              </div>
              <hr>
              <!-- division -->

              <div class="col-md-12">
                MONEY<br>
                ELECTRUM &nbsp;<input style="width:70px" type="number">
                PLATINUM &nbsp;<input style="width:70px" type="number">
                GOLD &nbsp;<input style="width:70px" type="number">
                SILVER &nbsp;<input style="width:70px" type="number">
                COPPER &nbsp;<input style="width:70px" type="number"><br><br>
              </div>
              <hr>

              <div class="col-md-6">
                ATTACKS & SPELLCASTING
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6">
                EQUIPMENT
                <textarea style="width:100%"></textarea>
              </div>

              <!-- division -->

              <div class="col-md-6">
                PERSONALITY TRAITS
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6">
                IDEALS
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-4">
                BONDS
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-4">
                FLAWS
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-4">
                FEATURES & TRAITS
                <textarea style="width:100%"></textarea><br><br>
              </div>

              <!-- division -->

              <hr>

              <div class="col-md-5">
                CHARACTER APPEARANCE
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-4">
                ALLIES & ORGANIZATIONS
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-3">
                SYMBOL
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-5">
                ADDITIONAL FEATURES & TRAITS
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-5">
                TREASURE
                <textarea style="width:100%"></textarea><br><br>
              </div>

              <!-- division -->

              <hr>

              <div class="col-md-6">
                CANTRIPS
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-2">
                SPELLCASTING ABILITY<br><input style="width:55px" type="text"><br>
              </div>

              <div class="col-md-2">
                SPELL SAVE <br> DC <br><input style="width:55px" type="number"><br>
              </div>

              <div class="col-md-2">
                SPELL ATTACK BONUS<br><input style="width:55px" type="number"><br>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV1 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV2 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV3 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV4 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV5 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV6 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV7 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV8 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea>
              </div>

              <div class="col-md-6"><br>
                SPELLS LV9 <br>SLOTS<input type="number" style="width:10%"> / <input type="number" style="width:10%">
                <textarea style="width:100%"></textarea><br><br>
              </div>


<!-- poner botones de formulario comienzo de formulario y cierre, probar quecuando guarde lo mande ala bbdd-->
<!-- la bbdd tiene que pillar los valores de los todos los campos incluso los checkbox-->
<!-- asegurarse de que cuando vayas a editar llegen los campos marcados y que hagas un update a la bbdd  -->
<!-- el borrado deberia poder hacerse desde editar, creo que tambien deberia ser tambien desde usuario pero ok-->

  <button id="Enviar" class="submitButton" type="submit">Enviar</button>
  <button id="retorno" class="submitButton" type="button" value="volver">Volver</button>

</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="usuario.php">Usuario</a></li>
        <li style="color:greenyellow" class="breadcrumb-item active" aria-current="page">Crea tu personaje
        </li>
      </ol>
    </nav>
  </div>

  <!-- Modal de Recomedacion HTML -->
  <div class="modal fade" id="RecoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="RecoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="RecoModalLabel">Bienvenido al creador de personajes</h4>
        </div>
        <div class="modal-body" style="font-size:20px">
          <p>
            En este lugar podras crear y guardar tus personajes.<br>
            Dentro de este espacio tendras que rellenar todos los campos que sean necesarios para tu personaje de
            campaña, o
            si estas experimentando creando otros aventureros por diversion, o simplemente quieres probar este apartado.
          </p>
          <p>
            No olvides que en esta web en el apartado de herramientas en el primer acordeon en 'Todo para tu PJ',
            como en la parte superior dispones de los enlaces de la "wikipedia" de dnd, la calculadora de puntos,
            el generador de nombre (si no tienes uno pensado).
          </p>
          <p>En la vista de tu cuenta, podras editar de vuelta tu personaje tanto si te olvidaste de algo, si estas
            jugando
            o quieres corregir algun detalle.</p>
          <p>
            No te preocupes y tomate tu tiempo para encontrar a tu aventurero deseado.
          </p>

        </div>
        <div class="modal-footer" style="font-size:18px">
          <p style="color:rgb(235, 160, 86); font-size:14px;">Haz click en aceptar una vez hayas
            leido y entendido el texto</p>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    getCookie();
  </script>

<script>
      $('#retorno').click(function () {
      window.location.href = "usuario.php";
    })

</script>
</body>

</html>