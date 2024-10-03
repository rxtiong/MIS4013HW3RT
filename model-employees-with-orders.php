<?php
function selectEmployees() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select employee_id, first_name, last_name from employees");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

function selectOrdersByEmployees($eid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select o.order_id, order_date, total_amount, o.employee_id, first_name, last_name from orders o join employees e on o.employee_id=e.employee_id where o.employee_id=?;");
        $stmt->bind_param("i", $eid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
