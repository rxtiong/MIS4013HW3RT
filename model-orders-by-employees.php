<?php
function selectOrdersByEmployees($cid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select o.order_id, o.employee_id, first_name, last_name where o.employeeid=?");
        $stmt->bind_param("i", $cid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
