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
    <title>Quize Contest</title>
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
        <legend align="center"><h3>Add Worker</h3></legend>
        <form method="post" id="form" action="" enctype="multipart/form-data">
            <table width="500"
                   class="w3-table w3-striped w3-bordered w3-card-4 w3-container w3-center w3-animate-opacity">
                <tr>
                    <td style="vertical-align:middle;"><b>Name</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" placeholder="Name" name="worker_name"
                               id="worker_name"/></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>Email</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" placeholder="Email"
                               name="worker_email" id="worker_email"/></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>Mobile</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" placeholder="Mobile"
                               name="worker_mobile" id="worker_mobile"/></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>Address</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" placeholder="Address"
                               name="worker_address" id="worker_address"/></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>Pincode</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" placeholder="Pincode"
                               name="worker_pincode" id="worker_pincode"/></td>
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
            var worker_name = $('#worker_name').val();
            var worker_email = $('#worker_email').val();
            var worker_mobile = $('#worker_mobile').val();
            var worker_address = $('#worker_address').val();
            var worker_pincode = $('#worker_pincode').val();

            var submit_status = 'true';

            if(worker_name == '')
            {
               alert('Worker Name Required');
                submit_status = 'false'
            }

            if(worker_email == '')
            {
                alert('Worker Email Required');
                submit_status = 'false'
            }

            if(worker_mobile == '')
            {
                alert('Worker Mobile Required');
                submit_status = 'false'
            }

            if(worker_address == '')
            {
                alert('Worker Address Required');
                submit_status = 'false'
            }

            if(worker_pincode == '')
            {
                alert('Worker Pincode Required');
                submit_status = 'false'
            }

            event.preventDefault();

            if(submit_status == 'true')
            {
                var formData = new FormData($("#form")[0]);

                $.ajax({
                    url: 'add_worker_sql.php',  //Server script to process data
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(r){
                    alert("Form Submitted Succeesfully");

                    if( confirm("You want to show the entered details?")){
                        window.location.href="view_details.php";
                    }
                });
            }

        });
    });
</script>
</body>
</html>
