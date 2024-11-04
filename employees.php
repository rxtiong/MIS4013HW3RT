<?php 
require_once("util-db.php");
require_once("model-employees.php");
$pageTitle = "Employees";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertEmployee($_POST['eFName'], $_POST['eLName']))
      { echo '<div class="alert alert-success" role="alert">Employee Added!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;

    case "Edit":
      if (updateEmployee($_POST['eFName'], $_POST['eLName'],$_POST['eid']))
      { echo '<div class="alert alert-success" role="alert">Employee Edited!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;
    
    case "Delete":
      if (deleteEmployee($_POST['eid']))
      { echo '<div class="alert alert-success" role="alert">Employee Deleted!</div>';}
      else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }      
    break;
  }
}

$employees = selectEmployees();
include "view-employees.php";
include "view-footer.php";
?>
