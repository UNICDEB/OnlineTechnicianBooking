<?php

include 'dbCon.php';

$worker_id      = $_POST['worker_id'];
$worker_name    = $_POST['worker_name'];
$worker_email   = $_POST['worker_email'];
$worker_mobile  = $_POST['worker_mobile'];
$worker_address = $_POST['worker_address'];
$worker_pincode = $_POST['worker_pincode'];

$sql = "UPDATE `worker` SET `worker_name`='$worker_name', `worker_email`='$worker_email', `worker_mobile`='$worker_mobile', `worker_address`='$worker_address', `worker_pincode`='$worker_pincode' WHERE `worker_id`=$worker_id";
if ($conn->query($sql) === TRUE)
{
    return "Record updated successfully.";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

//        header("Location: view.php");
?>