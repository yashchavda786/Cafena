<?php
require('../assets/lib/fpdf.php');
include_once "connection.php";
if(!empty($_REQUEST)){
    extract($_REQUEST);
    $qry = mysqli_query($con, "UPDATE `mas_tables` SET `status` = 'UNOCCUPIED' WHERE `table_no` = '$table_id'");
    $qry1 = mysqli_query($con, "UPDATE `tbl_make_order` SET `status` = 'COMPLETE' WHERE `id` = '$order_id'");
    if($qry && $qry1){
        
        header('location:../tables.php');
    }else{
        echo "Insert error!";
    }
}
 ?>