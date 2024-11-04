<?php 
require_once("util-db.php");
require_once("model-products.php");
$pageTitle = "Products";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertProduct($_POST['pOrder'], $_POST['pName'], $_POST['pCategory'], $_POST['pPrice']))
      { echo '<div class="alert alert-success" role="alert">Product Added!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;

    case "Edit":
      if (updateProduct($_POST['pOrder'], $_POST['pName'], $_POST['pCategory'], $_POST['pPrice']))
      { echo '<div class="alert alert-success" role="alert">Product Edited!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;
    
    case "Delete":
      if (deleteproduct($_POST['pid']))
      { echo '<div class="alert alert-success" role="alert">Product Deleted!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;
  }
}



$products = selectProducts();
include "view-products.php";
include "view-footer.php";
?>
