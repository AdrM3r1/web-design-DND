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
          <form action="../php/charCreation.php" method="post" id="PJcreator">
            <div class="container col-md-12">
              <div class="row justify-content-md-start">
                <hr>
                <div class="col-md-12">
                  NAME &nbsp;<input name="nombre" id="nombre" style="width:300px" type="text">
                  CLASS &nbsp;<input name="clase" id="clase" style="width:200px" type="text">
                  RACE &nbsp;<input name="raza" id="raza" style="width:200px" type="text"><br><br>
                  ALINGMENT &nbsp;<input name="alingment" id="alingment" style="width:200px" type="text">
                  ARMOR CLASS &nbsp;<input name="armorClass" id="armorClass" style="width:70px" type="number">
                  INITIATIVE &nbsp;<input name="initiative" id="initiative" style="width:60px" type="number">
                  SPEED &nbsp;<input name="speed" id="speed" style="width:60px" type="number">
                  LEVEL &nbsp;<input name="nivel" id="nivel" style="width:60px" type="number">
                  <br><br>
                </div>
                <hr>
                <div class="col-md-3">
                  TEMPORARY HIT POINTS&nbsp;
                  <input name="tempHitPoints" id="tempHitPoints" style="width:100px" type="number">
                </div>
                <div class="col-md-3">
                  CURRENT HIT POINTS &nbsp;<input name="currentHitPoints" id="currentHitPoints" style="width:100px" type="number">
                </div>
                <div class="col-md-2">
                  HIT DICE &nbsp;<input name="hitDice" id="hitDice" style="width:100px" type="text"><br><br>
                </div>

                <div class="col-md-3">
                  DEATH SAVES<br>
                  SUCESS &nbsp; <input name="succ1" id="succ1" type="checkbox"> <input name="succ2" id="succ2" type="checkbox"> 
                  <input name="succ3" id="succ3" type="checkbox"><br>
                  FAILS &nbsp;<input name="fail1" id="fail1" type="checkbox"> <input name="fail2" id="fail2" type="checkbox"> 
                  <input name="fail3" id="fail3" type="checkbox">
                </div>

                <!-- division -->
                <hr>
                <div class="col-md-2">
                  STRENGTH
                  <br><input name="strength" id="strength" style="width:70px" type="number"> <br>
                  +<input name="strengthPlus" id="strengthPlus" style="width:45px" type="number">
                </div>

                <div class="col-md-2">
                  DEXTERITY
                  <br><input name="dexterity" id="dexterity" style="width:70px" type="number"><br>
                  +<input name="dexterityPlus" id="dexterityPlus" style="width:45px" type="number">
                </div>

                <div class="col-md-2">
                  CONSTITUTION
                  <input name="constitution" id="constitution" style="width:70px" type="number"><br>
                  +<input name="constitutionPlus" id="constitutionPlus" style="width:45px" type="number">
                </div>

                <div class="col-md-2">
                  INTELLIGENCE
                  <input name="intelligence" id="intelligence" style="width:70px" type="number"><br>
                  +<input name="intelligencePlus" id="intelligencePlus" style="width:45px" type="number">
                </div>

                <div class="col-md-2">
                  WISDOM
                  <br><input name="wisdom" id="wisdom" style="width:70px" type="number"><br>
                  +<input name="wisdomPlus" id="wisdomPlus" style="width:45px" type="number">
                </div>

                <div class="col-md-2">
                  CHARISMA
                  <br><input name="charisma" id="charisma" style="width:70px" type="number"><br>
                  +<input name="charismaPlus" id="charismaPlus" style="width:45px" type="number"><br><br>
                </div>
                <hr>

                <!-- division -->

                <div class="col-md-3"><br>
                  INSPIRATION
                  &nbsp;<input name="inspiration" id="inspiration" style="width:80px" type="number">
                </div>

                <div class="col-md-6"><br>
                  PROFICIENCY BONUS
                  &nbsp;<input name="proficiency" id="proficiency" style="width:80px" type="number"><br><br>
                </div>

                <h5 style="padding:0px;margin:10px">SAVING THROWS</h5>
                <hr>

                <div class="col-md-2">
                  <input name="svStrengthPlus" id="svStrengthPlus" type="checkbox">STRENGH <br>
                  <input name="svStrength" id="svStrength" style="width:50px" type="number"><br>
                </div>

                <div class="col-md-2">
                  <input name="svDexterityPlus" id="svDexterityPlus" type="checkbox">DEXTERITY <br>
                  <input name="svDexterity" id="svDexterity" style="width:50px" type="number"><br>
                </div>

                <div class="col-md-2">
                  <input name="svConstitutionPlus" id="svConstitutionPlus" type="checkbox">CONSTITUTION <br>
                  <input name="svConstitution" id="svConstitution" style="width:50px" type="number"><br>
                </div>

                <div class="col-md-2">
                  <input name="svIntelligencePlus" id="svIntelligencePlus" type="checkbox">INTELLIGENCE <br>
                  <input name="svIntelligence" id="svIntelligence" style="width:50px" type="number"><br>
                </div>

                <div class="col-md-2">
                  <input name="svWisdomPlus" id="svWisdomPlus" type="checkbox">WISDOM <br>
                  <input name="svWisdom" id="svWisdom" style="width:50px" type="number"><br>
                </div>

                <div class="col-md-2">
                  <input name="svCharismaPlus" id="svCharismaPlus" type="checkbox">CHARISMA<br>
                  <input name="svCharisma" id="svCharisma" style="width:50px" type="number"><br><br>
                </div>
                <!-- division -->

                <h4>Skills</h4>
                <hr>

                <div class="col-md-4">
                  <input name="acrobaticsPlus" id="acrobaticsPlus" type="checkbox">ACROBATICS (Dex) <br>
                  <input name="acrobatics" id="acrobatics" style="width:50px" type="number"><br>
                  <input name="anHandlingPlus" id="anHandlingPlus" type="checkbox">ANIMAL HANDLING (Wis)<br> 
                  <input name="anHandling" id="anHandling" style="width:50px" type="number"><br>
                  <input name="arcanaPlus" id="arcanaPlus" type="checkbox">ARCANA (Int)<br> 
                  <input name="arcana" id="arcana" style="width:50px" type="number"><br>
                  <input name="athleticsPlus" id="athleticsPlus" type="checkbox">ATHLETICS (Str)<br> 
                  <input name="athletics" id="athletics" style="width:50px" type="number"><br>
                  <input name="deceptionPlus" id="deceptionPlus" type="checkbox">DECEPTION (Cha)<br> 
                  <input name="deception" id="deception" style="width:50px" type="number"><br>
                  <input name="historyPlus" id="historyPlus" type="checkbox">HISTORY (Int)<br> 
                  <input name="history" id="history" style="width:50px" type="number"><br>
                </div>

                <div class="col-md-4">
                  <input name="insightPlus" id="insightPlus" type="checkbox">INSIGHT (Wis)<br> 
                  <input name="insight" id="insight" style="width:50px" type="number"><br>
                  <input name="intimidationPlus" id="intimidationPlus" type="checkbox">INTIMIDATION (Cha)<br> 
                  <input name="intimidation" id="intimidation" style="width:50px" type="number"><br>
                  <input name="investigationPlus" id="investigationPlus" type="checkbox">INVESTIGATION (Int)<br> 
                  <input name="investigation" id="investigation" style="width:50px" type="number"><br>
                  <input name="medicinePlus" id="medicinePlus" type="checkbox">MEDICINE (Wis)<br> 
                  <input name="medicine" id="medicine" style="width:50px" type="number"><br>
                  <input name="naturePlus" id="naturePlus" type="checkbox">NATURE (Int)<br> 
                  <input name="nature" id="nature" style="width:50px" type="number"><br>
                  <input name="perceptionPlus" id="perceptionPlus" type="checkbox">PERCEPTION (Wis)<br> 
                  <input name="perception" id="perception" style="width:50px" type="number"><br>
                </div>

                <div class="col-md-4">
                  <input name="performancePlus" id="perfomancePlus" type="checkbox">PERFORMANCE (Cha)<br> 
                  <input name="performance" id="performance" style="width:50px" type="number"><br>
                  <input name="persuasionPlus" id="persuasionPlus" type="checkbox">PERSUASION (Cha)<br> 
                  <input name="persuasion" id="persuasion" style="width:50px" type="number"><br>
                  <input name="religionPlus" id="religionPlus" type="checkbox">RELIGION (Int)<br> 
                  <input name="religion" id="religion" style="width:50px" type="number"><br>
                  <input name="sleightHandPlus" id="sleightHandPlus" type="checkbox">SLEIGHT OF HAND (Dex)<br> 
                  <input name="sleightHand" id="sleightHand" style="width:50px" type="number"><br>
                  <input name="stealthPlus" id="stealthPlus" type="checkbox">STEALTH (Dex)<br> 
                  <input name="stealth" id="stealth" style="width:50px" type="number"><br>
                  <input name="survivalPlus" id="survivalPlus" type="checkbox">SURVIVAL (Wis)<br> 
                  <input name="survival" id="survival" style="width:50px" type="number"><br><br>
                </div>
                <!-- division -->
                <hr>
                <div class="col-md-4">
                  PASSIVE WISDOM (PERCEPTION)
                  <input name="passWisdom" id="passWisdom" style="width:75px" type="number">
                </div>

                <div class="col-md-5">
                  OTHER PROFICIENCIES & LANGUAGES
                  <textarea name="otherProfLang" id="otherProfLang" style="width:100%"></textarea><br><br>
                </div>
                <hr>
                <!-- division -->

                <div class="col-md-12">
                  MONEY<br>
                  ELECTRUM &nbsp;<input name="electrum" id="electrum"  style="width:70px" type="number">
                  PLATINUM &nbsp;<input name="platinum" id="platinum" style="width:70px" type="number">
                  GOLD &nbsp;<input name="gold" id="gold" style="width:70px" type="number">
                  SILVER &nbsp;<input name="silver" id="silver" style="width:70px" type="number">
                  COPPER &nbsp;<input name="copper" id="copper" style="width:70px" type="number"><br><br>
                </div>
                <hr>

                <div class="col-md-6">
                  ATTACKS & SPELLCASTING
                  <textarea name="attacksSpellcast" id="attacksSpellcast"  style="width:100%"></textarea>
                </div>

                <div class="col-md-6">
                  EQUIPMENT
                  <textarea name="equipment" id="equipment" style="width:100%"></textarea>
                </div>

                <!-- division -->

                <div class="col-md-6">
                  PERSONALITY TRAITS
                  <textarea name="personalityTraits" id="personalityTraits" style="width:100%"></textarea>
                </div>

                <div class="col-md-6">
                  IDEALS
                  <textarea name="ideals" id="ideals" style="width:100%"></textarea>
                </div>

                <div class="col-md-4">
                  BONDS
                  <textarea name="bonds" id="bonds" style="width:100%"></textarea>
                </div>

                <div class="col-md-4">
                  FLAWS
                  <textarea name="flaws" id="flaws" style="width:100%"></textarea>
                </div>

                <div class="col-md-4">
                  FEATURES & TRAITS
                  <textarea name="featsTraits" id="featsTraits" style="width:100%"></textarea><br><br>
                </div>

                <!-- division -->

                <hr>

                <div class="col-md-5">
                  CHARACTER APPEARANCE
                  <textarea name="charApp" id="charApp" style="width:100%"></textarea>
                </div>

                <div class="col-md-4">
                  ALLIES & ORGANIZATIONS
                  <textarea name="alliesOrgs" id="alliesOrgs" style="width:100%"></textarea>
                </div>

                <div class="col-md-3">
                  SYMBOL
                  <textarea name="symbol" id="symbol" style="width:100%"></textarea>
                </div>

                <div class="col-md-5">
                  ADDITIONAL FEATURES & TRAITS
                  <textarea name="addFeatsTraits" id="addFeatsTraits" style="width:100%"></textarea>
                </div>

                <div class="col-md-5">
                  TREASURE
                  <textarea name="treasure" id="treasure" style="width:100%"></textarea><br><br>
                </div>

                <!-- division -->

                <hr>

                <div class="col-md-6">
                  CANTRIPS
                  <textarea name="cantrips" id="cantrips" style="width:100%"></textarea>
                </div>

                <div class="col-md-2">
                  SPELLCASTING ABILITY<br>
                  <input name="spellcastAbility" id="spellcastAbility" style="width:55px" type="text"><br>
                </div>

                <div class="col-md-2">
                  SPELL SAVE <br> DC <br>
                  <input name="spellSaveDC" id="spellSaveDC" style="width:55px" type="number"><br>
                </div>

                <div class="col-md-2">
                  SPELL ATTACK BONUS<br>
                  <input name="spellAttackBonus" id="spellAttackBonus" style="width:55px" type="number"><br>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV1 <br>SLOTS
                  <input type="number" name="slot1LvFirst" id="slot1LvFirst" style="width:10%"> / 
                  <input type="number" name="slot1LvSec" id="slot1LvSec" style="width:10%">
                  <textarea name="spellLv1" id="spellLv1" style="width:100%"></textarea>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV2 <br>SLOTS
                  <input type="number" name="slot2LvFirst" id="slot2LvFirst" style="width:10%"> / 
                  <input type="number" name="slot2LvSec" id="slot2LvSec" style="width:10%">
                  <textarea name="spellLv2" id="spellLv2" style="width:100%"></textarea>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV3 <br>SLOTS
                  <input type="number" name="slot3LvFirst" id="slot3LvFirst" style="width:10%"> / 
                  <input type="number" name="slot3LvSec" id="slot3LvSec" style="width:10%">
                  <textarea name="spellLv3" id="spellLv3" style="width:100%"></textarea>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV4 <br>SLOTS
                  <input type="number" name="slot4LvFirst" id="slot4LvFirst" style="width:10%"> / 
                  <input type="number" name="slot4LvSec" id="slot4LvSec" style="width:10%">
                  <textarea name="spellLv4" id="spellLv4" style="width:100%"></textarea>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV5 <br>SLOTS
                  <input type="number" name="slot5LvFirst" id="slot5LvFirst" style="width:10%"> / 
                  <input type="number" name="slot5LvSec" id="slot5LvSec" style="width:10%">
                  <textarea name="spellLv5" id="spellLv5" style="width:100%"></textarea>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV6 <br>SLOTS
                  <input type="number" name="slot6LvFirst" id="slot6LvFirst" style="width:10%"> / 
                  <input type="number" name="slot6LvSec" id="slot6LvSec" style="width:10%">
                  <textarea name="spellLv6" id="spellLv6" style="width:100%"></textarea>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV7 <br>SLOTS
                  <input type="number" name="slot7LvFirst" id="slot7LvFirst" style="width:10%"> / 
                  <input type="number" name="slot7LvSec" id="slot7LvSec" style="width:10%">
                  <textarea name="spellLv7" id="spellLv7" style="width:100%"></textarea>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV8 <br>SLOTS
                  <input type="number" name="slot8LvFirst" id="slot8LvFirst" style="width:10%"> / 
                  <input type="number" name="slot8LvSec" id="slot8LvSec" style="width:10%">
                  <textarea name="spellLv8" id="spellLv8" style="width:100%"></textarea>
                </div>

                <div class="col-md-6"><br>
                  SPELLS LV9 <br>SLOTS
                  <input type="number" name="slot9LvFirst" id="slot9LvFirst" style="width:10%"> / 
                  <input type="number" name="slot9LvSec" id="slot9LvSec" style="width:10%">
                  <textarea name="spellLv9" id="spellLv9" style="width:100%"></textarea><br><br>
                </div>

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
    $('#retorno').click(function () {
      window.location.href = "usuario.php";
    })

  </script>
</body>

</html>