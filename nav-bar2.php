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
      case 'admin':
        echo $frontLink.'clerks.php"> Clerks '.$endLink;
        echo $frontLink.'doctors.php"> Doctors '.$endLink;
        echo $frontLink.'nurse.php"> Nurses '.$endLink;
        echo $frontLink.'compounder.php"> Compounders '.$endLink;
        echo $frontLink.'labTech.php"> Laboratory technicians '.$endLink;
        echo $frontLink.'pharmacists.php"> Pharmacists '.$endLink;
        break;
      default:
        // code...
        break;
    }
      echo '</ul> </nav></div>';
  }

?>
