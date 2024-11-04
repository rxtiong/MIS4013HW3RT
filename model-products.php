<?php
function selectProducts() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select product_id, order_id, product_name, category, price from products");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

function selectOrders() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select order_id, customer_id, order_date, total_amount, product_id, employee_id from orders;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

function insertProduct($pOrder, $pName, $pCategory, $pPrice) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into products (order_id, product_name, category, price)
                                values (?,?,?,?);");
        $stmt->bind_param("sssd", $pOrder, $pName, $pCategory, $pPrice);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function updateProuct($pOrder, $pName, $pCategory, $pPrice, $pid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update orders set order_id = ?, product_name=?,category=?,price=?
                                where product_id = ?;");
        $stmt->bind_param("sssdi", $pOrder, $pName, $pCategory, $pPrice, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function deleteProduct($pid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from products where product_id=?;");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

?>
