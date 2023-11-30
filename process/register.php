<?php
    include_once "connection.php";
    if(!empty($_POST)){
        extract($_POST);
        if($pwd==$confpwd){
            $pwd = md5($pwd);
            $qry = mysqli_query($con,"INSERT INTO `tbl_user`(`uname`,`name`,`email`,`password`) VALUES('$uname','$name','$email','$pwd')");
            if($qry){
                echo "Success";
            }else{
                echo "Error!";
            }
        }
        else{
            echo "Error!";
        }
    }
 ?>