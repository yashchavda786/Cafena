<?php 
    try{
        $con = mysqli_connect('localhost','root','','cafena');
    }catch(Exception $e){
        echo $msg = $e->getMessage();
        exit();  
    }
?>