<?php
session_start();
extract($_REQUEST);
$prd['prdnm'] = $prdnm;
$prd['img'] = $img;
$prd['price'] = $price;
$count = 1;

if (isset($_SESSION['cart'])) {
    if (!empty($_SESSION['cart']['items'])) {
        $index = 0;
        $found = false;
        foreach ($_SESSION['cart']['items'] as $prds) {

            if ($prds['prdnm'] == $prdnm) {
                $_SESSION['cart']['items'][$index]['count'] += 1;
                $found = true;
                echo "Success";
            }
            $index++;
        }
        if (!$found) {
            $prd['count'] = $count;
            array_push($_SESSION['cart']['items'], $prd);
            echo "Success";
        }
    } else {
        $_SESSION['cart']['items'] = array();
        $prd['count'] = $count;
        array_push($_SESSION['cart']['items'], $prd);
        echo "Success";
    }
} else {
    $_SESSION['cart'] = array("cartid" => rand(10000000, 99999999), "amount" => 0, "count" => 1);
    $prd['count'] = $count;
    $_SESSION['cart']['items'] = array();
    array_push($_SESSION['cart']['items'], $prd);
    echo "Success";
}
$_SESSION['cart']['count'] = count($_SESSION['cart']['items']);
$amount = 0;
foreach ($_SESSION['cart']['items'] as $prd) {
    $amount += $prd['price'] * $prd['count'];
}
$_SESSION['cart']['amount'] =  $amount;
