<?php
function selectCustomers() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select customer_id, first_name, last_name, dob, email, phone, order_id from customers;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
