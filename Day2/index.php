<?php
// in folder path[php -S localhost:8000]
    $name="Mohammed";
    echo "<input type='text' value=$name>";
    if($name=="Mohammed"){echo"yes";}else{echo "no";}
    for($i=0;$i<5;$i++){
        echo "sohag"."<br>";
    }
     echo "Welcome";?>
    <?= "Welcome"."<hr>";

            $username="ali";
            $password=123456;
        ?>
    <form>
        <label for="username">Username</label>
        <input id="username" type="text" value="<?=$username;?>">
        <br>
        <br>
        <label for="pass">Password</label>
        <input id="pass" type="password" value="<?=$password;?>">
        <br>
        <br>
        <input type="submit" value="Login">
    </form>
