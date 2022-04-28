<?php

include "battleType.php";

class Army{
    private string $name;  
    private int $ammount; 

    function __construct($name = null, $ammount = null) {
        if($name != null && $ammount != null){
            $this->name = $name;
            $this->ammount = $ammount;
        }
    }
    function getName(){
        return $this->name;
    }
  
    function getAmmount(){
        return $this->ammount;
    }
    function setAmmount($newAmmount){
        $this->ammount = $newAmmount;
    }
 
}

function battle(Army $alliance, Army $horde, BattleType $battletype){
    
    $battletype->battleground($alliance, $horde);

    if($alliance->getAmmount() <= 0 && $horde ->getAmmount() > 0){
        $alliance->setAmmount(0);
        return $horde;
    }

    else if($horde ->getAmmount() <= 0 && $alliance->getAmmount() > 0){
        $horde->setAmmount(0);
        return $alliance;
    }    
    
    else {
        $alliance->setAmmount(0);
        $horde->setAmmount(0);
        return new Army("Non of", 1);
    }

}

?>