<?php

session_start();

if (!isset($_SESSION['adminID'])) {
    header("location: index.php");
}

include("dbCon.php");

$sql = "SELECT * FROM booking WHERE id='" . $_GET['id'] . "'";

$result = $conn->query($sql);

$data = mysqli_fetch_array($result);

$sql1 = "SELECT * FROM worker ";
$result1 = $conn->query($sql1);

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
    <script>
        $(document).ready(function () {

            $('#form').on('submit', function (e) {

                var booking_id = $('#booking_id').val();
                var user_name = $('#user_name').val();
                var name = $('#name').val();
                var booking_type = $('#booking_type').val();
                var address = $('#address').val();
                var pincode = $('#pincode').val();
                var status = $('#status').val();
                var assign_worker_id = $('#assign_worker_id').val();

                var submit_status = 'true';

                if(booking_id == '')
                {
                    alert('Booking Id Required');
                    submit_status = 'false'
                }

                if(user_name == '')
                {
                    alert('User Nane Required');
                    submit_status = 'false'
                }

                if(name == '')
                {
                    alert('Nane Required');
                    submit_status = 'false'
                }

                if(booking_type == '')
                {
                    alert('Booking Type Required');
                    submit_status = 'false'
                }

                if(address == '')
                {
                    alert('Address Required');
                    submit_status = 'false'
                }

                if(pincode == '')
                {
                    alert('Pincode Required');
                    submit_status = 'false'
                }

                if(status == '')
                {
                    alert('Status Required');
                    submit_status = 'false'
                }

                if(assign_worker_id == '')
                {
                    alert('Assign worker Required');
                    submit_status = 'false'
                }



                e.preventDefault();

                if(submit_status == 'true')
                {
                    $.ajax({
                        url: "edit_order_sql.php",
                        method: "POST",
                        data: {
                            booking_id: $('#booking_id').val(),
                            user_name: $('#user_name').val(),
                            name: $('#name').val(),
                            booking_type: $('#booking_type').val(),
                            address: $('#address').val(),
                            pincode: $('#pincode').val(),
                            status: $('#status').val(),
                            assign_worker_id: $('#assign_worker_id').val(),
                        }
                    }).done(function (response) {
                        $("#ajaxresponse").html(response);
                        alert("Data Updated Successfully");
                        window.location.href = "view_order.php";
                    });
                }

            });

        });

    </script>
</head>
<body style="background-image:url(image/winter.jpg);">

<div class="center">
    <p style="height:20px"></p>
    <fieldset style="width: 600px;">
        <legend align="center"><h3>Assign Worker</h3></legend>
        <form method="post" id="form" action="">
            <table width="500"
                   class="w3-table w3-striped w3-bordered w3-card-4 w3-container w3-center w3-animate-opacity">

                <tr>
                    <td style="vertical-align:middle;"><b>Booking ID</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" disabled class="w3-input w3-border w3-round-large"
                               value="<?php echo $data['id']; ?>" placeholder="Booking" name="booking_id"
                               id="booking_id"/></td>
                </tr>

                <tr>
                    <td style="vertical-align:middle;"><b>User Name</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" disabled class="w3-input w3-border w3-round-large"
                               value="<?php echo $data['user_name']; ?>" placeholder="User Name" name="user_name"
                               id="user_name"/></td>
                </tr>

                <tr>
                    <td style="vertical-align:middle;"><b>Name</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large"
                               value="<?php echo $data['name']; ?>" placeholder="Name" name="name"
                               id="name"/></td>
                </tr>

                <tr>
                    <td style="vertical-align:middle;"><b>Booking Type</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large"
                               value="<?php echo $data['booking_type']; ?>" placeholder="Booking Type" name="booking_type"
                               id="booking_type"/></td>
                </tr>

                <tr>
                    <td style="vertical-align:middle;"><b>Address</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large"
                               value="<?php echo $data['address']; ?>" placeholder="Address"
                               name="address" id="address"/></td>
                </tr>

                <tr>
                    <td style="vertical-align:middle;"><b>Pincode</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large"
                               value="<?php echo $data['pincode']; ?>" placeholder="Pincode"
                               name="pincode" id="pincode"/></td>
                </tr>

                <tr>
                    <td style="vertical-align:middle;"><b>Status</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large"
                               value="<?php echo $data['status']; ?>" placeholder="Status"
                               name="status" id="status"/></td>
                </tr>

                <tr>
                    <td style="vertical-align:middle;"><b>Assign Worker Id</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td>
                        <select id="assign_worker_id" name="assign_worker_id" class="w3-input w3-border w3-round-large">
                            <option value="">Select Worker</option>
                            <?php
                            while($data1=mysqli_fetch_array($result1)) {
                               $selected = !empty($data['worker_id']) ? ($data1['worker_id'] == $data['worker_id']) ? 'selected' : '' : '';
                                ?>
                                <option value="<?php echo $data1['worker_id']; ?>" <?php echo $selected; ?>><?php echo $data1['worker_name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" class="w3-btn w3-round-large w3-teal" name="submit" id="submit"
                               value="Update"/>
                        <a href="view_details.php"><input type="button" name="back"
                                                          class="w3-btn w3-round-large w3-teal"
                                                          value="Back to view"></a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
</body>
</html>
