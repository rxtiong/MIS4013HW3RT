<?php
function selectEmployees() {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select employee_id, first_name, last_name from employees");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
}

function insertEmployee($eFName, $eLName) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into employee (first_name, last_name)
                                values (?,?);");
        $stmt->bind_param("ss", $eFName, $eLName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function updateEmployee($eFName, $eLName, $eid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update employees set first_name =?, last_name=?
                                where employee_id = ?;");
        $stmt->bind_param("ssi", $eFName, $eLName, $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}

function deleteEmployee($eid) {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from employees where employee_id=?;");
        $stmt->bind_param("i", $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
}


?>
