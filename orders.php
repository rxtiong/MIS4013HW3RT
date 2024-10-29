<?php 
require_once("util-db.php");
require_once("model-orders.php");
$pageTitle = "Orders";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertOrder($_POST['cNumber'], $_POST['oDate'], $_POST['oTotal'], $_POST['oProd']);
    break;
  }
}

$orders = selectOrders();
include "view-orders.php";
include "view-footer.php";
?>
