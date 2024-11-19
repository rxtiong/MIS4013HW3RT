<h1>Employee Chart</h1>

<div>
  <canvas id="myChart" width="500" height="400" ></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
          <?php
              while ($employee = $employees->fetch_assoc())
              {
                echo $employee['NumOfOrders'] , ", ";
              }
          ?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        <?php
              $employees = selectEmployees();
              while ($employee = $employees->fetch_assoc())
              {
                echo "'", $employee['first_name'] , " ", $employee['last_name'] , "', ";
              }
          ?>
    ]
},
    });
</script>
