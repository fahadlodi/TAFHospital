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
<div class = 'container'>
<h2>Allocated Ward</h2>

<table class='table table-striped text-center '>
  <thead class="thead-inverse">
				<tr>
				<th><center>Patient Name </center></th>
				<th><center>Ward Allocated</center></th>
				<th><center> Charges(in Rs.) </center></th>
				</tr>
	</thead>
<?php
    $result = getWardInfo();

    while ($row = $result->fetch_array()) {
        $status = ' ';
        $link = "<td ><a href= 'room_info.php?ward_id=".$row['ward_id']."'>";
        $endingTag = '</a></td>';
        echo '<tr class="'.$status.'"> ';
        echo "$link".$row['full_name']."$endingTag";
        echo "$link".$row['ward_name']."$endingTag";
        echo "$link".$row['charges']."$endingTag";
        echo '</tr>';
    }
?>
</table>
</div>

<?php include('footer.php'); ?>