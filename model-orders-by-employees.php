<?php
function selectOrdersByEmployees($eid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select o.order_id, o.employee_id, first_name, last_name from orders o join employees e on e.employeed_id=o.employee_id where o.employeeid=?");
        $stmt->bind_param("i", $eid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
