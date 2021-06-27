<?php
session_start();
?>
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
    <h3>Welcome to Home Page</h3>
    <?php if(isset($_SESSION["user"])){
        echo "you are already logged in";
    }else{?>
        <form method="post" action="login.php">
            Username:<input type="text" name="username"><br>
            Password:<input type="password" name="password"><br>
            <input type="submit" value="Login" name="login">
        </form>
    <?php }

    ?>

</body>
</html>