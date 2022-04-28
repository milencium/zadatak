<?php

include "army.php";

$request1 = $_GET['Army1'];
$request2 = $_GET['Army2'];

$army1Object = new Army("Alliance", $request1);
$army2Object = new Army("Horde", $request2);
$resultObject = new Army();

$randomBattleNumber = random_int(1,2);
switch($randomBattleNumber){
    case 1:
        $randomBattle = new Storm();
    break;
  
    case 2:
        $randomBattle = new FireBall();
    break;
}

?>
<!DOCTYPE html>
<html>
<body>
    <?php 
        if($request1 > 0 && $request2 > 0){
             echo "<div class='result'><div class='title'><h1>The results:</h1></div>";
            $resultObject = battle($army1Object, $army2Object, $randomBattle);
            if($resultObject->getName() != "Neither"){
                echo "<h1> The <span>";
            }
            else{
                echo "<h1><span>";
            }
            echo $resultObject->getName() . "</span> army won the game battle! </h1><br>";
            echo "<p>The <span>first</span> army spawned with " . $request1 . " and was reduced to the " . $army1Object->getAmmount() . " players!</p>";
            echo "<p>The <span>second</span> army spawned with  " . $request2 .  " and was reduced to the  " . $army2Object->getAmmount() . " players!</p>";
        }
    ?> 
</div>
</body>
</html>

