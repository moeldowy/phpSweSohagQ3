<?php
try {
    $connection=new PDO('mysql:host=localhost;dbname=userdb;','root','');
}catch (PDOException $exception){
    echo $exception->getMessage();
}