<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="./animate.css" rel="stylesheet">
<html class="animated pulse">
<?php 
  include("library.php");
  include("header.php");
  noAccessIfLoggedIn();
?>
  <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
        <?php
        ?>
        <a href="https://projectworlds.in" class="navbar-brand"></a>
            <ul class="nav nav-pills">
             
              <li class="nav-item">
              </li>
              <div class="container">
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
</div>

<div class="container">
  <?php 
    if(isset($_POST['lemail'])){
      $i = login($_POST['lemail'],$_POST['lpassword'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php" </script>';
      }
    }else if(isset($_POST['remail'])){
      $i = register($_POST['remail'],$_POST['rpassword'],$_POST['rfullname'],$_POST['apAge'],$_POST['raddress'],$_POST['rCNIC'], "users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
      }
    }else{
      echo "<div class='alert alert-info'>
              <strong>Info!</strong> Login or Register to be able to book your appointment.</div>";
    }
    unset($_POST);
  ?>
<div class="row">
  <div class="col col-xl-6 col-sm-6">
      <h2>Login</h2>
      <form action="index.php" method="POST">
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="lemail" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="lpassword" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          <input type="reset" class="btn btn-danger">
        </div>
          
      </form>
  </div>
          
  <div class="col col-xl-6 col-sm-6" id="register1">
    <form method="post" action="index.php">
	    <h2>Registration</h2>
	      <div class="form-group">
	        <label for="usr">Full Name:</label>
	        <input type="text" class="form-control" name="rfullname" required>
	      </div>
        
        <div class="form-group">
	        <label for="usr">Email:</label>
	        <input type="email" class="form-control" name="remail" required>
	      </div>
	          
        <div class="form-group">
	        <label for="pwd">Password:</label>
	        <input type="password" class="form-control"  name="rpassword" required>
	      </div>

        <div class="form-group">
	        <label for="pwd">Age:</label>
	        <input type="number" class="form-control"  name="apAge" required>
	      </div>
        
        <div class="form-group">
	        <label for="usr">Address:</label>
	        <input type="text" class="form-control" name="raddress" required>
	      </div>

        <div class="form-group">
	        <label for="pwd">CNIC:</label>
	        <input type="tel" class="form-control"  name="rCNIC" required>
	      </div>


	      <div class="form-group">
	        <input type="submit" class="btn btn-primary">
	        <input type="reset" class="btn btn-danger"></button>
	      </div>
    </form>
  </div>
</div>
</div>
<div class="container">
<?php include("footer.php"); ?>
</div>


