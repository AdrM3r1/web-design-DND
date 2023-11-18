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
            <h4>Crea tu personaje <a href="" style="cursor: pointer; display: inline-block;" data-bs-toggle="modal" data-bs-target="#RecoModal">&#10068;</a>
            </h4>
            <form action="charCreation.php" method="post" id="PJcreator">
              <div class="container col-md-12">
                <div class="row justify-content-md-start">
                  <hr>
                  <div class="col-md-12"> 
                    NAME &nbsp; <input name="nombre" id="nombre" style="width:300px" type="text"> 
                    CLASS &nbsp; <input name="clase" id="clase" style="width:200px" type="text"> 
                    RACE &nbsp; <input name="raza" id="raza" style="width:200px" type="text"><br><br>
                    ARMOR CLASS &nbsp; <input name="armorClass" id="armorClass" style="width:70px" type="number"> 
                    LEVEL &nbsp; <input name="nivel" id="nivel" style="width:60px" type="number"> 
                    CURRENT HIT POINTS&nbsp; <input name="hitPoints" id="hitPoints" style="width:60px" type="number"> 
                    HIT DICE&nbsp; <input name="hitDice" id="hitDice" style="width:100px" type="text"> 
                    SPEED&nbsp; <input name="speed" id="speed" style="width:100px" type="number">
                    <hr>
                  </div>
                  <h5>INVENTORY AND/OR EQUIPMENT</h5>
                  <div class="col-md-12"><textarea style="width:100%" name="invent" id="invent"></textarea></div>
                  <h5> SPELLS </h5>
                  <div class="col-md-12"><textarea style="width:100%" name="spells" id="spells"></textarea></div>
                  <br><br>
                  <hr>
                  <button id="Enviar" name="Enviar" class="submitButton" type="submit">Enviar</button>
                  <button id="retorno" class="submitButton" type="button" value="volver">Volver</button>
            </form>
            <br>
            <br>
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
          <li style="color:greenyellow" class="breadcrumb-item active" aria-current="page">Crea tu personaje </li>
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
            <p> En este lugar podras crear y guardar tus personajes. <br> 
            <p> No olvides que en esta web en el apartado de herramientas en el primer acordeon en 'Todo para tu PJ',
              como en la parte superior dispones de los enlaces de la "wikipedia" de dnd, la calculadora de puntos, 
              el generador de nombre (si no tienes uno pensado). </p>
            <p>En la vista de tu cuenta, podras editar de vuelta tu personaje tanto si te olvidaste de algo,
               si estas jugando o quieres corregir algun detalle.</p>
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