<?php
function selectEmployees() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select employee_id, order_id, first_name, last_name from employees");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
