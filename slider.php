<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<div class="w3-container">
  <h2>Slideshow Caption</h2>
  <p>Add a caption text for each image slide with the w3-display-* classes (topleft, topmiddle, topright, bottomleft, bottommiddle, bottomright or middle).</p>
</div>

<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="img_snowtops.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    French Alps
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_lights.jpg" style="width:100%">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Northern Lights
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_mountains.jpg" style="width:100%">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Beautiful Mountains
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_forest.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
    The Rain Forest
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_mountains.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    Mountains!
  </div>
</div>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
