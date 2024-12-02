<?php 
$pageTitle = "Home";
include "view-header.php";
?>

  <script>
function myFunction() {
  alert("Page is loaded");
}
</script>
<body onload="myFunction()">
<div class="text-center mb-4">
  <div class="row align-items-start">
    <h1>Coffee Shop</h1>
  </div>
</div>
    
    <div class="container mt-4">
        <div class="row align-items-start">
        <div class="col-md-6">           
            <img src="https://i.pinimg.com/originals/0f/ad/28/0fad289870489c693936a394112b07f2.jpg" style="height:300px;" />
        </div>
        <div class="col-md-6">    
            <p>Welcome to the Coffee Shop management page!</p>
            <p>This webpage shows customer data, order information, product information, and employee information and data. </p>
            <p>Each page is customizable for the user. They can add, edit, or delete any information on the webpage. </p>
            <p>Employee Chart shows each employee and how many orders they have fulfilled.</p>
        </div>
    </div>   
    </div>
</body>
<?php 
include "view-footer.php";
?>
