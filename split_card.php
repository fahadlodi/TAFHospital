<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 50px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
  <div class="column">
    <div class="card">
      <div style = "background-color:teal;color:white;padding:10px;">
      <h3>ABOUT US</h3>
      <p> It is my great pleasure to welcome you on behalf of our dedicated team of doctors, nurses and staff members, who work together to provide high quality healthcare services. </p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div style = "background-color:#d58512;color:white;padding:10px;">
        <h3>OUR MISSION</h3>
        <p> To focus on creating an excellence-driven, comprehensive, compassionate and replicable healthcare system accessible to all.
            To adhere to ethical best practices in all aspects of its operations. To empower its employees for their spiritual and professional growth
            To enhance and build human capacities through quality services. </p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <div style = "background-color:red;color:white;padding:10px;">
      <h3>OUR VALUE</h3>
      <p> * Responsibility to provide healthcare as the basic human right </br>
            * Excellence in quality of service delivery </br>
            * Dignity of patients and employees </br>
            * Teamwork in moving forward and achieving milestones </br>
            * Integrity in day to day activities </br>
            * Loyalty and commitment to self and passion to serve, bring smiles and change lives </p>
    </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <div style = "background-color:#0265a7;color:white;padding:10px;">
      <h3>CONTACT US</h3>
      <p> FAST University Hospital, Karachi</br>
        National Highway, P.O. Box 3500</br>
        Karac​​​hi 74800, Pakistan</br>
        Tel: +92 336 2594 119</br>
        Fax: +92 21 3493 4294, 3493 2095</br>
        Email: ​K173867@nu.edu.pk​</br>
    </div>
    </div>
  </div>
</div>
</div>
</body>
</html>