<?php
session_start();
if(isset($_POST["login"])){
    if(!empty($_POST["username"])&&!empty($_POST["password"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if($username=="mohammed"&&$password==123456){
            $_SESSION["user"]=$username;
            $_SESSION["pass"]=$password;
            echo "Successful Login";
            header("Location:profile.php");
        }else{

            echo"your username or password is wrong";
            header("Refresh: 2;URL= index.php");
        }

    }else{
        echo"please enter login info";
        header("Refresh: 2;URL= index.php");
    }
}

?>