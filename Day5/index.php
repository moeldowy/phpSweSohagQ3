<?php
require_once "User.php";
require_once "connection.php";
$queryString=$connection->prepare("select * from users WHERE status=1");
$queryString->execute();
$users=$queryString->fetchAll(PDO::FETCH_CLASS,'User');
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
        <h3>User Management System</h3>
        <h6><a href="deletedusers.php">Show Deleted users</a></h6>
        <table class="table table-success table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Birth of date</th>
                <th scope="col">Age</th>
                <th scope="col">Married</th>
                <th scope="col">Picture</th>
                <th scope="col">manage</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user):?>
                <tr>
                    <th scope="row"><?= $user->id?></th>
                    <td><?= $user->name?></td>
                    <td><?= $user->birth_of_date?></td>
                    <td><?= $user->age?></td>
                    <td><?= $married=($user->married==1)?"married":"single";
                        "Status: ".$married?></td>
                    <td><img src="images/<?= $user->image?>" width="100px" height="100px"/></td>
                    <td><a href="edit.php?id=<?= $user->id?>"><i class="material-icons" style="color: #069500">edit_note</i></a> |<a href="softdelete.php?id=<?= $user->id?>"><i class="material-icons" style="color: darkred;">delete_sweep</i></a> </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <form class="row g-3 needs-validation" enctype="multipart/form-data" action="insert.php" method="post" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationCustom01" value="Mark" required>
            <input type="file" class="form-control" name="picture">
            </div>

            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="validationCustom02" value="Otto" required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Birth of date</label>
                <input type="date"  name="birth_of_date" class="form-control" id="validationCustom03" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="married" id="flexRadioDefault1" value="0" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Single
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="married" id="flexRadioDefault2" value="1" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Married
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" name="insert" type="submit">Insert</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>