<h1>Orders by customers</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Order ID</th>
      <th>Customer ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Order Date</th>
      <th>Price</th>
      <th></th>
      </tr>      
    </thead>
    <tbody>
<?php
while ($customer = $customers->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $customer['order_id'];?></td>
    <td><?php echo $customer['customer_id'];?></td>
    <td><?php echo $customer['first_name'];?></td>
    <td><?php echo $customer['last_name'];?></td>
    <td><?php echo $customer['order_date'];?></td>
    <td><?php echo $customer['total_amount'];?></td>
  </tr>
  <?php
}
?>
      
    </tbody>
  </table>
</div>
