<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<html class="animated pulse">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<<link href="./animated.css" rel="stylesheet">

<?php 
  include("header.php");
  include("library.php");

  noAccessForDoctor();
  //noAccessForNormal();
  noAccessForAdmin();
  noAccessForClerk();
  //noAccessForPharmacist();
  //noAccessForLaboratory();
  noAccessIfNotLoggedIn();

  include('nav-bar.php');
?>

<html>
<div class = 'container'>
<h2>LABORATORY</h2>
<body>
	<table bgcolor="red">
    <table class='table table-striped text-center'> 
    <thead class="thead-inverse">

				<tr>
				<th><center>Test ID</center></th>
				<th><center>Test Name</center></th>
				<th><center>Fee(Rs) </center></th>
				</tr>
				</thead>
</html>
<?php
	$result = getAllTest();

	while($row = $result->fetch_array())
	{
		$status = ' ';
	/*	if(appointment_status((int) $row['appointment_no']) == 1){
			$status= "table-active";
		}else if (appointment_status((int) $row['appointment_no']) == 2){
			$status= "table-success";
		}
*/
  
$link = "<td ><a href= 'laboratory.php?test_id=" . $row['test_id'] . "'>";
		$endingTag = "</a></td>";
		echo "<tr class=\"" . $status . "\"> ";
		echo "$link". $row['test_id'] . "$endingTag";
		echo "$link" . $row['test_name'] . "$endingTag";
		echo "$link" . $row['fee'] . "$endingTag";
		echo "</tr>";
	}
?>

</table>
</div>
<?php include("footer.php"); ?>