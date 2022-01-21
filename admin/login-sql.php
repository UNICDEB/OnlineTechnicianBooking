<?php
session_start();
include("dbCon.php");

$sql = "SELECT * FROM admin_tbl WHERE username = '" .$_POST['username']. "' AND password = '" .$_POST['password']. "'";

$result = $conn->query($sql);

$data = mysqli_fetch_array($result);
$conn->close();

if ($_POST['username'] == $data['username'] && $_POST['password'] == $data['password'])
{
    $_SESSION['adminID'] = $data['username'];
    echo 'success';
}
else
{
    echo FALSE;
}


