<?php
include('session.php');
include('header.php');
include('style.php');
include("db/db.php");
?>







<html>
  <body>
  	<center><div class="page-header" style="background-image: url(assets/library.jpg);width:800px;height:300px"></center>
  	<center>
  	<form>
	<div class="container">
		<div class="row">
		 <h2><b>ADMIN ADD/DELETE</b></h2>
			 <div class="row">
			 	<div class="col-md-6">
			 		<a href="add_admin_form.php" class="button">Add</a>
			 	</div>
			 	<div class="col-md-6">
			 		<a href="delete_admin_form.php" class="button2">Delete</a>
		 		</div>
			</div>
		</div>
	</div>




		
	</form>
	</div>
	</center>
</body>
</html>