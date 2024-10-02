<h1>Orders</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Order ID</th>
      <th>Customer ID</th>
      <th>Date</th>
      <th>Total Amount</th>
      <th>Product ID</th>      
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
    <td><?php echo $order['order_date'];?></td>
    <td><?php echo $order['total_amount'];?></td>
    <td><?php echo $order['product_id'];?></td>
  </tr>
  <?php
}
?>
      
    </tbody>
  </table>
</div>
