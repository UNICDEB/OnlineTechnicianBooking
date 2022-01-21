<?php
require_once('session.php');
require_once('header.php');
include("style.php");
?>

<body>

<div class="container">
  <center>
  <form action="signup_process.php">
    
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your first name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="sex">Sex</label>
      </div>
      <div class="col-75">
        <select id="sex" name="sex" placeholder="Your sex..">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="district">District</label>
      </div>
      <div class="col-75">
        <input type="text" id="district" name="district" placeholder="Your district..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="police station">Police Station</label>
      </div>
      <div class="col-75">
        <input type="text" id="police_station" name="police_station" placeholder="Your police_station..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="pin">Pincode</label>
      </div>
      <div class="col-75">
        <input type="text" id="pin" name="pin" placeholder="Your pincode..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phone">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="phone" placeholder="Your phone number..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email..">
      </div>
    </div>
  </center>

    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Your password..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password1">Confirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password1" name="password1" placeholder="Re-enter password..">
      </div>
    </div>

       <div class="row">
       <center><button><input type="submit" value="Submit"></button></center> 
    
  </div>
  <p>Already have an account? <a href="login_form.php">Login here</a>.</p>


  </form>
</div>

</body>
</html>

<?php require_once('footer.php'); ?>