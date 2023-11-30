<?php
session_start();
include_once "connection.php";
if(!empty($_FILES['prdimg']["name"])){
    $path = "uploads/";
    $file=$_FILES["prdimg"]["name"];
    $ext = pathinfo($file, PATHINFO_EXTENSION); //get extension of the file
    $file=$path.uniqid() . '_' . mt_rand(1000, 9999) . '.' . $ext;
    $tmp_name= $_FILES["prdimg"]["tmp_name"];
    move_uploaded_file($tmp_name,$file);
    $_POST['img'] = $file;
    extract($_POST);
    $qry = mysqli_query($con, "UPDATE mas_prd SET prdnm = '$prdnm',img='$img',price='$price',`desc`='$desc' WHERE `prdid` = '$prdid'");
    if ($qry) {
        echo "Success";
    } else {
        echo "Error!";
    }
}
else{
    extract($_POST);
    $qry = mysqli_query($con, "UPDATE mas_prd SET prdnm = '$prdnm',price='$price',`desc`='$desc' WHERE `prdid` = '$prdid'");
    if ($qry) {
        echo "Success";
    } else {
        echo "Error!";
    }
}
