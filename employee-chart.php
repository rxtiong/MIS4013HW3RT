<?php 
require_once("util-db.php");
require_once("model-employee-chart-db.php");
$pageTitle = "Employees Chart";
include "view-header.php";



$employees = selectEmployees();
include "view-employee-chart.php";
include "view-footer.php";
?>
