<?php
    var_dump($_GET["_ijt"]);
    if(isset($_GET["username"])&&isset($_GET["city"])){
        $username=$_GET["username"];
        $city=$_GET["city"];

        (empty($username))?$errors["username"]="your name must be mohammed":"";
        (empty($city))?$errors["city"]="your city must be sohag":"";
        if(isset($errors)){
            $urlerrors=urlencode(serialize($errors));
           header("Refresh:5;URL=index.php?errors=".$urlerrors);
        }else{
            echo "Welcome: $username you lived in $city";
        }
    }else{
        echo"you are not authorized to be here";
        header("Refresh:20;URL=index.php");

    }