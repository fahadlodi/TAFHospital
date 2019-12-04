<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    </title>
    <html class="animated pulse">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
    <link href="./animate.css" rel="stylesheet">
  </head>
  <body style="background-color:powderblue;color:black;padding:20px">
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
        <h1 align="center">T.A.F. HOSPITAL</h1>
          <a href="https://projectworlds.in" class="navbar-brand"></a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <!--a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Plot no- 1, Opposite SBI, Sector 12, Kharghar, Navi Mumbai</a-->
              </li>
              <li class="nav-item">
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: "right";"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
