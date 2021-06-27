<?php
require_once "connection.php";
if(isset($_POST["insert"])&& !empty($_POST)){
    $queryString=$connection->prepare("INSERT INTO users (name,username,password,birth_of_date,married,status,hacked_password,image)VALUES(?,?,?,?,?,?,?,?)");
    $name=$_POST["name"];
    $username=$_POST["username"];
    $inputPassword=$_POST["password"];
    $password=password_hash($inputPassword,PASSWORD_DEFAULT);
    $birth_of_date=$_POST["birth_of_date"];
    $married=$_POST["married"];
    $status=1;
    if(isset($_FILES["picture"])){
        $filename=$_FILES["picture"]["name"];
        $tempPath=$_FILES["picture"]["tmp_name"];
        $fileSize=$_FILES["picture"]["size"];
        $explodName=explode(".",$filename);
        $ext=end($explodName);
        $extarray=["jpg","JPG","png","PNG","jpeg","JPEG","gif","GIF"];

        if(in_array($ext,$extarray)==false){
            echo "File is not allowed to upload just use image";
        }else{
            move_uploaded_file($tempPath,"images/".$filename);
            if($queryString->execute([$name,$username,$password,$birth_of_date,$married,$status,$inputPassword,$filename])){
                header("Location: index.php");
            }else{
                echo"Faild to insert";
                header("Refresh: 3;URL=index.php");
            }
        }
    }

    //binding ? with inputs

}else{
    echo"Don`t Play with me";
    header("Refresh: 3;URL=index.php");
}