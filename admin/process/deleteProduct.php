<?php
include_once "connection.php";
extract($_REQUEST);
$qry = mysqli_query($con, "DELETE FROM mas_prd WHERE `prdid` = '$id'");
if ($qry) {
    echo "Success";
} else {
    echo "Error!";
}
