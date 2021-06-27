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
        if(isset($_GET["errors"])){$errors=unserialize($_GET["errors"]);}
    ?>
    <form method="get" action="profile.php">
        Username:<input type="text" name="username">
                <span style="color: red;"><?=(isset($errors["username"]))?$errors["username"]:"";?></span>
        <br>
        City:<input type="text" name="city">
                <span style="color: red;"><?=(isset($errors["city"]))?$errors["city"]:"";?></span>
        <br>
        <input type="submit" value="check" name="check">
    </form>
</body>
</html>