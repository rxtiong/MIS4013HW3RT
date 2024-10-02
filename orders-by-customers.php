<?php 
require_once("util-db.php");
require_once("model-orders-by-customers.php");
$pageTitle = "Orders by customers";
include "view-header.php";
$customers = selectOrdersByCustomers($_GET['id']);
include "view-orders-by-customers.php";
include "view-footer.php";
?>
