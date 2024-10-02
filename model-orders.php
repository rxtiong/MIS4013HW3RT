<?php
function selectOrders() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select order_id, customer_id, order_date, total_amount, product_idfrom orders;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
