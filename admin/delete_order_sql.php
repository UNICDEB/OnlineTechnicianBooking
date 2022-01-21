<?php
include("dbCon.php");

$sql = "DELETE FROM booking WHERE id='".$_GET['id']."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: Delete a record - " . $conn->error;
}
$conn->close();

header("location: view_order.php");
?>