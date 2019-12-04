<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>
<html class="animated pulse">
  
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<link href="./animate.css" rel="stylesheet">

<?php
  include("header.php");
  include("library.php");
  noAccessForAdmin();
  noAccessForDoctor();
  noAccessForNormal();
  noAccessForClerk();
  //noAccessForPharmacist();
  noAccessForLaboratory();
  noAccessIfNotLoggedIn();
  if($_SESSION["user-type"] == 'pharmacist'){
    include("nav-bar.php");
  }
?>
<div class="container">
  <h2>Welcome, <?php echo $_SESSION["fullname"];?>!</h2>
      <div class='alert alert-info'>
      <h3>Enter Information</h3>
                <?php
                  if(isset($_POST['med_id'])){
                    $i = enter_medicine_info($_POST['med_id'],$_POST['med_name'],$_POST['stock']);
                    unset($_POST['med_id']); //unset all post variables
                    if (isset($_POST['med_id'])){
                    echo '<script type="text/javascript">location.reload();</script>';
                    }
                  }
                ?>
            <form action="add_med.php" method="POST">

            <div class="form-group" >
              <label for="usr">Medicine ID:</label>
             <input type="text" class="form-control" id="usr" name="med_id" required>
            </div>

            <div class="form-group">
              <label for="usr">Medicine name</label>
              <input type="text" class="form-control" id="usr" name="med_name" required>
            </div>
            <div class="form-group">
              <label for="usr">Stock:</label>
              <input type="text" class="form-control" id="usr" name="stock" required>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" >
              <input type="reset" name="" class="btn btn-danger">
            </div>
          </form>
</div>
<?php
  include("footer.php");
?>
