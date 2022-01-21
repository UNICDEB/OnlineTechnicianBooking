<?php

session_start();

if (!isset($_SESSION['adminID']))
{
    header("location: index.php");
}

?>
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
</head>
<body style="background-image:url(image/winter.jpg);">

<div class="center">
    <p style="height:20px"></p>
    <fieldset style="width: 600px;">
        <legend align="center"><h3>Add Admin</h3></legend>
        <form method="post" id="form" action="" enctype="multipart/form-data">
            <table width="500"
                   class="w3-table w3-striped w3-bordered w3-card-4 w3-container w3-center w3-animate-opacity">
                <tr>
                    <td style="vertical-align:middle;"><b>User Name</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" placeholder="Name" name="uid"
                               id="uid"/></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>Password</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" placeholder="Password"
                               name="pass" id="pass"/></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" class="w3-btn w3-round-large w3-teal" name="submit" id="submit"
                               value="Submit"/>
                        <a href="admin.php"><input type="button" name="back" class="w3-btn w3-round-large w3-teal"
                                                   value="Back"></a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
<script>
    $(function () {
        $("#form").submit(function (event) {
            var uid = $('#uid').val();
            var pass = $('#pass').val();

            var submit_status = 'true';

            if(uid == '')
            {
                alert('User Name Required');
                submit_status = 'false'
            }

            if(pass == '')
            {
                alert('Password Required');
                submit_status = 'false'
            }

            event.preventDefault();

            if(submit_status == 'true')
            {
                var formData = new FormData($("#form")[0]);

                $.ajax({
                    url: 'add_admin_sql.php',  //Server script to process data
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(r){
                    alert("Form Submitted Succeesfully");

                    if( confirm("You want to show the entered details?")){
                        window.location.href="view_admin.php";
                    }
                });
            }

        });
    });
</script>
</body>
</html>
