<!DOCTYPE html>
<html>
<body>
<div>
    <div>
        <h1>World of Warcraft : Bornfight</h1>
    </div>    
    
    <form method="get" action="battle.php">
            <div class="inputContainer">
                <label for="Army1">Alliance number of players:</label>
                <input type="number" id="Army1" name="Army1" required max="1000000"/><br/>
            </div>
            <div class="inputContainer">
                <label for="Army2">Horde number of players:</label>
                <input type="number" id="Army2" name="Army2" required max="1000000"/><br/>
            </div>
            
            <input type="submit" value="Let the battle begin" /><br><br>
    </form>
</div>
</body>
</html>