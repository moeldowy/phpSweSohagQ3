<?php
require_once "connection.php";
if(isset($_POST["update"])&& !empty($_POST)){
$queryString=$connection->prepare("UPDATE users SET name=?,username=?,password=?,birth_of_date=?,married=? WHERE id=?");
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$birth_of_date=$_POST["birth_of_date"];
$married=$_POST["married"];
$id=$_POST["id"];
    $queryString->execute([$name,$username,$password,$birth_of_date,$married,$id]);
    header("Location: index.php");
}else{
    echo "error in form";
}


