<?php 
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>Coffee Shop</h1>
<img src="coffee.jgp" style="height:300px;" />
    <p>This webpage shows customer data, order information, product information, and employee information and data. Customers have one order and employees have one order, but an order 
    can have multiple customers and/or employees. Orders contain one product, but products can be in multiple orders.</p>

    <p>
        Each page is customizable for the user. They can add, edit, or delete any information on the webpage. 
    </p>
    
<?php 
include "view-footer.php";
?>
