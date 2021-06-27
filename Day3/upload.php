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
    <form method="post" enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF']?>">
        Upload Profile Pic<br><input type="file" name="picture" accept=".png,.jpg">
        <input type="submit" value="upload">
    </form>
           <?php
           echo ini_get('post_max_size');
                if(isset($_FILES["picture"])){
                    $filename=$_FILES["picture"]["name"];
                    $tempPath=$_FILES["picture"]["tmp_name"];
                    $fileSize=$_FILES["picture"]["size"];
                    $explodName=explode(".",$filename);
                    $ext=end($explodName);
                    $extarray=["jpg","JPG","png","PNG","jpeg","JPEG","gif","GIF"];

               /*     if(in_array($ext,$extarray)==false){
                        echo "File is not allowed to upload just use image";
                    }else{
                        move_uploaded_file($tempPath,"images/".$filename);
                        echo "File uploaded";
                    }*/
                   if($fileSize>2097152){
                        echo"file size is more than 2MB";
                    }else{
                        move_uploaded_file($tempPath,"images/".$filename);
                        echo "File uploaded";
                }

                }
           ?>
</body>
</html>