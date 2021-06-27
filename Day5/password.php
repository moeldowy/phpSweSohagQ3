<?php
$password="abc";
$hashedPassword=password_hash($password,PASSWORD_DEFAULT);
var_dump($hashedPassword);
$hashedPassword2=password_hash($password,PASSWORD_BCRYPT);
var_dump($hashedPassword2);
$check =password_verify("ab3c",$hashedPassword2);

var_dump($check);