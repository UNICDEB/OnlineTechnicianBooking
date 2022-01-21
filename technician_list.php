<?php
include("session.php");
include("style.php");
include("db/db.php");

/*ob_start();
$fieldid=$_GET['id'];
$techid=$_GET['tid'];
$userid=$_GET['userid'];
*/
$userid = $_SESSION['user_login']['id'];


$sql1 = "SELECT * FROM `technicians` WHERE `field`=$userid";
$result1 = $db_conn->query($sql1);
$row1 = $result1->fetch_assoc();
$tech_data1 = array('id' => $row1['id']);
$_SESSION['tech'] = $tech_data1;

$fieldid = $_SESSION['tech']['id'];




$technician = $_SESSION['technician'];
$techid =  $technician['id'];
$name =  $technician['name'];
$district = $technician['district'];
$police = $technician['police_station'];
$pin = $technician['pin'];
$phone =$technician['phone'];
//echo "$userid $techid $fieldid";
?>
<!DOCTYPE html>
<html>

<head>
	<style>
		table, th, td {
			border:1px solid black;
		}
	</style>
</head>

<body>
	<div class="container">
	<div class="row">    
  	  <div class="col-md-12">

	<h1 style="text-align: center;color: grey;"> Technician Details </h1>
	<center><p1>Your will get your service within 24 hours</p1></center>
	<h3></h3>
	<table style="width:100%; text-align: center;">
		<tr>
			<th>NAME</th>
			<th>DISTRICT</th>
			<th>POLICE_STATION</th>
			<th>CONTACT NO.</th>
		</tr>
		<tr>
			<th><?php echo "$name"?></th>
			<th><?php echo "$district"?></th>
			<th><?php echo "$police"?></th>
			<th><?php echo "$phone"?></th>
		</tr>
	</table>
	</div>
	</div>
	</div>

	<html>
  <body>
  	<center>
  	<form action="" method="post">
	<div class="container">
		<div class="row">
		 <P2><b>IF YOU CONFIRM THEN WE WILL FURTHER PROCESS YOUR ORDER.</b></h2>
			 <div class="row">
			 	<div class="col-md-6">
			 		<center><button><input type="submit" name="confirm" value="CONFIRM"></button></center>
			 	</div>
			</div>
		</div>
	</div>
	</center>
  </body>
</form>
</html>


</body>
</html>

<?php


if(!empty($_REQUEST['confirm'])){

	$sql = "INSERT INTO `booking` (`uid`,`fieldid`,`techid`) VALUES ('$userid','$fieldid','$techid')" ;
	$result = $db_conn->query($sql);
	            
	if($result){

		echo "<script language='javascript' type='text/javascript'> alert('Successfully order has submitted') </script>";
	   	echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
	}

}

include("footer.php");
?>
