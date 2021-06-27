<?php
    require_once "connection.php";
    $queryString=$connection->prepare("DELETE FROM users WHERE id=?");
    $id=$_GET["id"];
    $queryString->execute([$id]);
    header("Location: index.php");
