<!DOCTYPE html>
<html>
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
            <li class="itemNav" role="menuitem">
              <a href="http://dnd5e.wikidot.com/" target="_blank"> Wiki DnD</a>
            </li>
            <li class="itemNav" role="menuitem">
              <a href="https://es.fantasynamegenerators.com/" target="_blank">Generador de nombre</a>
            </li>
            <li class="itemNav" role="menuitem">
              <a href="https://chicken-dinner.com/5e/5e-point-buy.html" target="_blank">Calculadora de puntos</a>
            </li>
            <li class="itemNav" role="menuitem">
              <a href="../html/usuario.php">Volver</a>
            </li>
          </ul>
          <div class="io">
            <h4>Edita tu personaje <a href="" style="cursor: pointer; display: inline-block;" data-bs-toggle="modal" data-bs-target="#RecoModal">&#10068;</a>
            </h4>
            <form action="charEdition.php" method="post" id="PJeditor">
              <div class="container col-md-12">
                <div class="row justify-content-md-start">
                  <hr> <?php 
                    include("config.php");
                    $id = $_GET['id'];

                    $sql = "Select * from tabla_pj where id = $id and asociadoa= '$_COOKIE[nick]';";
                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);  
                    if($count != 0){
                    while ($row = mysqli_fetch_array($result)) {
                  ?> <div class="col-md-12"> 
                    NAME &nbsp; <input name="nombre" id="nombre" style="width:300px" type="text" value="<?php echo $row['nombre'] ?>"> 
                    CLASS &nbsp; <input name="clase" id="clase" style="width:200px" type="text" value="<?php echo $row['clase'] ?>"> 
                    RACE &nbsp; <input name="raza" id="raza" style="width:200px" type="text" value="<?php echo $row['raza'] ?>">
                    <br>
                    <br> ARMOR CLASS &nbsp; <input name="armorClass" id="armorClass" style="width:70px" type="number" value="<?php echo $row['armorClass'] ?>"> 
                    LEVEL &nbsp; <input name="nivel" id="nivel" style="width:60px" type="number" value="<?php echo $row['nivel'] ?>"> 
                    CURRENT HIT POINTS&nbsp; <input name="hitPoints" id="hitPoints" style="width:60px" type="number" value="<?php echo $row['hitPoints'] ?>"> 
                    HIT DICE&nbsp; <input name="hitDice" id="hitDice" style="width:100px" type="text" value="<?php echo $row['hitDice'] ?>"> 
                    SPEED&nbsp; <input name="speed" id="speed" style="width:100px" type="number" value="<?php echo $row['speed'] ?>">
                    <input style="display:none" ; name="id" id="id" style="width:60px" type="number" value="<?php echo $row['id'] ?>">
                    <hr>
                    <h5>INVENTORY AND/OR EQUIPMENT</h5>
                    <div class="col-md-12"><textarea style="width:100%" name="invent" id="invent"><?php echo $row['invent'] ?></textarea ></div>
                    <h5> SPELLS </h5>
                    <div class="col-md-12"><textarea style="width:100%" name="spells" id="spells"><?php echo $row['spells'] ?></textarea></div>
                  </div>
                  
                  <?php
                    }
                  }
                  ?><hr> <button id="Enviar" name="Enviar" class="submitButton" type="submit">Enviar</button>
                  <button id="retorno" class="submitButton" type="button" value="volver">Volver</button>
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
          <li class="breadcrumb-item">
            <a href="../html/usuario.php">Usuario</a>
          </li>
          <li style="color:greenyellow" class="breadcrumb-item active" aria-current="page">Edita tu personaje </li>
        </ol>
      </nav>
    </div>
    <!-- Modal de Recomedacion HTML -->
    <div class="modal fade" id="RecoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="RecoModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="RecoModalLabel">Bienvenido al creador de personajes</h4>
          </div>
          <div class="modal-body" style="font-size:20px">
            <p> En este lugar podras crear y guardar tus personajes. <br> Dentro de este espacio tendras que rellenar todos los campos que sean necesarios para tu personaje de campaña, o si estas experimentando creando otros aventureros por diversion, o simplemente quieres probar este apartado. </p>
            <p> No olvides que en esta web en el apartado de herramientas en el primer acordeon en 'Todo para tu PJ', como en la parte superior dispones de los enlaces de la "wikipedia" de dnd, la calculadora de puntos, el generador de nombre (si no tienes uno pensado). </p>
            <p>En la vista de tu cuenta, podras editar de vuelta tu personaje tanto si te olvidaste de algo, si estas jugando o quieres corregir algun detalle.</p>
            <p> No te preocupes y tomate tu tiempo para encontrar a tu aventurero deseado. </p>
          </div>
          <div class="modal-footer" style="font-size:18px">
            <p style="color:rgb(235, 160, 86); font-size:14px;">Haz click en aceptar una vez hayas leido y entendido el texto</p>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    <script>
      $('#retorno').click(function() {
        window.location.href = "../html/usuario.php";
      })
    </script>
  </body>
</html>