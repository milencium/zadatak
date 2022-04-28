<?php

class BattleType {
    public function battleground(Army &$alliance, Army &$horde){}
}

class Storm extends BattleType {
    public function battleground(Army &$alliance, Army &$horde){
      
        $storm1 = $alliance->getAmmount() % 8 + random_int(1,8);
        $storm7 = $horde->getAmmount() % 8 + random_int(1,8);
        $i = 1;
        while($alliance->getAmmount() > 0 && $horde->getAmmount() > 0){
            $ammountOfFirst = $alliance->getAmmount();
            $ammountOfSecond = $horde->getAmmount();
            $damage = random_int($ammountOfFirst/7, $ammountOfFirst) + $storm1;                 $horde->setAmmount($ammountOfSecond - $damage);
            $damage = random_int($ammountOfSecond/7, $ammountOfSecond) + $storm7;
            $alliance->setAmmount($ammountOfFirst - $damage);
            $i += 1;
        }
    }
}

class FireBall extends BattleType {

    public function battleground(Army &$alliance, Army &$horde){
        $fireball = (($alliance->getAmmount() + $horde->getAmmount())/7) % 8;
        $i = 1;
        while($alliance->getAmmount() > 0 && $horde->getAmmount() > 0){
            $ammountOfFirst = $alliance->getAmmount();
            $ammountOfSecond = $horde->getAmmount();
            $damage = abs(random_int($ammountOfFirst/7, $ammountOfFirst) - $fireball);
            $horde->setAmmount($ammountOfSecond - $damage);
            $damage = abs(random_int($ammountOfSecond/7, $ammountOfSecond) - $fireball);     
            $alliance->setAmmount($ammountOfFirst - $damage);
            $i += 1;
    }
}
}


?>