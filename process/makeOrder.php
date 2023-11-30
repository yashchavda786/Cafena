<?php 
include_once "connection.php";
if (!empty($_POST)) {
    extract($_POST);
    if(!empty($order_id)){
        $qry=mysqli_query($con,"UPDATE tbl_make_order SET `name` = '$name',`phone`=$phone,hot_choco_number='$hot_choco_number',cold_choco_number='$cold_choco_number',esperesso_number='$esperesso_number',macchiato_number='$macchiato_number',cafe_mocha_number='$cafe_mocha_number',cappucino_number='$cappucino_number',corn_n_spinach_number='$corn_n_spinach_number',veg_cheese_number='$veg_cheese_number',cheese_chilli_number='$cheese_chilli_number',muffins_number='$muffins_number',pastry_number='$pastry_number',black_tea_number='$black_tea_number',green_tea_number='$green_tea_number' WHERE `id`=$order_id");    
    }
    else{
    $qry1 = mysqli_query($con, "UPDATE `mas_tables` SET `status` = 'OCCUPIED' WHERE `table_no` = '$table_id'");
    $qry=mysqli_query($con,"INSERT INTO tbl_make_order(`name`,`phone`,table_id,hot_choco_number,cold_choco_number,esperesso_number,macchiato_number,cafe_mocha_number,cappucino_number,corn_n_spinach_number,veg_cheese_number,cheese_chilli_number,muffins_number,pastry_number,black_tea_number,green_tea_number,`status`)VALUES('$name',$phone,'$table_id','$hot_choco_number','$cold_choco_number','$esperesso_number','$macchiato_number','$cafe_mocha_number','$cappucino_number','$corn_n_spinach_number','$veg_cheese_number','$cheese_chilli_number','$muffins_number','$pastry_number','$black_tea_number','$green_tea_number','PENDING')");
    
    }
    if($qry){
        header('location:../tables.php');
    }else{
        echo "Insert error!";
    }
}
