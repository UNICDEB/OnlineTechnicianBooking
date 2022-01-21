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
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="icon" href="../image/a-29.png" type="image/png">
    <link rel="stylesheet" href="W3.css"/>
    <style>
        .center {
            margin: auto;
            width: 44%;
            border: 3px;
            padding: 10px;
        }
    </style>
</head>
<body style="background-image:url(image/winter.jpg);">
<p style="height:110px"></p>
<div class="center">
    <fieldset style="width: 570px;">
        <form>
            <table width="500" class="w3-table w3-striped w3-bordered w3-card-4 w3-container w3-center w3-animate-opacity">
                <tr>
                    <td style="text-align:right"><a href="index.php"><input type="button" class="w3-btn w3-round-large w3-teal" value="Log Out""></a></td>
                </tr>
                <tr> <td style="text-align:center; vertical-align: middle; font-family: Vijaya, bold;font-size: xx-large">Admin Home</td></tr>
                <tr> <td style="text-align:center;"><img src="../image/quiz1.png" alt="Not Found"></td> </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="add_worker.php"><input type="button" class="w3-btn w3-round-large w3-teal w3-padding-xlarge" value="Add Worker"></a>&nbsp;&nbsp;
                        <a href="view_details.php"><input type="button" class="w3-btn w3-round-large w3-teal w3-padding-xlarge" value="View Details"></a>
                    </td>

                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="view_order.php"><input type="button" class="w3-btn w3-round-large w3-teal w3-padding-xlarge" value="View Order"></a>&nbsp;&nbsp;
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="add_admin.php"><input type="button" class="w3-btn w3-round-large w3-teal w3-padding-xlarge" value="Add Admin"></a>&nbsp;&nbsp;
                        <a href="view_admin.php"><input type="button" class="w3-btn w3-round-large w3-teal w3-padding-xlarge" value="View Admin"></a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
</body>
</html>
