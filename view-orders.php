<div class="row">
  <div class="col">
    <h1>Orders</h1>
  </div>
  <div class="col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
    </svg>
  </div>
</div>

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
