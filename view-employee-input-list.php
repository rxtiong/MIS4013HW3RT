<select class="form-select" id="eid" name="eid">
  <?php
    while ($employeeItem = $employeeList -> fetch_assoc())
    {
       ?>
      <option value="<?php echo $employeeItem['employee_id']; ?>">
        <?php echo $employeeItem['first_name']; ?>
        <?php echo $employeeItem['last_name']; ?>
      </option>
      <?php      
    }
?>
 
  
</select>
