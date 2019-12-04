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

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: teal;
  color: black;
}

.flip-card-back {
  background-color: #d58512;
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>
<body>

<div class="container"style="padding-left: 10px;">
<div class="row">
<div class="column">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
            <h1>About us 1</h1>
              <div style="width:300px;height:300px;">
              </div>
                <div class="flip-card-back">
                <h2>John Doe</h2> 
                <p>Architect & Engineer</p> 
                <p>We love that guy</p>
                </div>
</div>
  </div>
</div>
</div>


    <div class="column"> 
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h1>About us 2</h1>
              <div style="width:300px;height:300px;">
              </div>
                <div class="flip-card-back">
                <h2>John Doe</h2> 
                <p>Architect & Engineer</p> 
                <p>We love that guy</p>
              </div>
           </div>
         </div>
      </div>
</div>

    <div class="column">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h1>About us</h1>
              <div style="width:300px;height:300px;">
              </div>
                <div class="flip-card-back">
                <h2>John Doe</h2> 
                <p>Architect & Engineer</p> 
                <p>We love that guy</p>
              </div>
           </div>
         </div>
      </div>
</div>


    <div class="column">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h1>About us</h1>
              <div style="width:300px;height:300px;">
              </div>
                <div class="flip-card-back">
                <h2>John Doe</h2> 
                <p>Architect & Engineer</p> 
                <p>We love that guy</p>
              </div>
           </div>
         </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>