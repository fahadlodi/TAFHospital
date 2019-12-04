<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<html class="animated pulse">

<link href="./animate.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">

<?php
  include("header.php");
  include("library.php");
  noAccessIfNotLoggedIn();
  noAccessForNormal();
  noAccessForLaboratory();
  noAccessForPharmacist();
  include("nav-bar.php");
?>
<div class = "container">
<div class="col col-xl-6 col-sm-6 " id="register1">
    <form method="post" action="admin_home.php">
      <h2>Doctor Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="dfullname" required>
        </div>
</div>
</div>

<?php include("footer.php");?>