
<link href="bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    </title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
</head>

<?php
  $beginning = '<div class="container"><nav class="navbar navbar-default"><div class="navbar-header">
      <a class="navbar-brand"> </a>  
    </div><ul class="nav navbar-nav justified">';
  $frontLink = '<li class="nav-item" style="align-items: left;"> <a class="" href="';
  $endLink = '</a></li>';
  echo $beginning;
        echo $frontLink.'index.php"> Login/Register '.$endLink;
      echo '</ul> </nav></div>';
?>