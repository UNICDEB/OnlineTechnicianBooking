<?php

require_once('session.php');
include("db/db.php");

$_SESSION['err'] = null;

$redirect = 0;

if (!empty($_REQUEST)) {
    
if(!empty($_REQUEST['username']))
{
    $username =  $_REQUEST['username'];
    $sql1= "SELECT * FROM `admin` where `username`='$username'";
    $result = $db_conn->query($sql1);
  

    if($result->num_rows > 0)
    {
        if(!empty($_REQUEST['password']))
        {
            $password =  $_REQUEST['password'];

            $sql = "SELECT * FROM `admin` WHERE `username` = '$username' and `password` = '$password'";
            $result = $db_conn->query($sql);
            
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $admin_data = array( 'id' => $row['id'], 'username' => $row['username'] );
                $_SESSION['admin_login'] = $admin_data;

                $username = $_SESSION['admin_login']['username'] ;

                echo "<script language='javascript' type='text/javascript'> alert('Welcome Admin $username') </script>";
                echo "<script language='javascript' type='text/javascript'> location.href='dashboard.php' </script>";
            }
            else{
                echo "<script language='javascript' type='text/javascript'> alert('password is incorrect') </script>";
                $redirect = 1;
            }

        }
    }else{
        echo "<script language='javascript' type='text/javascript'> alert('Invalid Username') </script>";
        echo "<script language='javascript' type='text/javascript'> location.href='admin_login_form.php' </script>";
    }
}
}        
if( $redirect )
{
    echo "<script language='javascript' type='text/javascript'> location.href='admin_login_form.php' </script>";
}

?>