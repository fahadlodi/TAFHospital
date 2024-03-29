<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<html class="animated pulse">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<link href="./animate.css" rel="stylesheet">

<?php
  include ("header.php");
  include "library.php";
  noAccessIfNotLoggedIn();
  noAccessForNormal();
  noAccessForClerk();
  noAccessForAdmin();

  include ("nav-bar.php");
?>
<div class = 'container'>
<h2>Upcomming Appointments</h2>
<p>Click on the the field to fill additional information</p>

<table class='table table-striped text-center '>
  <thead class="thead-inverse">
				<tr>
				<th><center>Appointment No</center></th>
				<th><center>Patient's Full Name</center></th>
				<th><center>Medical Condition</center></th>
				</tr>
	</thead>
<?php
    function getSpeciality()
    {
        global $connection;
        $x=$_SESSION["username"];
        //print($x);
        return $connection->query("SELECT speciality FROM doctors where email=$x;");
    }

    $sp = getSpeciality();
    print($sp);



    //$v = ("SELECT speciality FROM doctors WHERE email='$x';");
    //$x=$connection->query("select * from doctors where speciality="+$v);
    //print($v);
    //$r=$x->fetch_array();
    
    $result = getPatientsFor('Dentist');

    while ($row = $result->fetch_array()) 
    {
        $status = ' ';
        if (appointment_status((int) $row['appointment_no']) == 1) {
            $status = 'table-active';
        } elseif (appointment_status((int) $row['appointment_no']) == 2) {
            $status = 'table-success';
        }

        $link = "<td ><a href= 'update_info.php?appointment_no=".$row['appointment_no']."'>";
        $endingTag = '</a></td>';
        echo '<tr class="'.$status.'"> ';
        echo "$link".$row['appointment_no']."$endingTag";
        echo "$link".$row['full_name']."$endingTag";
        echo "$link".$row['medical_condition']."$endingTag";
        echo '</tr>';
    }
?>
</table>
</div>
<?php include("footer.php");?>