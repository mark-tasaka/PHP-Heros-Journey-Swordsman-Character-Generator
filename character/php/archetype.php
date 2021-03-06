<?php

function getEndurance($level, $resolveMod)
{
    $bonusEndurance = ($level * $resolveMod);
    $endurance = 0;

    $enduranceLevel1 = 8;
    $enduranceLevel2 = 8 + rand(1, 8);
    $enduranceLevel3 = 8 + rand(1, 8) + rand(1, 8);

    switch ($level) 
    {
        case "1":
            $endurance = $enduranceLevel1;
          break;

        case "2":
            $endurance = $enduranceLevel2;
        break;
        
        case "3":
            $endurance = $enduranceLevel3;
        break;
        
        case "4":
            $endurance = $enduranceLevel3 + 2;
        break;
        
        case "5":
            $endurance = $enduranceLevel3 + 4;
        break;
        
        case "6":
            $endurance = $enduranceLevel3 + 6;
        break;        

        case "7":
            $endurance = $enduranceLevel3 + 8;
        break;
                
        case "8":
            $endurance = $enduranceLevel3 + 10;
        break;
                
        case "9":
            $endurance = $enduranceLevel3 + 12;
        break;
                
        case "10":
            $endurance = $enduranceLevel3 + 14;
        break;

        default:
          $endurance = 0;
      }

      $endurance += $bonusEndurance;

      return $endurance;

}


function getAttackBonus($level)
{
    $bonus = 1;

    if($level == 3)
    {
        $bonus = 2;
    }    
    else if($level >= 4 && $level <= 5)
    {
        $bonus = 3;
    }
    else if($level == 6)
    {
        $bonus = 4;
    }
    else if($level >= 7 && $level <= 8)
    {
        $bonus = 5;
    }
    else if($level == 9)
    {
        $bonus = 6;
    }
    else if($level == 10)
    {
        $bonus = 7;
    }
    else
    {
        $bonus = 0;
    }

    return $bonus;
}

function minimumClassScore($score)
{
    if($score < 8)
    {
        $score = 8;
    }

    return $score;
}


function minimumClassScore6($score)
{
    if($score < 6)
    {
        $score = 6;
    }

    return $score;
}



function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (16 - $levelInt);

    return $save;

}

function getXPBonus($abilityScore)
{
    $bonus = "";

    if($abilityScore > 14)
    {
        $bonus = "+5% bonus to Experience Points";
    }

    return $bonus;
}

function saveMessage()
{
    $message = "<span class='archetypeBold'>Saving Throw:</span> Advantage on saving throws to avoid or reduce the effects of traps (mundane or magical).<br/><br/>";

    return $message;
}

function getDefenseBonus($level)
{
    $bonus = 0;

    if($level == "1")
    {
        $bonus = 3;
    }
    else if($level == "2" || $level == "3")
    {
        $bonus = 4;
    }
    else if($level == "4" || $level == "5")
    {
        $bonus = 5;
    }
    else if($level == "6" || $level == "7")
    {
        $bonus = 6;
    }
    else if($level == "8" || $level == "9")
    {
        $bonus = 7;
    }
    else
    {
        $bonus = 8;
    }

    return $bonus;
}

function florentineStyle($score)
{
    $message = "";

    if($score >= 15)
    {
        $message = "<span class='archetypeBold'>Florentine Style:</span> Can fight with a short blade or dagger in the off-hand.<br/><br/>";
    }

    return $message;
}


function acrobatics($level)
{
    if($level == "1")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 1</span><br/><br/><span class='archetypeBold'>Defense Bonus: +3</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else if($level == "2")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 1</span><br/><br/><span class='archetypeBold'>Defense Bonus: +4</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else if($level == "3")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 2</span><br/><br/><span class='archetypeBold'>Defense Bonus: +4</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else if($level == "4")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 2</span><br/><br/><span class='archetypeBold'>Defense Bonus: +5</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else if($level == "5")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 3</span><br/><br/><span class='archetypeBold'>Defense Bonus: +5</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else if($level == "6")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 3</span><br/><br/><span class='archetypeBold'>Defense Bonus: +6</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else if($level == "7")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 4</span><br/><br/><span class='archetypeBold'>Defense Bonus: +6</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else if($level == "8")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 4</span><br/><br/><span class='archetypeBold'>Defense Bonus: +7</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else if($level == "9")
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 5</span><br/><br/><span class='archetypeBold'>Defense Bonus: +7</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }
    else
    {
        $lore = "<span class='archetypeBold'>Acrobatics: 5</span><br/><br/><span class='archetypeBold'>Defense Bonus</span><br/><br/><span class='archetypeBold'>Lightning Reflexes:</span> Can only be surprised on a roll of 1 on a d12.<br/><br/><span class='archetypeBold'>Master Swordsman:</span> +2 to hit and damage rolls when wielding a long or short blade.<br/><br/>";
    }

    return $lore;
}


?>