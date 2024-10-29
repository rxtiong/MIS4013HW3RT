<?php
function selectOrders() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select order_id, customer_id, order_date, total_amount, product_id, employee_id from orders;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

function insertOrder($oCust, $oDate, $oAmount, $oProd, $eid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into orders ('customer_id','order_date','total_amount','product_id','employee_id')
                                values (?,?,?,?,?)");
        $stmt->bind_param("ssss", $oCust, $oDate, $oAmount, $oProd, $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function updateOrder($oCust, $oDate, $oAmount, $oProd, #eid, $oid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update orders set 'customer_id' = ?,'order_date'=?,'total_amount'=?,'product_id'=?, 'employee_id'=?
                                where order_id = ?");
        $stmt->bind_param("sssssi", $oCust, $oDate, $oAmount, $oProd, $eid, $oid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function deleteOrder($oid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from order where order_id=?");
        $stmt->bind_param("i", $oid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}
?>
