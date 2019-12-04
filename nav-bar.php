<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
  $beginning = '<div class="container"><nav class="navbar  navbar-default "><div class="navbar-header">
      <a class="navbar-brand"> HMS </a>
    </div><ul class="nav navbar-nav justified">';
  $frontLink = '<li class="nav-item"> <a class="" href="';
  $endLink = '</a></li>';

  if (isset($_SESSION['user-type'])) {
      echo $beginning;

      switch ($_SESSION['user-type']) {
      
      case 'doctor':
        echo $frontLink.'add_patient.php"> Add Patient '.$endLink;
        echo $frontLink.'patient_info.php"> Upcoming Appointments '.$endLink;
        break;

      case 'clerk':
        echo $frontLink.'add_patient.php"> Add Patient '.$endLink;
        echo $frontLink.'patient_info.php"> All Appointments '.$endLink;
        echo $frontLink.'ward_info.php"> Allocate Ward '.$endLink;
        echo $frontLink.'room_info.php"> Allocated Ward Rooms '.$endLink;
        break;

      case 'pharmacist':
        echo $frontLink.'pharmacy.php"> Pharmacy '.$endLink;
        echo $frontLink.'add_med.php"> Add Medicine '.$endLink;
        echo $frontLink.'update_med.php"> Update Medicine '.$endLink;
        break;

      case 'admin':
        echo $frontLink.'admin_home.php"> Staff Registeration '.$endLink;
        echo $frontLink.'staff_info.php"> Staff Information '.$endLink;
        echo $frontLink.'room_info.php"> Allocated Ward Rooms '.$endLink;
        break;
      
      case 'normal':
        echo $frontLink.'add_patient.php"> Register '.$endLink;
        echo $frontLink.'laboratory.php"> Laboratory '.$endLink;
        echo $frontLink.'pharmacy.php"> Pharmacy '.$endLink;


      default:
        // code...
        break;
    }
      echo '</ul> </nav></div>';
  }

?>
