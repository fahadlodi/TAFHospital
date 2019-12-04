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
</br></br>
<div class = "container">
<h2>General Ward Registration</h2>
</br></br>


<div class="col col-xl-5 col-sm-6 " id="register1">
    <form method="post" action="GW_room_allocate.php">
    </br>
        <div class="form-group">
          <label for="usr">Pateint ID:</label>
          <input type="number" class="form-control" name="patient_ID" required>
        </div>
</div>

<div class="col col-xl-5 col-sm-6 " id="register1">
    <form method="post" action="GW_room_allocate.php">
    </br>
        <div class="form-group">
          <label for="usr">Room ID:</label>
          <input type="number" class="form-control" name="room_ID" required>
        </div>
</div>


</br></br>
<div class="form-group" align="center">
<form  action="ward_info.php" method="post" >
          <input type="submit" class="btn btn-primary" value="Register">
          </form> 
</div>




</div>

<?php include("footer.php");?>