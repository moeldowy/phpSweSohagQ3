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
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        Enter Email<input type="text" name="email"><br>
        Enter Phone<input type="tel" name="telephone">
        <input type="submit" value="Check" name="checked">
    </form>
    <?php

    if(isset($_POST["checked"])){
        $email=$_POST["email"];
        $telephone=$_POST["telephone"];
        $emailPattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        $telPattern="/^(010|012)[0-9]{8}$/";

        if(preg_match($telPattern,$telephone)==0){
            echo "Your phone number is not egyptian number";
        }else{echo $telephone;}
        if(preg_match($emailPattern,$email)==0){
            echo"please enter valid email";
        }else{
            echo $email;
        }
    }
    $pargraph="my,name,is,mohammed and my friend mohammed called mohammed too";
    $pattern="/mohammed/";
    preg_match_all($pattern,$pargraph,$matches);
    echo "<pre>";
    print_r($matches);
    $split=preg_split("/ /",$pargraph);
    var_dump($split);
    $afterReplace=preg_replace("/mohammed/","**",$pargraph);
    var_dump($afterReplace);
    ?>
</body>
</html>