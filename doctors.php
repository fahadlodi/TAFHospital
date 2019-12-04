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

  noAccessForDoctor();
  noAccessForNormal();
  noAccessForClerk();
  noAccessForLaboratory();
  noAccessIfNotLoggedIn();
  noAccessForPharmacist();
  include('nav-bar.php');
  include("nav-bar2.php");

?>
<body>
<div style"height:100px,width:100vw,background:#0000,z-index:15;"></div>
<div class = 'container'>
<h2>DOCTORS INFORMATION</h2>

<table class='table table-striped text-center '>
  <thead class="thead-inverse">
				<tr>
				<th><center>FULL NAME</center></th>
                <th><center>EMAIL ID</center></th>
                <th><center>SPECIALITY</center></th>
                <th><center>AGE</center></th>
                <th><center>ADDRESS</center></th>
                <th><center>CNIC</center></th>
				</tr>
				</thead>
<?php
	$result = getAllDoctors();


	while($row = $result->fetch_array())
	{
		$status = ' ';
		$link = "<td ><a href= 'doctors.php?fullname=" . $row['fullname'] . "'>";
		$endingTag = "</a></td>";
		echo "<tr class=\"" . $status . "\"> ";
		echo "$link". $row['fullname'] . "$endingTag";
        echo "$link" . $row['email'] . "$endingTag";
        echo "$link" . $row['speciality'] . "$endingTag";
        echo "$link" . $row['age'] . "$endingTag";
        echo "$link" . $row['address'] . "$endingTag";
        echo "$link" . $row['CNIC'] . "$endingTag";
		echo "</tr>";
	}
?>
</table>
</div>
</body>
<?php include("footer.php"); ?>