<?php 
    session_start();
    require './vendor/autoload.php';
    require_once('process/connection.php');
    require_once('Fuctions.php');
    $mainobj = new Fuctions($con);
    $curfile = $mainobj->getCurrentPage();
?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--====== Title ======-->
<title>Cafena - Best Cafe You will Find</title>

<!--====== Favicon ======-->
<link rel="shortcut icon" href="assets/images/logo/favicon.ico" type="images/x-icon" />

<!--====== CSS Here ======-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/lightcase.css">
<link rel="stylesheet" href="assets/css/meanmenu.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/jquery-ui.css">
<link rel="stylesheet" href="assets/css/notyf.css">
<link rel="stylesheet" href="assets/css/main.css">