<?php
 class Fuctions
 {
    private $conn;
     function __construct($conn){
        $this->conn = $conn;
    }
    function getCurrentPage()
    {
        $filename = basename($_SERVER['PHP_SELF']);
        return $filename;
    }
    function getCartItemsCount(){
        if((!empty($_SESSION['cart']['count']))){
            return $_SESSION['cart']['count'];
        }
        else{
            return 0;
        }
    }

    function getCartItems(){
        if((!empty($_SESSION['cart']['items']))){
            return $_SESSION['cart']['items'];
        }
        else{
            return 0;
        }
    }

    function getCartTotal(){
        if((!empty($_SESSION['cart']['amount']))){
            return $_SESSION['cart']['amount'];
        }
        else{
            return 0;
        }
    }

    function getTables(){
        $qry = mysqli_query($this->conn,"SELECT * FROM mas_tables");
        return mysqli_fetch_all($qry);
    }

    function getProductList(){
        $qry = mysqli_query($this->conn,"SELECT * FROM mas_prd");
        return mysqli_fetch_all($qry);
    }

    function getOnlineOrderList(){
        $qry = mysqli_query($this->conn,"SELECT * FROM tbl_orders");
        return mysqli_fetch_all($qry);
    }
    function getOrderList(){
        $qry = mysqli_query($this->conn,"SELECT * FROM tbl_make_order");
        return mysqli_fetch_all($qry,MYSQLI_ASSOC);
    }

    function getContactList(){
        $qry = mysqli_query($this->conn,"SELECT * FROM mas_contacts");
        return mysqli_fetch_all($qry);
    }

    function getOnlineOrderCount(){
        $qry = mysqli_query($this->conn,"SELECT COUNT(id) as count FROM tbl_orders WHERE DATE(`created_at`) = CURDATE()");
        $row = mysqli_fetch_assoc($qry);
        return $row['count'];
    }
    function getOrderCount(){
        $qry = mysqli_query($this->conn,"SELECT COUNT(id) as count FROM tbl_make_order WHERE DATE(`created_at`) = CURDATE()");
        $row = mysqli_fetch_assoc($qry);
        return $row['count'];
    }
    function getContactCount(){
        $qry = mysqli_query($this->conn,"SELECT COUNT(id) as count FROM mas_contacts");
        $row = mysqli_fetch_assoc($qry);
        return $row['count'];
    }

    function isTableOccupied($id){
        $qry = mysqli_query($this->conn,"SELECT if(`status`='OCCUPIED',true,false) as 'status' FROM `mas_tables` WHERE table_no = $id");
        $row = mysqli_fetch_assoc($qry);
        return $row['status'];
    }

    function getOrderFromTable($id){
        $qry = mysqli_query($this->conn,"SELECT * FROM tbl_make_order WHERE `table_id` = $id AND `status`='PENDING' ORDER BY `id` DESC");
        $row = mysqli_fetch_assoc($qry);
        return $row;
    }
 }   
?>