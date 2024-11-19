<?php 
$pageTitle = "Home";
include "view-header.php";
?>
<script>
        .container {
            display: flex;
                flex-direction: row;
            justify-content: center; 
            align-items: center;
            gap: 10px; /* Adds space between columns */
            padding: 10px;
        }
        .column {
            flex: 1; /* Each column takes equal width */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
</script>

    <div class="container">
        <div class="column">
            <h1>Coffee Shop</h1>
            <img src="https://i.pinimg.com/originals/0f/ad/28/0fad289870489c693936a394112b07f2.jpg" style="height:300px;" />
        </div>
        <div class="column">     
            <p>This webpage shows customer data, order information, product information, and employee information and data. Customers have one order and employees have one order, but an order 
    can have multiple customers and/or employees. Orders contain one product, but products can be in multiple orders.</p>

    <p>
        Each page is customizable for the user. They can add, edit, or delete any information on the webpage. 
    </p>
        </div>
    </div>   
    
<?php 
include "view-footer.php";
?>
