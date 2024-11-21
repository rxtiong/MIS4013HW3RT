<?php 
$pageTitle = "Home";
include "view-header.php";
<head>
<script>
function myFunction() {
  alert("Page is loaded");
}
</script>
  </head>
?>

<div><h1>Coffee Shop</h1></div>
    
    <div class="container mt-4">
        <div class="row align-items-start">
        <div class="col-md-6">           
            <img src="https://i.pinimg.com/originals/0f/ad/28/0fad289870489c693936a394112b07f2.jpg" style="height:300px;" />
        </div>
        <div class="col-md-6">     
            <p>This webpage shows customer data, order information, product information, and employee information and data. Customers have one order and employees have one order, but an order 
            can have multiple customers and/or employees. Orders contain one product, but products can be in multiple orders.</p>
    <p>Each page is customizable for the user. They can add, edit, or delete any information on the webpage. </p>
        </div>
    </div>   
    </div>
<?php 
include "view-footer.php";
?>
