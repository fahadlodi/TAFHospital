<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>
<html class="animated pulse">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<link href="./animate.css" rel="stylesheet">

<?php
  include("header.php");
  include("library.php");
  noAccessIfNotLoggedIn();
  noAccessForNormal();
  noAccessForLaboratory();
  noAccessForDoctor();  
  noAccessForPharmacist();

  noAccessForClerk();
  include("nav-bar.php");
$unaltered_string = "\n"; 
echo nl2br($unaltered_string);
?>
<br>
<h1 align=center>STAFF INFORMATION</h1>
</br>
<p align="left" style="margin-left:11vw;">
<label for="sel1">Select list:</label>
<br>
<?php
//include("nav-bar2.php");
include("drop_staff_info.php");
?>
</p>
<?php include("footer.php"); ?>