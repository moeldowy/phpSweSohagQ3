<?php
include ("User.php");
try {
    $connection=new PDO('mysql:host=localhost;dbname=userdb','root','');
    $queryString=$connection->prepare("select * from users");

    $queryString->execute();
    $users=$queryString->fetchAll(PDO::FETCH_CLASS,'User');
    ?>
    <table border="2px">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Login Permission</th>
            <th>Status</th>
        </tr>
        <?php foreach ($users as $user):?>
            <tr>
                <td><?= $user->name?></td>
                <td><?= $user->age?></td>
                <td><?= $user->login("heba",123)?></td>
                <td><?= $married=($user->married==1)?"married":"single";
                    "Status: ".$married?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php

}catch (PDOException $exception){
    echo $exception->getMessage();
}

/*function calc($x){
    if($x>=10){
    return "Yes";
    }else{
        throw  new Exception("sorry your number is not >=10");
    }
}

try {
    echo calc(15);
}catch (Exception $errobj){
   echo $errobj->getMessage();
}*/