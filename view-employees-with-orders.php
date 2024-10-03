<h1>Employees with orders</h1>
    <div class="card-group">
    <?php  
while ($employee = $employees->fetch_assoc()){
  ?>
  
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $employee['first_name'];?> <?php echo $employee['last_name'];?></h5>
          <p class="card-text">
            <ul class="list-group">
<?php
  $orders = selectOrdersByEmployees($employee['employee_id']);
  while ($order = $orders->fetch_assoc()){
?>
     <li class="list-group-item"><?php echo $order['order_id'];?> - <?php echo $order['order_date'];?> - $<?php echo $order['total_amount'];?></li>
<?php
  }
?>    
            </ul>
          </p>
          <p class="card-text"><small class="text-body-secondary">Employee ID: <td><?php echo $employee['employee_id'];?></td></small></p>
        </div>
      </div>
  <?php
}
?>      
  </div>
