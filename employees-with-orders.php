<?php 
require_once("util-db.php");
require_once("model-employees-with-orders.php");
$pageTitle = "Employees with orders";
include "view-header.php";
$employees = selectEmployees();
include "view-employees-with-orders.php";
include "view-footer.php";
?>
