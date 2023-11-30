<?php
session_start();
include_once "connection.php";
require_once('../Fuctions.php');
$mainobj = new Fuctions($con);
if (!empty($_POST)) {
    $data=array();
    extract($_POST);
    foreach($FormData as $element){
        $data[$element['name']] = $element['value'];
    }
    extract($data);

    $qry = mysqli_query($con, "INSERT INTO `tbl_orders`(`fnm`, `lnm`, `company`, `country`, `street`, `town`, `zip`, `phone`, `email`, `detail`, `total`) VALUES ('$fnm','$lnm','$company','$country','$street','$town','$zip','$phone','$email','$detail','$total')");
    
    if ($qry) {
        $lastinsertid = $con->insert_id;
        $items  = $mainobj->getCartItems();
        $index=0;
            if (!empty($items)) :
                foreach ($items as $item) :
                    $prdnm = $item['prdnm'];
                    $count = $item['count'];
                    $amount = intval($item['price'])*intval($item['count']);
                    $qry = mysqli_query($con,"INSERT INTO tbl_order_detail(`orderid`,`prdnm`,`count`,`amount`) VALUES('$lastinsertid','$prdnm','$count','$amount')");
                endforeach;
            endif;
        
            $response['status']="SUCCESS";
            $response['msg']="Order Successfull !!";
    } else {
        $response['status']="FAIL";
        $response['msg']="Order Failed You May Contact the admin For Query !!";
    }
}
echo json_encode($response);
unset($_SESSION['cart']);
