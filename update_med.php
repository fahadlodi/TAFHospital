<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<html class= "animated pulse">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<link href="./animate.css" rel="stylesheet">


<?php 
  include("header.php");
  include("library.php");

  noAccessForDoctor();
  noAccessForNormal();
  noAccessForAdmin();
  noAccessForClerk();
  noAccessForLaboratory();
  noAccessIfNotLoggedIn();

  include('nav-bar.php');
?>


<div class = "container">
<?php
if(isset($_POST['MED_ID'])){
$i= update_medicine_info($_POST['MED_ID'],$_POST['med_stock']);
}
?>
<div class="col col-xl-6 col-sm-6" id="register1">
    <form method="post" action="update_med.php">
      <h2>Update Medicines </h2>
        <div class="form-group">
          <label for="usr">Medicine ID:</label>
          <input type="number" class="form-control" name="MED_ID" required>
        </div>
            
        <div class="form-group">
          <label for="usr">Stock:</label>
          <input type="number" class="form-control"  name="med_stock" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="submit">
        </div>
</div>
</div>
<?php
include('footer.php');
?>

