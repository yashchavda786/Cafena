<?php
require '../vendor/autoload.php';
use Dompdf\Dompdf;

extract($_REQUEST);
include_once "process/connection.php";
$qry = mysqli_query($con,"SELECT * FROM tbl_make_order WHERE `id` = '$id'");
$data = mysqli_fetch_assoc($qry);

$html="<html>

<head>
<title>".$data['name'].'_'.date('d_m_Y')."</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <style>
        .text-center {
            text-align: center !important;
        }
        .text-left
        {
            text-align: left !important;
        }
        .text-right{
            text-align: right !important;
        }
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .content {
            padding-top: 8px;
            max-width: 500px;
            margin: 0px;
            background: white;
            width: 100%;
        }

        table {
            border: 2px solid black;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .heading1 th {
            background-color: gray;
        }

        td,
        th {
            border: 2px solid black;
            padding: 8px;
        }
        td{
            /* border: 0px; */
            border-bottom: 0px;
            border-top: 0px;
        }
        .rs{
            font-family: DejaVu Sans; sans-serif;
        }
    </style>
</head><body>";
include_once "process/connection.php";
$pdf = new Dompdf();
$html.="<body>
<h1 class='text-center'>Cafena</h1>
<div class='container'>

    <table class='table text-center'>
        <thead>
            <tr>
                <th class='text-left'>Name</th>
                <th>".$data['name']."</th>
                <th class='text-left'>Phone</th>
                <th>".$data['phone']."</th>
            </tr>
            <tr>
                <th class='text-left'>Table</th>
                <th>".$data['table_id']."</th>
                <th class='text-left'>Order Date</th>
                <th>".date("d-m-Y",strtotime($data['created_at']))."</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan='4'>
            <table class='table text-center'>
                <thead>
                    <th>Product</th>
                    <th>item(s)</th>
                    <th>Amount</th>
                </thead>
                <tbody>
                    ";
$prds="";
$subtotal=0;
$amt=0;
if($data['hot_choco_number']!=0){
    $amt=$data['hot_choco_number']*180;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Gourmet Belgian Hot Chocolate</td>
    <td>".$data['hot_choco_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['cold_choco_number']!=0){
    $amt=$data['cold_choco_number']*200;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Gourmet Belgian Cold Chocolate</td>
    <td>".$data['cold_choco_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['esperesso_number']!=0){
    $amt=$data['esperesso_number']*120;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Espresso</td>
    <td>".$data['esperesso_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['macchiato_number']!=0){
    $amt=$data['macchiato_number']*145;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Macchiato</td>
    <td>".$data['macchiato_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['cafe_mocha_number']!=0){
    $amt=$data['cafe_mocha_number']*165;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Cafe Mocha</td>
    <td>".$data['cafe_mocha_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['cappucino_number']!=0){
    $amt=$data['cappucino_number']*135;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Cappuccino</td>
    <td>".$data['cappucino_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['corn_n_spinach_number']!=0){
    $amt=$data['corn_n_spinach_number']*150;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Cheesy Corn ‘n’ Spinach</td>
    <td>".$data['corn_n_spinach_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['veg_cheese_number']!=0){
    $amt=$data['veg_cheese_number']*140;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Veg Cheese Sandwich</td>
    <td>".$data['veg_cheese_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['cheese_chilli_number']!=0){
    $amt=$data['cheese_chilli_number']*150;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Cheese Chilli Sandwich</td>
    <td>".$data['cheese_chilli_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['muffins_number']!=0){
    $amt=$data['muffins_number']*60;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Muffins</td>
    <td>".$data['muffins_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['pastry_number']!=0){
    $amt=$data['pastry_number']*200;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Cake Pastry</td>
    <td>".$data['pastry_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['black_tea_number']!=0){
    $amt=$data['black_tea_number']*120;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Black Tea</td>
    <td>".$data['black_tea_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
if($data['green_tea_number']!=0){
    $amt=$data['green_tea_number']*120;
    $subtotal+=$amt;
    $prds.="<tr>
    <td>Green Tea</td>
    <td>".$data['green_tea_number']."</td>
    <td><span class='rs'>&#8377;</span>".$amt."/-</td>
</tr>";
}
$html.=$prds;
$html.="                    
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
        <td colspan='4'>
            <table>
                <tr>
                    <td width='75%' style='text-align: right;border: 2px solid black;'>Total Amount</td>
                    <td width='25%' class='text-center'><span class='rs'>&#8377;</span> ".$subtotal."/-</td>
                </tr>
            </table>
            </td>
        </tr>
        </tbody>
    </table>

</div>
</body></html>";
$file_name=$data['name'].'_'.date('d_m_Y');
$pdf->load_html($html);
$pdf->setPaper('A4','Potrait');
$pdf->render();
$pdf->stream($file_name, array("Attachment" => false));
