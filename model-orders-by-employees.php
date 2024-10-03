<?php
function selectOrdersByEmployees($eid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select o.order_id, o.employee_id, first_name, last_name from orders o join employees e on o.employee_id=e.employee_id where o.employee_id=5001;");
        $stmt->bind_param("i", $eid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
