<select class="form-select" id="eid" name="eid">
  <?php
    while ($employeeItem = $employeeList -> fetch_assoc())
    {
      $selText = "";
      if ($selectedEmployee == $employeeItem['employee_id']) {
          $selText = " selected";
      }
       ?>
      <option value="<?php echo $employeeItem['employee_id']; ?>"<?=$selText?>>
        <?php echo $employeeItem['first_name']; ?>
        <?php echo $employeeItem['last_name']; ?>
      </option>
      <?php      
    }
?>
 
  
</select>
