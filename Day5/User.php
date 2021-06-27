<?php
class User{
    public $username;
    public $name;
    public $password;
    public $birth_of_date;
    public $married;
    public $age;


    public function __construct(){
        $birth_of_date=$this->birth_of_date;
        $dif=date_diff(date_create($birth_of_date),date_create(date("Y-m-d")));
        $this->age=$dif->format('%y');
    }
    public function login($u_name,$u_pass){
    if($u_name=="heba"&&$u_pass==123){
        return "login successed";
    }else{
        return "denied access";
    }
    }
}
//$mohammed=new User(date("Y-m-d"),"28-09-1990");