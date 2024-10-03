<h1>Orders by employees</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Order ID</th>
      <th>Employee ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th></th>
      </tr>      
    </thead>
    <tbody>
<?php
while ($employee = $employees->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $employee['employee_id'];?></td>
    <td><?php echo $employee['order_id'];?></td>
    <td><?php echo $employee['first_name'];?></td>
    <td><?php echo $employee['last_name'];?></td>
  </tr>
  <?php
}
?>
      
    </tbody>
  </table>
</div>
