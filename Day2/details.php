<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2px">
    <tr>
        <th>Username</th>
        <th>password</th>
    </tr>
    <tr>
        <td><?=htmlspecialchars($_POST["user"])?></td>
        <td><?= str_replace($_POST["pass"],'*',"*",)?></td>
    </tr>
</table>
</body>
</html>