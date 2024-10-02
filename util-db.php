
<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('129.15.65.247', 'rxtiong', 'Rac86952', 'mis4013hw3rtdb');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>

