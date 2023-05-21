<?php
    include 'db_connect';

    //variables
    $item_qty = $_REQUEST['qty'];
    $item_name = $_REQUEST['name'];
    $item_net_price = $_REQUEST['net_price'];
    $item_price = $_REQUEST['price'];

    //timestamp declaration
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $date = date("Y-m-d");

    if(isset($_REQUEST["add_item"])) {
        
    }
?>