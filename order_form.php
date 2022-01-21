<?php
require_once('session.php');
require_once('header.php');
include("style.php");
include("db/db.php");
?>


<?php
                                $q="SELECT * FROM technicians";
                                $run=mysqli_query($db_conn,$q) or die(mysqli_error($db_conn));
                                while ($fetch=mysqli_fetch_array($run)) {
                            ?>
                          <div class="container">
    <div class="row">    
      <div class="col-md-12">
        <div class="breadcrumb-wrapper">
            <h1><a href="order_process.php?id=<?php echo $fetch['id']?>"><?php echo $fetch['field']; ?></a></h1>
        </div>
        </div>
    </div>
</div>
<h1></h1>

                          <?php 
                        }?>




</div>

<?php require_once('footer.php'); ?>