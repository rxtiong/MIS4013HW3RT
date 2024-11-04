<?php 
require_once("util-db.php");
require_once("model-customers.php");
$pageTitle = "Customers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertCustomer($_POST['cFName'], $_POST['cLName'], $_POST['cdob'], $_POST['cEmail'], $_POST['cPhone'], $_POST['cOrder']))
      { echo '<div class="alert alert-success" role="alert">Customer Added!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;

    case "Edit":
      if (updateCustomer($_POST['cFName'], $_POST['cLName'], $_POST['cdob'], $_POST['cEmail'], $_POST['cPhone'], $_POST['cOrder'], $_POST['cid']))
      { echo '<div class="alert alert-success" role="alert">Customer Edited!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;
    
    case "Delete":
      if (deleteCustomer($_POST['cid']))
      { echo '<div class="alert alert-success" role="alert">Customer Deleted!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;
  }
}

$customers = selectCustomers();
include "view-customers.php";
include "view-footer.php";
?>
