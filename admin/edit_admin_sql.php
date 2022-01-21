<?php

include 'dbCon.php';

$id      = $_POST['id'];
$username      = $_POST['username'];
$password    = $_POST['password'];

$sql = "UPDATE `admin_tbl` SET `username`='$username', `password`='$password' WHERE `id`=$id";
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