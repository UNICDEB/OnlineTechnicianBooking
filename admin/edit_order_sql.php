<?php

include 'dbCon.php';

$booking_id = $_POST['booking_id'];
$user_name = $_POST['user_name'];
$name = $_POST['name'];
$booking_type = $_POST['booking_type'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$status = $_POST['status'];
$assign_worker_id = $_POST['assign_worker_id'];

$sql1 = "SELECT * FROM worker WHERE worker_id='".$assign_worker_id."'";

$result1 = $conn->query($sql1);

$data1 = mysqli_fetch_array($result1);

$assign_worker_name = $data1['worker_name'];


$sql = "UPDATE `booking` SET `user_name`='$user_name', `name`='$name', `booking_type`='$booking_type', `address`='$address', `pincode`='$pincode', `status`='$status',`worker_id`='$assign_worker_id', `worker_name`='$assign_worker_name' WHERE `id`=$booking_id";

if ($conn->query($sql) === TRUE) {
    return "Record updated successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

//        header("Location: view.php");
?>