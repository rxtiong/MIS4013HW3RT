<?php
function selectCustomers() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select customer_id, first_name, last_name, dob, email, phone, order_id from customers;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

function insertCustomer($cFName, $cLName, $cdob, $cEmail, $cPhone, $cOrder) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into customers (first_name, last_name, dob, email, phone, order_id)
                                values (?,?,?,?,?,?);");
        $stmt->bind_param("ssssss", $cFName, $cLName, $cdob, $cEmail, $cPhone, $cOrder);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function updateCustomer($cFName, $cLName, $cdob, $cEmail, $cPhone, $cOrder, $cid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update customers set first_name = ?,last_name=?,dob=?,email=?, phone=?, order_id=?
                                where customer_id = ?;");
        $stmt->bind_param("ssssssi", $cFName, $cLName, $cdob, $cEmail, $cPhone, $cOrder, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function deleteCustomer($cid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from customers where customer_id=?;");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}
?>
