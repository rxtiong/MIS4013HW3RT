<?php 
require_once("util-db.php");
require_once("model-customers.php");
$pageTitle = "Customers";
include "view-header.php";
$customers = selectCustomers();
include "view-customers.php";
include "view-footer.php";
?>
