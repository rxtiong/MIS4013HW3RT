<?php 
require_once("util-db.php");
require_once("model-employees.php");
$pageTitle = "Employees";
include "view-header.php";
$employees = selectEmployees();
include "view-employees.php";
include "view-footer.php";
?>
