<?php
require_once('session.php');
require_once('header.php');
include('style.php');
?>

<body>
<div class="container">
   <center>
  <form action="admin_login_process.php">
    <h2><center><b>ADMIN LOGIN</b></center></h2>
    <!--<div class="row">
      <div class="col-25">
        <label for="email">Admin Id</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" placeholder="Your Admin Id..">
      </div>
    </div>-->
    </center>
    <div class="row">
      <div class="col-25">
        <label for="username">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="Your Username..">
      </div>
    </div>
    </center>
    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Your password">
      </div>
    </div>
    <div class="row">
       <center><button><input type="submit" value="Submit"></button></center> 
    </div>
  </form>
</div>
</body>
</html>


<?php require_once('footer.php'); ?>
    
