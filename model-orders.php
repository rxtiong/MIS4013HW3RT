<?php
function selectOrders() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select order_id, customer_id, order_date, total_amount, product_id from orders;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

function insertOrder($oCust, $oDate, $oAmount, $oProd) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into 'orders' ('customer_id','order_date','total_amount','product_id')
                                values (?,?,?,?)");
        $stmt->bind_param("ssss", $oCust, $oDate, $oAmount, $oProd);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}
?>
