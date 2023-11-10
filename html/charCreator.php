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
                    <ul><li class="itemNav" role="menuitem"><a href="http://dnd5e.wikidot.com/"  target="_blank"> Wiki DnD</a></li> 
                    <li class="itemNav" role="menuitem"><a href="https://es.fantasynamegenerators.com/" target="_blank">Generador de nombre</a></li> 
                    <li class="itemNav" role="menuitem"><a href="https://chicken-dinner.com/5e/5e-point-buy.html" target="_blank">Calculadora de puntos</a></li>
                    <li class="itemNav" role="menuitem" ><a href="usuario.php">Volver</a></li></ul>
                <div class="io">
                            <h5>Crea tu personaje <a href="" style="cursor: pointer; display: inline-block;" data-bs-toggle="modal"
                              data-bs-target="#RecoModal">&#10068;</a></h5>
                    <div class="container col-md-12">
                        <div class="row justify-content-md-start">
                            <hr>
<div class="col-md-8">
    Name 
    Class 
    Race 
    Alingment 
</div>
<br><br>
<div class="col-md-12">
STRENGTH
+-
DEXTERITY
+-
CONSTITUTION
+-
INTELLIGENCE
+-
WISDOM
+-
CHARISMA
+-
</div>
<br><br>
<div class="col-md-3">
Inspiration
Proeficiency
</div>
<br><br>
<div class="col-md-8">
Strength
Dexterity
Constitution
Intelligence
Wisdom
Charisma
saving throws
</div>
<br><br>
<div class="col-md-2">
Acrobatics (Dex)
Animal Handling (Wis)
Arcana (Int)
Athletics (Str)
Deception (Cha)
History (Int)
Insight (Wis)
Intimidation (Cha)
Investigation (Int)
</div>
<br><br>
<div class="col-md-2">
Medicine (Wis)
Nature (Int)
Perception (Wis)
Performance (Cha)
Persuasion (Cha)
Religion (Int)
Sleight of Hand (Dex)
Stealth (Dex)
Survival (Wis)
</div>
<br><br>
<div class="col-md-3">
PASSIVE WISDOM (PERCEPTION)
</div>
<br><br>
<div class="col-md-5">
OTHER PROFICIENCIES & LANGUAGES
<textarea></textarea>
</div>
<br><br>
<div class="col-md-2">
ARMOR
CLASS
</div>
<br><br>
<div class="col-md-2">
INITIATIVE
</div>
<br><br>
<div class="col-md-2">
SPEED
</div>
<br><br>
<div class="col-md-2">
CURRENT HIT POINTS
</div>
<br><br>
<div class="col-md-2">
TEMPORARY HIT POINTS
</div>
<br><br>
<div class="col-md-2">
HIT DICE
</div>
<br><br>
<div class="col-md-2">
DEATH SAVES
</div>
<br><br>
<div class="col-md-4">
ATTACKS & SPELLCASTING
</div>
<br><br>

<div class="col-md-3">
EQUIPMENT
<textarea></textarea>
</div>
<br><br>

<div class="col-md-5">
PERSONALITY TRAITS
</div>
<br><br>
<div class="col-md-5">
IDEALS
</div>
<br><br>
<div class="col-md-5">
BONDS
</div>
<br><br>
<div class="col-md-5">
FLAWS
</div>
<br><br>

<div class="col-md-5">
FEATURES & TRAITS
</div>
<br><br>
<hr>











































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
            Dentro de este espacio tendras que rellenar todos los campos que sean necesarios para tu personaje de campaña, o 
            si estas experimentando creando otros aventureros por diversion, o simplemente quieres probar este apartado.</p>
            <p>
            No olvides que en esta web en el apartado de herramientas en el primer acordeon en 'Todo para tu PJ',
            como en la parte superior dispones de los enlaces de la "wikipedia" de dnd, la calculadora de puntos,
            el generador de nombre (si no tienes uno pensado).
          </p>
          <p>En la vista de tu cuenta, podras editar de vuelta tu personaje tanto si te olvidaste de algo, si estas jugando 
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
</body>

</html>