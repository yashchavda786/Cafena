<?php
    session_start();
    include_once "connection.php";
    require_once('../Fuctions.php');
    $mainobj = new Fuctions($con);
    
    if (!empty($_POST)) {
        extract($_POST);
        if($mainobj->isTableOccupied($id)){
            $qry = mysqli_query($con, "UPDATE `mas_tables` SET `status` = 'UNOCCUPIED' WHERE `table_no` = '$id'");
            $resp['msg']="TABLE UNOCCUPIED SUCCESSFULLY";
            $resp['color']="red";
        }
        else{
            $qry = mysqli_query($con, "UPDATE `mas_tables` SET `status` = 'OCCUPIED' WHERE `table_no` = '$id'");
            $resp['msg']="TABLE OCCUPIED SUCCESSFULLY";
            $resp['color']="green";
        }

        if ($qry) {
            echo json_encode($resp);
        } else {
            echo "Error!";
        }
    }
    
 ?>