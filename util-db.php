
<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('mis4013hw3rtdb.mysql.database.azure.com', 'rxtiong', 'Rac86952', 'storedb');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>

