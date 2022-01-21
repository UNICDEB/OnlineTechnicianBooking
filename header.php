<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kalpataru</title>

  <link rel="shortcut icon" href="assets/img/favicon.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand logo" href="index.html"><img src="image/logo.png" alt="default logo" style="width:50%;height:30%%;"></a>
      <a class="navbar-brand" href="index.php">Kalpataru</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="contact_us.php">Office Location</a></li>
      <li><a href="service_charge.php">Service_charge</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">


        <?php
        if(!empty($_SESSION['user_login']))
        {
            $user = $_SESSION['user_login'];
            ?>
            <li><a><span class="glyphicon glyphicon-user"></span><?php echo $user['firstname'] ?></a></li>
            <li><a href="order_form.php"><span class="fa fa-heart-o"></span> order</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php
        }else if(!empty($_SESSION['admin_login'])){
            $admin = $_SESSION['admin_login'];
        ?>
            <li><a><span class="glyphicon glyphicon-user"></span><?php echo $admin['username'] ?></a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php
        }else{
            ?>
            <li><a href="signup_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login_form.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="admin_login_form.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
        <?php
        }
        ?>
    

    </ul>
  </div>
</nav>

</body>
</html>
