<?php 
require_once("util-db.php");
require_once("model-orders-by-employees.php");
$pageTitle = "Orders by customers";
include "view-header.php";
$employees = selectOrdersByEmployees($_POST['eid']);
include "view-orders-by-employees.php";
include "view-footer.php";
?>
