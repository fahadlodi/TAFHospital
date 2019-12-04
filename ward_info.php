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

<div class = "container">

<!doctype html>
<html lang="en" class="animated pulse">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title> Ward Rooms </title>
    <link rel="stylesheet" href="./bootstrap-43.css">
    <link rel="stylesheet"  href="./r_ward.css">
    <link href="./animate.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <!-- <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- Custom styles for this template -->
  
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm"> </div>

<div cSlass="room-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" class="room-header">
  <h1 class="display-4">Ward Rooms</h1>
</div>

</br>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
    <div style = "background-color:dodgerblue;color:white;padding:10px;">
      <div class="card-header">
      
        <h4 class="my-0 font-weight-normal"> General Ward </h4>
      </div>
      <div class="card-body">
        
        <ul class="list-unstyled mt-3 mb-4">
          <font size= "2"><li> 5000 pkr </li>
          <li> per day </li>
          <li> 3 times meal included </li></font>
        </ul>
        <a href='GW_room_allocate.php'> <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add room</button> </a>

      </div>
    </div>
    </div>

    </br>

    <div class="card mb-4 shadow-sm">
    <div style = "background-color:#0265a7;color:white;padding:10px;">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Private Ward</h4>
      </div>
      <div class="card-body">
         <ul class="list-unstyled mt-3 mb-4">
          <li> 15,000 pkr </li>
          <li> per day </li>
          <li> 3 times meal included </li>
        </ul>
        <a href='PW_room_allocate.php'> <button type="button" class="btn btn-lg btn-block btn-outline-primary"> Add room</button> </a>
      </div>
    </div>
    </div>

    </br>

    <div class="card mb-4 shadow-sm">
    <div style = "background-color:dodgerblue;color:white;padding:10px;">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> VIP Ward</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li> 30,000 pkr</li>
          <li> per day </li>
          <li> 3 times meal included </li>
        </ul>
        <a href='VIPW_room_allocate.php'> <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add room</button> </a>
      </div>
    </div>
  </div>
  <div>
</div>
</div>
</body>
</html>

<?php include("footer.php");?>