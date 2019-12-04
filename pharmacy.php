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
<body>
<div style"height:100px,width:100vw,background:#0000,z-index:15;"></div>
<div class = 'container'>
<h2>PHARMACY</h2>

<table class='table table-striped text-center '>
  <thead class="thead-inverse">
				<tr>
				<th><center>Medicine ID</center></th>
				<th><center>Medicine Name</center></th>
				<th><center>Stock </center></th>
				</tr>
				</thead>
<?php
	$result = getAllMedicines();


	while($row = $result->fetch_array())
	{
		$status = ' ';
		$link = "<td ><a href= 'pharmacy.php?med_id=" . $row['med_id'] . "'>";
		$endingTag = "</a></td>";
		echo "<tr class=\"" . $status . "\"> ";
		echo "$link". $row['med_id'] . "$endingTag";
		echo "$link" . $row['med_name'] . "$endingTag";
		echo "$link" . $row['stock'] . "$endingTag";

		echo "</tr>";
	}
?>
</table>
</div>
</body>
<?php include("footer.php"); ?>