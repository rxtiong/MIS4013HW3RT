<?php
function selectOrders() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select order_id, employee_id, customer_id, order_date, total_amount, product_id from orders;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}
#startign changes for drop down
function selectProductsForInput() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select product_id, product_name from products order by product_name;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

function selectEmployeesForInput() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select employee_id, first_name, last_name from employees order by last_name;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

#end changes for dropdown
function insertOrder($eid, $oCust, $oDate, $oAmount, $oProd) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into orders (employee_id, customer_id, order_date, total_amount, product_id)
                                values (?,?,?,?,?);");
        $stmt->bind_param("sssds", $eid, $oCust, $oDate, $oAmount, $oProd);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function updateOrder($eid, $oCust, $oDate, $oAmount, $oProd, $oid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update orders set employee_id=?, customer_id = ?,order_date=?,total_amount=?,product_id=? 
                                where order_id = ?;");
        $stmt->bind_param("sssdsi", $eid, $oCust, $oDate, $oAmount, $oProd, $oid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function deleteOrder($oid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from orders where order_id=?;");
        $stmt->bind_param("i", $oid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}
?>
