<?php

include 'dbCon.php';

$uid    = $_POST['uid'];
$pass   = $_POST['pass'];

$sql = "INSERT INTO `admin` (`uid`,`pass`) VALUES ('$uid','$pass')";

if ($conn->query($sql) === TRUE) {
    echo 'success';
} else {
    echo false;
}

?>