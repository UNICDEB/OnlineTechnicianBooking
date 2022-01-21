<?php
session_start();
session_destroy();
session_start();
?>
echo "<script language='javascript' type='text/javascript'> alert('logout sucessfully') </script>";
echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
