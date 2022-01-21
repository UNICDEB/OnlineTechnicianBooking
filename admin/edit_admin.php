<?php

session_start();

if (!isset($_SESSION['adminID']))
{
    header("location: index.php");
}

include("dbCon.php");

$sql = "SELECT * FROM admin_tbl WHERE id='".$_GET['id']."'";

$result = $conn->query($sql);

$data=mysqli_fetch_array($result);

?>
<!doc
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="icon" href="../image/a-29.png" type="image/png">
    <link rel="stylesheet" href="W3.css"/>

    <style>
        .center {
            margin: auto;
            width: 45%;
            border: 3px;
            padding: 10px;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('#form').on('submit', function(e){

                var username = $('#username').val();
                var password = $('#password').val();

                var submit_status = 'true';

                if(username == '')
                {
                    alert('User name Required');
                    submit_status = 'false'
                }

                if(password == '')
                {
                    alert('password Required');
                    submit_status = 'false'
                }

                if(submit_status == 'true')
                {
                    e.preventDefault();
                    $.ajax({
                        url: "edit_admin_sql.php",
                        method: "POST",
                        data: {
                            id: $('#id').val(),
                            username: $('#username').val(),
                            password: $('#password').val(),
                        }
                    }).done(function(response) {
                        $("#ajaxresponse").html(response);
                        alert("Data Updated Successfully");
                        window.location.href="view_admin.php";
                    });
                }

            });
        });
    </script>
</head>
<body style="background-image:url(image/winter.jpg);">

<div class="center">
    <p style="height:20px"></p>
    <fieldset style="width: 600px;"><legend align="center"><h3>Edit Questions & Answers</h3></legend>
        <form method="post" id="form" action="">
            <table width="500" class="w3-table w3-striped w3-bordered w3-card-4 w3-container w3-center w3-animate-opacity">
                <tr>
                    <td style="vertical-align:middle;"><b>ID</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" disabled class="w3-input w3-border w3-round-large" value="<?php echo $data['id'];?>" placeholder="Id" name="id" id="id" /></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>User Name</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" value="<?php echo $data['username'];?>" placeholder="User Name" name="username" id="username" /></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>password</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" value="<?php echo $data['password'];?>" placeholder="password" name="password" id="password" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" class="w3-btn w3-round-large w3-teal" name="submit" id="submit" value="Update" />
                        <a href="view_details.php"><input type="button" name="back" class="w3-btn w3-round-large w3-teal" value="Back to view"></a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
</body>
</html>
