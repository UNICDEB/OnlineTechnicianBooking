<?php

include("session.php");

include("db/db.php");

$_SESSION['err'] = null;

$redirect = 0;

if (!empty($_REQUEST)) {
    
if(!empty($_REQUEST['email']))
{
    $email =  $_REQUEST['email'];
    $sql1= "SELECT * FROM `user` where `email`='$email'";
    $result = $db_conn->query($sql1);
    

    if($result->num_rows > 0)
    {
        if(!empty($_REQUEST['password']))
        {
            $password =  $_REQUEST['password'];

            if(!empty($_REQUEST['password1'])){
                $password1 =  $_REQUEST['password1'];

                if($password = $password1){
                    $sql = "SELECT * FROM user WHERE `email` = '$email' and `password` = '$password'";
                    $result = $db_conn->query($sql);
            
                     if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $user_data = array('id' => $row['id'], 'firstname' => $row['firstname'], 'district' => $row['district'], 'police_station' => $row['police_station'], 'pin' => $row['pin'],);
                        $_SESSION['user_login'] = $user_data;

                        $name = $_SESSION['user_login']['firstname'] ;
                        echo "<script language='javascript' type='text/javascript'> alert('Welcome $name') </script>";
                        echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";  
                    }
                    else{
                        echo "<script language='javascript' type='text/javascript'> alert('password is incorrect') </script>";
                        $redirect = 1;
                    }

                }
                else{
                    echo "<script language='javascript' type='text/javascript'> alert('password and re-password must be same') </script>";
                    $redirect = 1;
                }
            }   

        }
    }
    else{
        echo "<script language='javascript' type='text/javascript'> alert('Invalid User') </script>";
        $redirect = 1;
    }
}
}        
if( $redirect )
{
    echo "<script language='javascript' type='text/javascript'> location.href='login_form.php' </script>";
}

?>
          