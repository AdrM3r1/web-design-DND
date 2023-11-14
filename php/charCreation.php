<header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../scripts/dentrites.js'></script>
</header>

<?php 
include ("config.php");

if (isset($_POST)) {
    $asociadoa = $_COOKIE['nick'];
    $nivel = $_POST["nivel"];
    $nombre	= $_POST["nombre"];
    $raza	= $_POST["raza"];
    $alingment = $_POST["alingment"];
    $clase = $_POST["clase"];
    $armorClass	= $_POST["armorClass"];
    $initiative	= $_POST["initiative"];
    $speed = $_POST["speed"];
    $tempHitPoints = $_POST["tempHitPoints"];
    $currentHitPoints	= $_POST["currentHitPoints"];
    $hitDice = $_POST["hitDice"];
//death saves
    $succ1 = isset($_POST['succ1'])?true:false;
    $succ2 = isset($_POST['succ2'])?true:false;
    $succ3 = isset($_POST['succ3'])?true:false;
    $fail1 = isset($_POST['fail1'])?true:false;
    $fail2 = isset($_POST['fail2'])?true:false;
    $fail3 = isset($_POST['fail3'])?true:false;
//stats
    $strength	= $_POST["strength"];
    $strengthPlus	= $_POST["strengthPlus"];
    $dexterity = $_POST["dexterity"];
    $dexterityPlus = $_POST["dexterityPlus"];	
    $constitution = $_POST["constitution"];	
    $constitutionPlus = $_POST["constitutionPlus"];
    $intelligence = $_POST["intelligence"];
    $intelligencePlus = $_POST["intelligencePlus"];
    $wisdom	= $_POST["wisdom"];
    $wisdomPlus	= $_POST["wisdomPlus"];
    $charisma	= $_POST["charisma"];
    $charismaPlus	= $_POST["charismaPlus"];
//ins pro
    $inspiration = $_POST["inspiration"];
    $proficiency = $_POST["proficiency"];
//saving throws
    $svStrength	= $_POST["svStrength"];
    $svStrengthPlus = isset($_POST['svStrengthPlus'])?true:false;

    $svDexterity = $_POST["svDexterity"];
    $svDexterityPlus = isset($_POST['svDexterityPlus'])?true:false;

    $svConstitution	= $_POST["svConstitution"];
    $svConstitutionPlus = isset($_POST['svConstitutionPlus'])?true:false;

    $svIntelligence	= $_POST["svIntelligence"];
    $svIntelligencePlus = isset($_POST['svIntelligencePlus'])?true:false;

    $svWisdom	= $_POST["svWisdom"];
    $svWisdomPlus = isset($_POST['svWisdomPlus'])?true:false;

    $svCharisma	= $_POST["svCharisma"];
    $svCharismaPlus = isset($_POST['svCharismaPlus'])?true:false;
//skills
    $acrobatics	= $_POST["acrobatics"];
    $acrobaticsPlus = isset($_POST['acrobaticsPlus'])?true:false;

    $anHandling	= $_POST["anHandling"];
    $anHandlingPlus = isset($_POST['anHandlingPlus'])?true:false;

    $arcana	= $_POST["arcana"];
    $arcanaPlus = isset($_POST['arcanaPlus'])?true:false;

    $athletics = $_POST["athletics"];
    $athleticsPlus = isset($_POST['athleticsPlus'])?true:false;

    $deception = $_POST["deception"];
    $deceptionPlus = isset($_POST['deceptionPlus'])?true:false;

    $history = $_POST["history"];
    $historyPlus = isset($_POST['historyPlus'])?true:false;

    $insight = $_POST["insight"];
    $insightPlus = isset($_POST['insightPlus'])?true:false;

    $intimidation	= $_POST["intimidation"];
    $intimidationPlus = isset($_POST['intimidationPlus'])?true:false;

    $investigation	= $_POST["investigation"];
    $investigationPlus = isset($_POST['investigationPlus'])?true:false;

    $medicine	= $_POST["medicine"];
    $medicinePlus = isset($_POST['medicinePlus'])?true:false;

    $nature	= $_POST["nature"];
    $naturePlus = isset($_POST['naturePlus'])?true:false;

    $perception	= $_POST["perception"];
    $perceptionPlus = isset($_POST['perceptionPlus'])?true:false;

    $performance	= $_POST["performance"];
    $performancePlus = isset($_POST['performancePlus'])?true:false;

    $persuasion	= $_POST["persuasion"];
    $persuasionPlus = isset($_POST['persuasionPlus'])?true:false;

    $religion	= $_POST["religion"];
    $religionPlus = isset($_POST['religionPlus'])?true:false;

    $sleightHand	= $_POST["sleightHand"];
    $sleightHandPlus = isset($_POST['sleightHandPlus'])?true:false;

    $stealth	= $_POST["stealth"];
    $stealthPlus = isset($_POST['stealthPlus'])?true:false;

    $survival	= $_POST["survival"];
    $survivalPlus = isset($_POST['survivalPlus'])?true:false;
//money
    $electrum	= $_POST["electrum"];
    $platinum	= $_POST["platinum"];
    $gold	= $_POST["gold"];
    $silver	= $_POST["silver"];
    $copper	= $_POST["copper"];
//
    $passWisdom	= $_POST["passWisdom"];
    $otherProfLang = $_POST["otherProfLang"];
//
    $attacksSpellcast	= $_POST["attacksSpellcast"];
    $equipment = $_POST["equipment"];
    $personalityTraits = $_POST["personalityTraits"];
    $ideals	= $_POST["ideals"];
    $bonds = $_POST["bonds"];
    $flaws = $_POST["flaws"];
    $featsTraits	= $_POST["featsTraits"];
//
    $charApp	= $_POST["charApp"];
    $alliesOrgs	= $_POST["alliesOrgs"];
    $symbol	= $_POST["symbol"];
    $addFeatsTraits	= $_POST["addFeatsTraits"];
    $treasure	= $_POST["treasure"];
//
    $cantrips	= $_POST["cantrips"];
    $spellcastAbility	= $_POST["spellcastAbility"];
    $spellSaveDC	= $_POST["spellSaveDC"];
    $spellAttackBonus	= $_POST["spellAttackBonus"];
    $spellLv1	= $_POST["spellLv1"];
    $slot1LvFirst	= $_POST["slot1LvFirst"];
    $slot1LvSec	= $_POST["slot1LvSec"];
    $spellLv2	= $_POST["spellLv2"];
    $slot2LvFirst	= $_POST["slot2LvFirst"];
    $slot2LvSec	= $_POST["slot2LvSec"];
    $spellLv3	= $_POST["spellLv3"];
    $slot3LvFirst	= $_POST["slot3LvFirst"];
    $slot3LvSec	= $_POST["slot3LvSec"];
    $spellLv4	= $_POST["spellLv4"];
    $slot4LvFirst	= $_POST["slot4LvFirst"];
    $slot4LvSec	= $_POST["slot4LvSec"];
    $spellLv5	= $_POST["spellLv5"];
    $slot5LvFirst	= $_POST["slot5LvFirst"];
    $slot5LvSec	= $_POST["slot5LvSec"];
    $spellLv6	= $_POST["spellLv6"];
    $slot6LvFirst	= $_POST["slot6LvFirst"];
    $slot6LvSec	= $_POST["slot6LvSec"];
    $spellLv7	= $_POST["spellLv7"];
    $slot7LvFirst	= $_POST["slot7LvFirst"];
    $slot7LvSec	= $_POST["slot7LvSec"];
    $spellLv8	= $_POST["spellLv8"];
    $slot8LvFirst	= $_POST["slot8LvFirst"];
    $slot8LvSec	= $_POST["slot8LvSec"];
    $spellLv9	= $_POST["spellLv9"];
    $slot9LvFirst	= $_POST["slot9LvFirst"];
    $slot9LvSec	= $_POST["slot9LvSec"];
    
    if ($nombre){
            // Password Hashing is used here.
          $sql = "INSERT INTO personajes_ (asociadoa,nivel,nombre,raza,alingment,clase,armorClass,initiative,speed,tempHitPoints,
          currentHitPoints,hitDice,succ1,succ2,succ3,fail1,fail2,fail3,strength,strengthPlus,dexterity,dexterityPlus,	
          constitution,constitutionPlus,intelligence,intelligencePlus,wisdom,wisdomPlus,charisma,charismaPlus,inspiration,	
          proficiency,svStrength,svStrengthPlus,svDexterity,svDexterityPlus,svConstitution,svConstitutionPlus,svIntelligence,	
          svIntelligencePlus,svWisdom,svWisdomPlus,svCharisma,svCharismaPlus,acrobatics,acrobaticsPlus,anHandling,anHandlingPlus,	
          arcana,arcanaPlus,athletics,athleticsPlus,deception,deceptionPlus,history,historyPlus,insight,insightPlus,intimidation,	
          intimidationPlus,investigation,investigationPlus,medicine,medicinePlus,nature,naturePlus,perception,perceptionPlus,	            
          performance,performancePlus,persuasion,persuasionPlus,religion,religionPlus,sleightHand,sleightHandPlus,stealth,	
          stealthPlus,survival,survivalPlus,electrum,platinum,gold,silver,copper,passWisdom,otherProfLang,attacksSpellcast,	
          equipment,personalityTraits,ideals,bonds,flaws,featsTraits,charApp,alliesOrgs,symbol,addFeatsTraits,treasure,	
          cantrips,spellcastAbility,spellSaveDC,spellAttackBonus,spellLv1,slot1LvFirst,slot1LvSec,spellLv2,slot2LvFirst,	
          slot2LvSec,spellLv3,slot3LvFirst,slot3LvSec,spellLv4,slot4LvFirst,slot4LvSec,spellLv5,slot5LvFirst,slot5LvSec,	
          spellLv6,slot6LvFirst,slot6LvSec,spellLv7,slot7LvFirst,slot7LvSec,spellLv8,slot8LvFirst,slot8LvSec,spellLv9,
          slot9LvFirst,slot9LvSec	) VALUES('$asociadoa','$nivel','$nombre','$raza','$alingment','$clase','$armorClass','$initiative',
          '$speed','$tempHitPoints','$currentHitPoints','$hitDice','$succ1','$succ2','$succ3','$fail1','$fail2','$fail3',
          '$strength','$strengthPlus','$dexterity','$dexterityPlus','$constitution','$constitutionPlus','$intelligence',
          '$intelligencePlus','$wisdom','$wisdomPlus','$charisma','$charismaPlus','$inspiration','$proficiency','$svStrength',
          '$svStrengthPlus','$svDexterity','$svDexterityPlus','$svConstitution','$svConstitutionPlus','$svIntelligence',
          '$svIntelligencePlus','$svWisdom','$svWisdomPlus','$svCharisma','$svCharismaPlus','$acrobatics','$acrobaticsPlus',
          '$anHandling','$anHandlingPlus','$arcana','$arcanaPlus','$athletics','$athleticsPlus','$deception','$deceptionPlus',
          '$history','$historyPlus','$insight','$insightPlus','$intimidation','$intimidationPlus','$investigation',
          '$investigationPlus','$medicine','$medicinePlus','$nature','$naturePlus','$perception','$perceptionPlus',
          '$performance','$performancePlus','$persuasion','$persuasionPlus','$religion','$religionPlus','$sleightHand',
          '$sleightHandPlus','$stealth','$stealthPlus','$survival','$survivalPlus','$electrum','$platinum','$gold',
          '$silver','$copper','$passWisdom','$otherProfLang','$attacksSpellcast','$equipment','$personalityTraits',
          '$ideals','$bonds','$flaws','$featsTraits','$charApp','$alliesOrgs','$symbol','$addFeatsTraits','$treasure',
          '$cantrips','$spellcastAbility','$spellSaveDC','$spellAttackBonus','$spellLv1','$slot1LvFirst','$slot1LvSec',
          '$spellLv2','$slot2LvFirst','$slot2LvSec','$spellLv3','$slot3LvFirst','$slot3LvSec','$spellLv4','$slot4LvFirst',
          '$slot4LvSec','$spellLv5','$slot5LvFirst','$slot5LvSec','$spellLv6','$slot6LvFirst','$slot6LvSec','$spellLv7',
          '$slot7LvFirst','$slot7LvSec','$spellLv8','$slot8LvFirst','$slot8LvSec','$spellLv9','$slot9LvFirst',
          '$slot9LvSec')";  

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
                  icon: "danger",
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
    } 
        //WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP WIP

    ?>