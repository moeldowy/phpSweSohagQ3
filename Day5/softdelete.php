<?php
require_once "connection.php";
    $queryString=$connection->prepare("UPDATE users SET status=? WHERE id=?");
    $id=$_GET["id"];
    $status=0;
    $queryString->execute([$status,$id]);
    header("Location: index.php");


