<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">

<?php 
  include("header.php");
  include("library.php");
  noAccessForClerk();
  noAccessForDoctor();
  noAccessForNormal();
  noAccessIfNotLoggedIn();
  include('nav-bar.php');
?>
<div class="container">
 	<h1 align=center>STAFF REGISTRATION</h1>
  
  <?php 
    if(isset($_POST['demail'])){
      $i = register($_POST['demail'],$_POST['dpassword'],$_POST['dfullname'],$_POST['dage'],$_POST['daddress'],$_POST['dCNIC'], $_POST['dqua'],$_POST['dSpecialist'],"doctors");
    }
    if(isset($_POST['Cemail'])){
      $i = register($_POST['Cemail'],$_POST['Cpassword'],$_POST['Cfullname'],$_POST['Cage'],$_POST['Caddress'],$_POST['CCNIC'], $_POST['Cqua'],'non',"clerks");
    }
    if(isset($_POST['Lemail'])){
      $i = register($_POST['Lemail'],$_POST['Lpassword'],$_POST['Lfullname'],$_POST['Lage'],$_POST['Laddress'],$_POST['LCNIC'], $_POST['Lqua'],'non',"laboratory");
    }
    if(isset($_POST['Pemail'])){
      $i = register($_POST['Pemail'],$_POST['Ppassword'],$_POST['Pfullname'],$_POST['Page'],$_POST['Paddress'],$_POST['PCNIC'],$_POST['Pqua'],'non',"pharmacist");
    }
    if(isset($_POST['Nemail'])){
      $i = register($_POST['Nemail'],$_POST['Npassword'],$_POST['Nfullname'],$_POST['Nage'],$_POST['Naddress'],$_POST['NCNIC'],$_POST['Nqua'],'non',"nurse");
    }
    if(isset($_POST['Coemail'])){
      $i = register($_POST['Coemail'],$_POST['Copassword'],$_POST['Cofullname'],$_POST['Coage'],$_POST['Coaddress'],$_POST['CoCNIC'],$_POST['Coqua'],'non',"compunder");
    }
    if(isset($_POST['DrDelEmail'])){
      $i = delete("doctors",$_POST['DrDelEmail']);
    }
    if(isset($_POST['ClDelEmail'])){
      $i = delete("clerks",$_POST['ClDelEmail']);
    }
    if(isset($_POST['LDelEmail'])){
      $i = delete("laboratory",$_POST['LDelEmail']);
    }
    if(isset($_POST['NDelEmail'])){
      $i = delete("nurse",$_POST['NDelEmail']);
    }
    if(isset($_POST['PDelEmail'])){
      $i = delete("pharmacist",$_POST['PDelEmail']);
    }
    if(isset($_POST['CDelEmail'])){
      $i = delete("compunder",$_POST['CDelEmail']);
    }
    
  ?>


<div class="col col-xl-6 col-sm-6" id="register1">
    <form method="post" action="admin_home.php">
      <h2>Clerk Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="Cfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="Cemail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="Cpassword" required>
        </div>

        <div class="form-group">
          <label for="usr">Age:</label>
          <input type="number" class="form-control"  name="Cage" required>
        </div>

        <div class="form-group">
          <label for="usr">Address:</label>
          <input type="text" class="form-control"  name="Caddress" required>
        </div>

        <div class="form-group">
          <label for="usr">CNIC:</label>
          <input type="text" class="form-control"  name="CCNIC" required>
        </div>

        <div class="form-group">
          <label for="usr">Qualification:</label>
          <input type="text" class="form-control"  name="Cqua" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Register">
          <input type="reset" name="" class="btn btn-danger"></button>
        </div>
        </br>
      </br>
      </br>
    </form>
    <form method="post" action="admin_home.php">
      
      <hr>
      <div class="form-group">
                <h2>Dismiss Clerk</h2>
            <select class='form-control' required value=1 name="ClDelEmail">
            <?php 
                $result = getListOfEmails('clerks');

                if(is_bool($result)){
                  echo "No clerks found in database";
                }else{
                  while($row = $result->fetch_array())
                  {
                    echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                  }
                }

            ?>
            </select>
            </div>
            <div class="form-group">

            <input type="submit" class="btn btn-primary" style="padding: 10px;" value="Delete">
            </div>
          </form>
</div>

<div class="col col-xl-6 col-sm-6 " id="register1">
    <form method="post" action="admin_home.php">
      <h2>Doctor Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="dfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="demail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="dpassword" required>
        </div>

        <div class="form-group">
          <label for="usr">Age:</label>
          <input type="number" class="form-control"  name="dage" required>
        </div>

        <div class="form-group">
          <label for="usr">Address:</label>
          <input type="text" class="form-control"  name="daddress" required>
        </div>

        <div class="form-group">
          <label for="usr">CNIC:</label>
          <input type="text" class="form-control"  name="dCNIC" required>
        </div>

        <div class="form-group">
          <label for="usr">Qualification:</label>
          <input type="text" class="form-control"  name="dqua" required>
        </div>

        <div class="form-group">
          <label for="pwd">Speciality:</label>
            <select class='form-control' required value=1 name="dSpecialist">
              <option value="Audiologist" class="option">Audiologist - Ear Expert</option>
              <option value="Allergist" class="option">Allergist - Allergy Expert</option>
              <option value="Anesthesiologist" class="option">Anesthesiologist - Anesthetic Expert</option>
              <option value="Cardiologist" class="option">Cardiologist - Heart Expert</option>
              <option value="Dentist" class="option">Dentist - Oral Care Expert</option>
              <option value="Dermatologist" class="option">Dermatologist - Skin Expert</option>
              <option value="Endocrinologist" class="option">Endocrinologist - Endocrine Expert</option>
            </select>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Register">
          <input type="reset" name="" class="btn btn-danger"></button>
        </div>
    </form>
                  <form method="post" action="admin_home.php">
     
      <hr>
      <div class="form-group">
                <h2>Dismiss Doctor</h2>
            <select class='form-control' required value=1 name="DrDelEmail">

            <?php 
                $result = getListOfEmails('doctors');

                if(is_bool($result)){
                  echo "No doctors found in database";
                }else{
                  while($row = $result->fetch_array())
                  {
                    echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                  }
                  echo '&emsp;';

                }

            ?>
            </select></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Delete">
            </div>
          </form>
        </div>
    </form>
  </div>
</div>


<div class='container'>

<div class="col col-xl-6 col-sm-6" id="register1">
    <form method="post" action="admin_home.php">
      <h2>Nurse Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="Nfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="Nemail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="Npassword" required>
        </div>

        <div class="form-group">
          <label for="usr">Age:</label>
          <input type="number" class="form-control"  name="Nage" required>
        </div>

        <div class="form-group">
          <label for="usr">Address:</label>
          <input type="text" class="form-control"  name="Naddress" required>
        </div>

        <div class="form-group">
          <label for="usr">CNIC:</label>
          <input type="text" class="form-control"  name="NCNIC" required>
        </div>

        <div class="form-group">
          <label for="usr">Qualification:</label>
          <input type="text" class="form-control"  name="Nqua" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Register">
          <input type="reset" name="" class="btn btn-danger"></button>
        </div>
    </form>
      <form method="post" action="admin_home.php">
      <hr>
      <div class="form-group">
                <h2>Dismiss Nurse</h2>
            <select class='form-control' required value=1 name="NDelEmail">
            <?php 
                $result = getListOfEmails('nurse');

                if(is_bool($result)){
                  echo "No nurse found in database";
                }else{
                  while($row = $result->fetch_array())
                  {
                    echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                  }
                }

            ?>
            </select>
            </div>
            <div class="form-group">

            <input type="submit" class="btn btn-primary" style="padding: 10px;" value="Delete">
            </div>
          </form>
</div>

<div class="col col-xl-6 col-sm-6 " id="register1">
    <form method="post" action="admin_home.php">
      <h2>Compounder Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="Cofullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="Coemail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="Copassword" required>
        </div>

        <div class="form-group">
          <label for="usr">Age:</label>
          <input type="number" class="form-control"  name="Coage" required>
        </div>

        <div class="form-group">
          <label for="usr">Address:</label>
          <input type="text" class="form-control"  name="Coaddress" required>
        </div>

        <div class="form-group">
          <label for="usr">CNIC:</label>
          <input type="text" class="form-control"  name="CoCNIC" required>
        </div>

        <div class="form-group">
          <label for="usr">Qualification:</label>
          <input type="text" class="form-control"  name="Coqua" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Register">
          <input type="reset" name="" class="btn btn-danger"></button>
        </div>
    </form>


        <hr>
                    <form method="post" action="admin_home.php">
        <div class="form-group">
                <h2>Dismiss Compounder</h2>
            <select class='form-control' required value=1 name="CoDelEmail">

            <?php 
                $result = getListOfEmails('compunder');

                if(is_bool($result)){
                  echo "No doctors found in database";
                }else{
                  while($row = $result->fetch_array())
                  {
                    echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                  }
                  echo '&emsp;';

                }

            ?>
            </select></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Delete">
            </div>
          </form>
        </div>
    </form>
  </div>
</div>
</div>

<div class='container'>

<div class="col col-xl-6 col-sm-6" id="register1">
    <form method="post" action="admin_home.php">
      <h2>Laboratory Technichian Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="Lfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="Lemail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="Lpassword" required>
        </div>

        <div class="form-group">
          <label for="usr">Age:</label>
          <input type="number" class="form-control"  name="Lage" required>
        </div>

        <div class="form-group">
          <label for="usr">Address:</label>
          <input type="text" class="form-control"  name="Laddress" required>
        </div>

        <div class="form-group">
          <label for="usr">CNIC:</label>
          <input type="text" class="form-control"  name="LCNIC" required>
        </div>

        <div class="form-group">
          <label for="usr">Qualification:</label>
          <input type="text" class="form-control"  name="Lqua" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Register">
          <input type="reset" name="" class="btn btn-danger"></button>
        </div>
    </form>
                  <form method="post" action="admin_home.php">
      </br>
      </br>
      </br>
      <hr>
      <div class="form-group">
                <h2>Dismiss Laboratory Technician</h2>
            <select class='form-control' required value=1 name="LDelEmail">
            <?php 
                $result = getListOfEmails('laboratory');

                if(is_bool($result)){
                  echo "No abtoratory technician found in database";
                }else{
                  while($row = $result->fetch_array())
                  {
                    echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                  }
                }

            ?>
            </select>
            </div>
            <div class="form-group">

            <input type="submit" class="btn btn-primary" style="padding: 10px;" value="Delete">
            </div>
          </form>
</div>

<div class="col col-xl-6 col-sm-6 " id="register1">
    <form method="post" action="admin_home.php">
      <h2>Pharmacist Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="Pfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="Pemail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="Ppassword" required>
        </div>

        <div class="form-group">
          <label for="usr">Age:</label>
          <input type="number" class="form-control"  name="Page" required>
        </div>

        <div class="form-group">
          <label for="usr">Address:</label>
          <input type="text" class="form-control"  name="Paddress" required>
        </div>

        <div class="form-group">
          <label for="usr">CNIC:</label>
          <input type="text" class="form-control"  name="PCNIC" required>
        </div>

        <div class="form-group">
          <label for="usr">Qualification:</label>
          <input type="text" class="form-control"  name="Pqua" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Register">
          <input type="reset" name="" class="btn btn-danger"></button>
        </div>
    </form>

</br></br></br>
        <hr>
                    <form method="post" action="admin_home.php">

        <div class="form-group">
                <h2>Dismiss Pharmacist</h2>
            <select class='form-control' required value=1 name="PDelEmail">

            <?php 
                $result = getListOfEmails('pharmacist');

                if(is_bool($result)){
                  echo "No pharmacist found in database";
                }else{
                  while($row = $result->fetch_array())
                  {
                    echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                  }
                  echo '&emsp;';

                }

            ?>
            </select></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Delete">
            </div>
          </form>
        </div>
    </form>
  </div>
</div>
</div>


</div>
<div class="col col-xl-6 col-sm-6 " id="register1">
</div>
<div class="col col-xl-6 col-sm-6 " id="register1">
</div>
<?php include("footer.php");?>


