<?php
 /*   //echo "Hi SWE Q3";
    const x=2;
    //const x=3;
    define("y",10);
    echo(y)."<br>";
    echo(x)."<br>";
    //datatypes string,integer,boolean scalar datatype
    // array, object compound datatype
    //speacial datype resource
    $name="Mohammed Salah";
   // $name="Ali Salah";
    const CLUB="Ahly";
    define("MYNAME","ALi");
    $age=20;
    $married=true;
    $childs=[2,3,5];
    echo "Myclub".": ".CLUB."<br>";
    echo gettype($childs);*/
    class User{}
class Car{}
    $x = new Car();
    //echo gettype($ali);
if($x instanceof Car){
    echo"yes";
}else{
    echo"no";
}
//    $x=[1,2,"dsf"];
//    $y=3;
//    //expect there are two vars x and y please sum x and y
//    echo gettype($x)."<br>";
//    var_dump($x);
    //echo $x+$y;
    //global , local and static
    $degree=2;//global scoop
    function clacSum(){
        $degree=3;//local scoop
        global $degree;
        echo  $degree;
    }

//clacSum();
$age=22;
    function calcAge(){
        static $age=10;
        $age++;
        return $age;
    }
    //we should raise age by one yearve when we call
    // clacAge function every year [cron job]
//    echo calcAge();
//    echo "<br>";
//    echo calcAge();
//    echo "<br>";
//    echo calcAge();
    $x=5;
    $y=&$x;
    $x=6;
    $x=8;
    unset($x);
    $x=10;
    echo $y;
    ?>
<form method="get" action="second.php">
   Username: <input type="text" name="username"><br>
    Password:<input type="password" name="password"><br>
    <input type="submit" value="login">
</form>
