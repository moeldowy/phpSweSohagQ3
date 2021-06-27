<?php
$email="ali@gooogle.com00e";
echo filter_var($email,FILTER_SANITIZE_EMAIL)."<br>";
$valid_email=filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL);
echo $valid_email."<br>";
if($valid_email==false){
echo"falseeeee";
}else{
echo"good";
}
$married="no";
var_dump(str_repeat("*", strlen("asdsa"))); ;
$str = "not a tag < 5";
echo strip_tags($str);
$str=stripslashes($str);
echo filter_var($str,FILTER_SANITIZE_STRING)."<hr>";

$phone="01000765729";
//Egy phone pattern
$pattern="/^(01)[0-9]{9}$/";
//echo preg_match($pattern,$phone);
preg_match_all($pattern,$phone,$matches);
var_dump($matches);