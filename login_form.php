<?php
require_once('session.php');
require_once('header.php');
include('style.php');
?>

<body>
<div class="container">
   <center>
  <form action="login_process.php">
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your Email..">
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
      <div class="col-25">
        <label for="password1">Re enter Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password1" name="password1" placeholder="Re enter password..">
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
    
