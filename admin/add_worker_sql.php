<?php

include 'dbCon.php';

$worker_name    = $_POST['worker_name'];
$worker_email   = $_POST['worker_email'];
$worker_mobile  = $_POST['worker_mobile'];
$worker_address = $_POST['worker_address'];
$worker_pincode = $_POST['worker_pincode'];

$sql = "INSERT INTO `worker` (`worker_name`,`worker_email`, `worker_mobile`,`worker_address`, `worker_pincode`) VALUES ('$worker_name','$worker_email','$worker_mobile','$worker_address', '$worker_pincode')";

if ($conn->query($sql) === TRUE) {
    echo 'success';
} else {
    echo false;
}


?>