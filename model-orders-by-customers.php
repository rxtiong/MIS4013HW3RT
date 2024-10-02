<?php
function selectOrdersByCustomers($cid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select o.order_id, o.customer_id, first_name, last_name, order_date, total_amount 
                                from orders o join customers c on o.customer_id=c.customer_id where o.customer_id=?");
        $stmt->bind_param("i", $cid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
