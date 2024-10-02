<?php
function selectProducts() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select product_id, order_id, product_name, category, price from products");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

?>
