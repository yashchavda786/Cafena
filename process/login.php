<?php
    session_start();
    include_once "connection.php";
    if(!empty($_POST)){
        extract($_POST);
        $password = md5($password);
        $qry = mysqli_query($con,"SELECT * FROM tbl_user WHERE `email` = '$email' AND `password` = '$password'");
        $res = mysqli_fetch_assoc($qry);
        if(!empty($res)){
            $_SESSION['uid'] = $res['uid'];
            $_SESSION['uname'] = $res['uname'];
            echo "Success";
        }else{
            echo "LOGIN FAILED";
        }
    } 
?>