<?php 
require_once("util-db.php");
require_once("model-orders.php");
$pageTitle = "Orders";
include "view-header.php";
$customers = selectOrders();
include "view-orders.php";
include "view-footer.php";
?>
