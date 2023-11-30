<?php
session_start();
extract($_REQUEST);
$index = 0;
foreach ($_SESSION['cart']['items'] as $prds) {

    if ($prds['prdnm'] == $prdnm) {
        unset($_SESSION['cart']['items'][$index]);
    }
    $index++;
}
$_SESSION['cart']['count'] = count($_SESSION['cart']['items']);
$amount = 0;
foreach ($_SESSION['cart']['items'] as $prd) {
    $amount += $prd['price'] * $prd['count'];
}
$_SESSION['cart']['amount'] =  $amount;
echo "<script>history.back()</script>";
