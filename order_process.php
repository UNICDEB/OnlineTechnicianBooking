<?php
require_once('session.php');
include ("header.php");
include ("db/db.php");

ob_start();
$tid=$_GET['id'];

$userid = $_SESSION['user_login']['id'];

$sql = "SELECT * FROM technicians WHERE id='$tid'";
$result = $db_conn->query($sql);
$row = $result->fetch_assoc();
$tech_data = array('id' => $row['id'],'field' => $row['field']);
$_SESSION['tech'] = $tech_data;
$field =  $_SESSION['tech']['field'];


$sql1 = "SELECT * FROM $field,`user` WHERE $field.`district`=`user`.`district` and `user`.`id`=$userid";
$result1 = $db_conn->query($sql1);

$sql2 = "SELECT * FROM $field,`user` WHERE $field.`police_station`=`user`.`police_station` and `user`.`id`=$userid";
$result2 = $db_conn->query($sql2);

$sql3 = "SELECT * FROM $field,`user` WHERE $field.`pin`=`user`.`pin` and `user`.`id`=$userid";
$result3 = $db_conn->query($sql3);

if($result3->num_rows > 0){
	$row3 = $result3->fetch_assoc();
	$tech_data3 = array('id' => $row3['id'],'name' => $row3['name'], 'district' => $row3['district'], 'police_station' => $row3['police_station'], 'pin' => $row3['pin'], 'phone' => $row3['phone']);
	$_SESSION['technician'] = $tech_data3;
	
	echo "<script language='javascript' type='text/javascript'> location.href='technician_list.php' </script>";
}
else if($result2->num_rows > 0){
	$row2 = $result2->fetch_assoc();
	$tech_data2 = array( 'id' => $row2['id'],'name' => $row2['name'], 'district' => $row2['district'], 'police_station' => $row2['police_station'], 'pin' => $row2['pin'], 'phone' => $row2['phone']);
	$_SESSION['technician'] = $tech_data2;
	
	echo "<script language='javascript' type='text/javascript'> location.href='technician_list.php' </script>";
}
else if($result1->num_rows > 0){
	$row1 = $result1->fetch_assoc();
	$tech_data1 = array('id' => $row1['id'],'name' => $row1['name'], 'district' => $row1['district'], 'police_station' => $row1['police_station'], 'pin' => $row1['pin'], 'phone' => $row1['phone']);
	$_SESSION['technician'] = $tech_data1;
	
	echo "<script language='javascript' type='text/javascript'> location.href='technician_list.php' </script>";
}
include"footer.php";
?>