<?php
function selectEmployees() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select first_name, last_name, count(order_id) as NumOfOrders
                                from employees e join 
                                orders o on e.employee_id=o.employee_id
                                group by e.employee_id;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
} catch (Exception $e) {
  $conn -> close(); 
  throw $e;
}
?>
