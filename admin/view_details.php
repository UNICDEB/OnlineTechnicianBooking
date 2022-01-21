<?php

session_start();

if (!isset($_SESSION['adminID']))
{
    header("location: index.php");
}

include 'dbCon.php';

$sql = "SELECT * FROM worker";

$result = $conn->query($sql);	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
  <link rel="icon" href="../image/a-29.png" type="image/png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="W3.css"/>
<style type="text/css">
</style>
</head>

<body style="background-color:#FFF8DC">
<p style=""></p>
<fieldset style="border-color:black">
<table width="337" border="1" class="w3-table w3-striped w3-bordered w3-card-4 w3-container w3-center w3-animate-opacity">
  <tbody>
    <tr style="font-size: larger; font-weight: bold" class="w3-blue w3-hover-red">
      <td style="text-align:center; vertical-align:middle">ID</td>
      <td style="text-align:center; vertical-align:middle">Name</td>
      <td style="text-align:center; vertical-align:middle">Email</td>
      <td style="text-align:center; vertical-align:middle">Mobile</td>
      <td style="text-align:center; vertical-align:middle">Address</td>
      <td style="text-align:center; vertical-align:middle">Pincode</td>
      <td style="text-align:center; vertical-align:middle" colspan="2">Action</td>
    </tr>
    <?php  
	     while($data=mysqli_fetch_array($result)) {?>
    <tr class="w3-hover-text-red">
      <td><?php echo $data['worker_id'];?></td>
      <td><?php echo $data['worker_name'];?></td>
      <td><?php echo $data['worker_email'];?>&nbsp;</td>
      <td><?php echo $data['worker_mobile'];?>&nbsp;</td>
      <td><?php echo $data['worker_address'];?>&nbsp;</td>
      <td><?php echo $data['worker_pincode'];?>&nbsp;</td>
      <td style="text-align:center; vertical-align:middle" width="38"><a href="edit_worker.php?id=<?php  echo $data['worker_id']; ?>"><input type="button" name="button2" class="w3-btn w3-round-large w3-teal" id="button2" value="Edit"></a></td>
      <td style="text-align:center; vertical-align:middle" width="54"><a href="delete_worker_sql.php?id=<?php  echo $data['worker_id']; ?>"><input type="button" name="button3" id="button3" class="w3-btn w3-round-large w3-red" value="Delete"></a></td>
    </tr><?php } ?>
    <tr style="text-align: center">
      <td colspan="9" style="text-align:center">
          <a href="add_worker.php"><input type="button" name="button" id="button" class="w3-btn w3-round-large w3-teal" value="Add More Worker"></a>
      </td>
    </tr>
  </tbody>
</table>
</fieldset>

</body>
</html>