<?php 
require_once("util-db.php");
require_once("model-orders.php");
$pageTitle = "Orders";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertOrder($_POST['oCust'], $_POST['oDate'], $_POST['oAmount'], $_POST['oProd'], $_POST['eid']))
      { echo '<div class="alert alert-success" role="alert">
  Order Added!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;

    case "Edit":
      if (updateOrder($_POST['oCust'], $_POST['oDate'], $_POST['oAmount'], $_POST['oProd'], $_POST['eid'], $_POST['oid']))
      { echo '<div class="alert alert-success" role="alert">
  Order Edited!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;
    
    case "Delete":
      if (deleteOrder($_POST['oid']))
      { echo '<div class="alert alert-success" role="alert">Order Deleted!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;
  }
}

$orders = selectOrders();
include "view-orders.php";
include "view-footer.php";
?>
