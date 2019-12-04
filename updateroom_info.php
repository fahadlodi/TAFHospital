<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>
<html class="animated pulse">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="./animate.css" rel="stylesheet">

<?php
  include("header.php");
  include("library.php");
  noAccessIfNotLoggedIn();
  noAccessForNormal();
  noAccessForAdmin();
 // noAccessForDoctor();
  noAccessForLaboratory();
  noAccessForPharmacist();
  //include("nav-bar.php");
?>

<div class="container">
<h2> Update Ward Info </h2>
<p> Enter Information Below</p>
<table class="table table-striped">
<?php

  if(isset($_GET['ward_id'])){
    $ward_id = $_GET['ward_id'];
    $result = getWardInfo($ward_id);

    while($row = $result->fetch_array())
    {
      $link = "<tr><th>";
      $mid = "</th><td>";
      $endingTag = "</td></tr>";
      echo "<tr>";   // patient name, ward name, charges
      echo "$link Patient Name: $mid". $row['full_name'] . "$endingTag";
      echo "$link Ward Name $mid" . $row['ward_name'] . "$endingTag";
      echo "$link Charges(in Rs.) $mid" . $row['charges'] . "$endingTag";
      echo "</tr>";
    }
  }
?>
</table>
</div>
<?php include("footer.php");?>
