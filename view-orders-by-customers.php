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
while ($order = $orders->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $order['order_id'];?></td>
    <td><?php echo $order['customer_id'];?></td>
    <td><?php echo $order['first_name'];?></td>
    <td><?php echo $order['last_name'];?></td>
    <td><?php echo $order['order_date'];?></td>
    <td><?php echo $order['total_amount'];?></td>
  </tr>
  <?php
}
?>
      
    </tbody>
  </table>
</div>
