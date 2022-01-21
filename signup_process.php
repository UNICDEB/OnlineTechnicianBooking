<?php
session_start();

include("db/db.php");

$_SESSION['err'] = null;
$redirect = 0;

if(!empty($_REQUEST['fname']))
{
    $fname =  $_REQUEST['fname'];
}
else
{
    $redirect = 1;
    echo "<script language='javascript' type='text/javascript'> alert('first name field is required') </script>";
}

if(!empty($_REQUEST['lname']))
{
    $lname =  $_REQUEST['lname'];
}
else
{
    $redirect = 1;
    echo "<script language='javascript' type='text/javascript'> alert('last name field is required') </script>";
}

if(!empty($_REQUEST['sex']))
{
    $sex =  $_REQUEST['sex'];
}
else
{
    echo "<script language='javascript' type='text/javascript'> alert('sex field is required') </script>";
    $redirect = 1;
 }

if(!empty($_REQUEST['district']))
{
    $district =  $_REQUEST['district'];
}
else
{
    echo "<script language='javascript' type='text/javascript'> alert('district field is required') </script>";
    $redirect = 1;
 }

if(!empty($_REQUEST['police_station']))
{
    $police_station =  $_REQUEST['police_station'];
}
else
{
    echo "<script language='javascript' type='text/javascript'> alert('police station field is required') </script>";
    $redirect = 1;
}

if(!empty($_REQUEST['pin']))
{
    $pin =  $_REQUEST['pin'];
}
else
{
    echo "<script language='javascript' type='text/javascript'> alert('pin field is required') </script>";
    $redirect = 1;
 }

if(!empty($_REQUEST['phone']))
{
    $phone =  $_REQUEST['phone'];
}
else
{
    echo "<script language='javascript' type='text/javascript'> alert('phone no field is required') </script>";
    $redirect = 1;
}

if(!empty($_REQUEST['email']))
{
    $email =  $_REQUEST['email'];
    $sql1= "SELECT * FROM `user` where `email`='$email'";
    $result = $db_conn->query($sql1);
    

    if($result->num_rows > 0)
    {
        echo "<script language='javascript' type='text/javascript'> alert('email already exist') </script>";
        $redirect = 1;
    }
}
else
{
    echo "<script language='javascript' type='text/javascript'> alert('email field is required') </script>";
    $redirect = 1;
}


if(!empty($_REQUEST['password']))
{
    $password =  $_REQUEST['password'];
}
else
{
    echo "<script language='javascript' type='text/javascript'> alert('password field is required') </script>";
    $redirect = 1;
}

if(!empty($_REQUEST['password1']))
{
    $password1 =  $_REQUEST['password1'];
}
else
{
    echo "<script language='javascript' type='text/javascript'> alert('Re enter password field is required') </script>";
    $redirect = 1;
}

if($password!=$password1)
{
    echo "<script language='javascript' type='text/javascript'> alert('password not matched') </script>";
    $redirect = 1;
}

if( $redirect )
{
        echo "<script language='javascript' type='text/javascript'> location.href='signup_form.php' </script>";    
}
else{

    $sql = "INSERT INTO `user` (`firstname`,`lastname`,`sex`,`district`,`police_station`,`pin`,`phone`,`email`,`password`) VALUES ('$fname','$lname','$sex','$district','$police_station','$pin','$phone','$email','$password')";

    if($db_conn->query($sql) === TRUE){
        echo "<script language='javascript' type='text/javascript'> alert('Successfully Created New User') </script>";
        echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
    }

    else{
        die($db_conn->error);
    }

}

include("db/db_close.php");

?>