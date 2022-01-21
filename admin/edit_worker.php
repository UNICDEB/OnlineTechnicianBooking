<?php

session_start();

if (!isset($_SESSION['adminID']))
{
    header("location: index.php");
}

include("dbCon.php");

$sql = "SELECT * FROM worker WHERE worker_id='".$_GET['id']."'";

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

                if(submit_status == 'true')
                {
                    e.preventDefault();
                    $.ajax({
                        url: "edit_worker_sql.php",
                        method: "POST",
                        data: {
                            worker_id: $('#worker_id').val(),
                            worker_name: $('#worker_name').val(),
                            worker_email: $('#worker_email').val(),
                            worker_mobile: $('#worker_mobile').val(),
                            worker_address: $('#worker_address').val(),
                            worker_pincode: $('#worker_pincode').val(),
                        }
                    }).done(function(response) {
                        $("#ajaxresponse").html(response);
                        alert("Data Updated Successfully");
                        window.location.href="view_details.php";
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
            <td style="vertical-align:middle;"><b>Worker ID</b></td>
            <td style="vertical-align:middle;"><b>:</b><input type="hidden" value="<?php echo $data['worker_id'];?>" name="worker_id" id="worker_id" /></td>
            <td><input type="text" disabled class="w3-input w3-border w3-round-large" value="<?php echo $data['worker_id'];?>" placeholder="Worker" name="worker_id" id="worker_id" /></td>
        </tr>
        <tr>
            <td style="vertical-align:middle;"><b>Name</b></td>
            <td style="vertical-align:middle;"><b>:</b></td>
            <td><input type="text" class="w3-input w3-border w3-round-large" value="<?php echo $data['worker_name'];?>" placeholder="Name" name="worker_name" id="worker_name" /></td>
        </tr>
        <tr>
            <td style="vertical-align:middle;"><b>Email</b></td>
            <td style="vertical-align:middle;"><b>:</b></td>
            <td><input type="text" class="w3-input w3-border w3-round-large" value="<?php echo $data['worker_email'];?>" placeholder="E-mail" name="worker_email" id="worker_email" /></td>
        </tr>
        <tr>
            <td style="vertical-align:middle;"><b>Mobile</b></td>
            <td style="vertical-align:middle;"><b>:</b></td>
            <td><input type="text" class="w3-input w3-border w3-round-large" value="<?php echo $data['worker_mobile'];?>" placeholder="Mobile" name="worker_mobile" id="worker_mobile" /></td>
        </tr>
        <tr>
            <td style="vertical-align:middle;"><b>Address</b></td>
            <td style="vertical-align:middle;"><b>:</b></td>
            <td><input type="text" class="w3-input w3-border w3-round-large" value="<?php echo $data['worker_address'];?>" placeholder="Address" name="worker_address" id="worker_address" /></td>
        </tr>
        <tr>
            <td style="vertical-align:middle;"><b>Pincode</b></td>
            <td style="vertical-align:middle;"><b>:</b></td>
            <td><input type="text" class="w3-input w3-border w3-round-large" value="<?php echo $data['worker_pincode'];?>" placeholder="Pincode" name="worker_pincode" id="worker_pincode" /></td>
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
