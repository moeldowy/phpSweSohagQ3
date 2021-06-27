<?php
require_once "User.php";
require_once "connection.php";
$queryString=$connection->prepare("select * from users WHERE id=?");
$id=$_GET["id"];
$queryString->execute([$id]);
$data=$queryString->fetchAll(PDO::FETCH_CLASS,'User');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        h3{
            text-align: center;
            margin-top:10px;
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach($data as $user):?>
        <h3>Edit user: <?=$user->name;?></h3>
        <form class="row g-3 needs-validation" action="update.php" method="post" novalidate>
            <input type="hidden" name="id" value="<?=$user->id;?>">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationCustom01" value="<?=$user->name;?>" required>
            </div>

            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control" id="validationCustomUsername" value="<?=$user->username;?>" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="validationCustom02" value="<?=$user->password;?>"required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Birth of date</label>
                <input type="date"  name="birth_of_date" class="form-control" id="validationCustom03" value="<?=$user->birth_of_date;?>" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="married" id="flexRadioDefault1" value="0" <?=($user->married==0)?"checked":""?>>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Single
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="married" id="flexRadioDefault2" value="1" <?=($user->married==1)?"checked":""?>>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Married
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" name="update" type="submit">Update</button>
            </div>
        </form>
        <?php endforeach;?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>