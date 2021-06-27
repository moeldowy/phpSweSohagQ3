<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include ("menu.php");
?>
<h3>Contact Us</h3>
    <form>
        Name<input type="text"><br>
        Car model:
        <select>
            <?php
                for($year=1970;$year<=2021;$year++):?>
                    <option><?=$year?></option>
                <?php endfor;
            ?>
        </select>
        Subject<input type="text"><br>
        Message:<textarea></textarea><br>
        <input type="submit" value="send">
    </form>
</body>
</html>
<?php
/*for ($year=1970;$year<=2021;$year++){?>
    <option><?=$year?></option>
    <?php
}
?>