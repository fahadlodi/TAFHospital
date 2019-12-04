<script>
var images = ["Images/s1.jpg", "Images/s2.jpg", "Images/s3.jpg","Images/s4.jpg"];

var i = 1;
var max = images.length;

function changeImage(){ 
  document.getElementById("slider").src = images[i++];
  if(i==max){
    i=0;
  }
}

setInterval(function(){changeImage()}, 3000);

</script>

<p align="center"><img src="Images/s1.jpg" class="img-responsive" width="100%" id="slider" align="center"></p>
