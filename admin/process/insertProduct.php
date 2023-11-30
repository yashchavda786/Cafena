<?php
session_start();
include_once "connection.php";
if(!empty($_FILES['prdimg'])){
    $path = "uploads/";
    $file=$_FILES["prdimg"]["name"];
    $ext = pathinfo($file, PATHINFO_EXTENSION); //get extension of the file
    $file=$path.uniqid() . '_' . mt_rand(1000, 9999) . '.' . $ext;
    $tmp_name= $_FILES["prdimg"]["tmp_name"];
    move_uploaded_file($tmp_name,$file);
    $_POST['img'] = $file;
}
else{
    $img = '';
}

if (!empty($_POST)) {
    extract($_POST);
    $qry = mysqli_query($con, "INSERT INTO `mas_prd`(`prdnm`, `img`, `price`, `desc`) VALUES ('$prdnm','$img','$price','$desc')");
    if ($qry) {
        echo "Success";
    } else {
        echo "Error!";
    }
}