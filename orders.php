<?php 
require_once("util-db.php");
require_once("model-orders.php");
$pageTitle = "Orders";
include "view-header.php";
$orders = selectOrders();
include "view-orders.php";
include "view-footer.php";
?>
