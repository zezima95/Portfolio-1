<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<script type = "text/javascript" src="js/animate.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>
body, html {
    height: 100%;
    font-family: "Adobe Fan Heiti Std B", sans-serif;
}
.animatedbg{
  margin: 0;
  width: 100%;
  height: 100%;
  padding: 0;
  position: relative;
  background: url(images/stripe8.png);
  background-position: 0 0;
  background-repeat: repeat-y;
  background-size: auto;
  animation: animate 15s linear infinite;

}
@keyframes animate{
  from{
    background-position: 0 0;

  }
  to{

    background-position: 0 100%;

  }
}

.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url();
    min-height: 5%;
}
.menu {
    display: none;
}
.backgroundclr
{
    background-color: rgba(244, 194, 66,0.8);
}

.navbar {
    overflow: hidden;
    background-color: rgba(0,0,0,0.8);
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

#leftbox{
  float: left;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid blue;
  border-radius: 0px 0px 0px 0px;
  padding: 3px; 
  font-family: "Times New Roman", Times, serif;
}
.rightbox{
  float: right;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid transparent;
  border-radius: 0px 0px 0px 0px;
  padding: 3px;
}
.emptybox{
  float: left;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid transparent;
  border-radius: 0px 0px 0px 0px;
  padding: 20px;
}
.emptybox1{
  float: left;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid transparent;
  border-radius: 0px 0px 0px 0px;
  padding: 20px;
}
.emptybox2{
  float: left;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid transparent;
  border-radius: 0px 0px 0px 0px;
  padding: 20px;
}
#leftbox1{
  float: left;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid red;
  border-radius: 0px 0px 0px 0px;
  padding: 3px;
  font-family: "Times New Roman", Times, serif;
}
.rightbox1{
  float: right;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid transparent;
  border-radius: 0px 0px 0px 0px;
  padding: 3px;
}

#leftbox2{
  float: left; 
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid green;
  border-radius: 0px 0px 0px 0px;
  padding: 3px;
  font-family: "Times New Roman", Times, serif;
}

.rightbox2{
  float: right;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid transparent;
  border-radius: 0px 0px 0px 0px;
  padding: 3px;
}
#leftbox3{
  float: left;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid black;
  border-radius: 0px 0px 0px 0px;
  padding: 3px; 
  font-family: "Times New Roman", Times, serif;
}
.rightbox3{
  float: right;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid transparent;
  border-radius: 0px 0px 0px 0px;
  padding: 3px;
}
#leftbox4{
  float: left;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid white;
  border-radius: 0px 0px 0px 0px;
  padding: 3px; 
  font-family: "Times New Roman", Times, serif;
}
.rightbox4{
  float: right;
  margin: 25px auto 0px;
  width: 7%;
  border: 2px solid transparent;
  border-radius: 0px 0px 0px 0px;
  padding: 3px;
}

</style>
<body>

<!-- NAVBAR PALING ATAS -->
<div class="navbar">
  <a href="home.php">Home</a>


  </div> <!-- End of dropdown for Learning Content-->
      <a href="upload.html">Upload</a>
      <a href="download">Downloads</a>
      <div style="float: right;">
      <a href="home.php?logout='1'" style="color: white;">Logout <?php echo ucfirst($_SESSION['user']['username']); ?></a>
    </div> 
</div>
<!--END OF NAVBAR PALING ATAS-->
<!-- Links (sit on top) -->
<!-- <div class="backgroundclr" style="background-color: rgba(244,194,66,0.5)">
 <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">WHERE</a>
    </div>
  </div>
</div> -->
<!-- Add a background color and large text to the whole page -->
<div class="w3-container w3-yellow" >
  <div class="backgroundclr">
</div>

<!-- animated transparent background -->
<div class="animatedbg">
  <div class="w3-container" style="max-width: 80%"> 
  </div> <!-- end of div for class="w3-container" style="max-width: 80%" -->


<!-- Header with image -->
<div class="w3-content" style="max-width: 55%"><h5 class="w3-center w3-padding-32"><span class="w3-tag w3-wide">      DIALOG 1</span></h5>
</div>


<div class="w3-container" id="about">

      <div class="w3-content" style="max-width:90%">
        <h5 class="w3-center w3-padding"><span class="w3-tag w3-wide">KOPIINTUTUNAN OM BOROS PANABI 
            (INTRODUCTION AND GREETINGS)</span> </h5>
        <h6 class="w3-left w3-padding w3-wide w3-large">
        <p class="w3-center"> <img src="images/dialog5.png"> 
        </p>
        <p>Jack: Hi, I’m Jack. What’s your name?</p>
        <a> Jude: Greetings. My name is Jude. Where are you from?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
       <!-- First dialog end-->
     </div> <!-- end of div class="w3-content" style="max-width:90%"-->


          <div class="w3-content" style="max-width:90%"> 
        <h6 class="w3-left w3-padding w3-wide w3-large">
        <p class="w3-center"> <img src="images/dialog6.png"> 
        </p>
        <p>Jack: I am from Johor. Where are you from?</p>
        <a> Jude: I am from Beaufort, Sabah. Whereabout in Johor is your place?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
        <!--Second Dialog End-->
        </div> <!-- end of div for class="w3-content" style="max-width:90%" -->

          <div class="w3-content" style="max-width:90%"> 
        <h6 class="w3-left w3-padding w3-wide w3-large">
        <p class="w3-center"> <img src="images/dialog7.png"> 
        </p>
        <p>Jack: At Johor Baharu. Where do you live here?</p>
        <a> Jude: In Taman Kingfisher. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
        <!--Third Dialog End-->
        </div> <!-- end of div for class="w3-content" style="max-width:90%" -->
        

        <div class="w3-content" style="max-width:90%"> 
        <h6 class="w3-left w3-padding w3-wide w3-large">
        <p class="w3-center"> <img src="images/dialog88.png"> 
        </p>
        <p>Jack: I also live in Taman Kingfisher.</p>
        <a> Jude: I see. How old are you, Jack?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
        <!--Forth Dialog End-->
        </div> <!-- end of div for class="w3-content" style="max-width:90%" -->
        
        <div class="w3-content" style="max-width:90%"> 
        <h6 class="w3-left w3-padding w3-wide w3-large">
        <p class="w3-center"> <img src="images/dialog99.png"> 
        </p>
        <p>Jack: Twenty years old&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <a> </h6>
        <!--Fifth Dialog End-->
        </div> <!-- end of div for class="w3-content" style="max-width:90%" -->
          


</div><!-- end of div for class="w3-container" id="about"-->
<!-- Drag and Drop/Paling bawah -->
<div> 
  <div class="w3-content" style="max-width: 85%"><h5 class="w3-center w3-padding-32"><span class="w3-tag w3-wide">WARANA (COLOUR)</span></h5>

    <div id="leftbox" style="width: 100px padding-left: 130px; padding-top:3px; padding-bottom: 3px; padding-right:102px;">Blue</div>
    <div class="rightbox4" style="width: 100px; padding-right: 102px;"><img id="colorpic4" src="images/color/whitee.png"></div> <!-- WHITE BOX --> <!--rightbox4 -->

    <div id="leftbox1" style="width: 100px padding-left: 3px; padding-top:3px; padding-bottom: 3px; padding-right:102px ;">Red</div>
    <div class="rightbox3" style="width: 100px; padding-right: 102px;"><img id="colorpic3" src="images/color/Blaack.png"></div> <!-- BLACK BOX --><!--rightbox3 -->
    
    <div id="leftbox2" style="width: 100px padding-left: 3px; padding-top:3px; padding-bottom: 3px; padding-right:102px;">Green</div>
    <div class="rightbox2" style="width: 100px; padding-right: 102px;"><img id="colorpic2" src="images/color/Greeen.png"></div> <!-- GREEN --><!--rightbox2 -->

    <div id="leftbox3" style="width: 100px padding-left: 3px; padding-top:3px; padding-bottom: 3px; padding-right:102px;">Black</div>
    <div class="rightbox1" style="width: 100px; padding-right: 102px;"><img id="colorpic1" src="images/color/Reed.png"></div> <!-- RED --><!--rightbox1 -->

    <div id="leftbox4" style="width: 100px padding-left: 3px; padding-top:3px; padding-bottom: 3px; padding-right:102px;">White</div>
    <div class="rightbox" style="width: 100px; padding-right: 102px;"><img id="tcolorpic" src="images/color/Bluee.png"></div> <!-- BLUE --><!--rightbox -->
      
  </div>
</div>



<!-- End page content -->



<!-- Footer -->
<footer class="w3-center w3-padding-64 w3-large" style="width: ">
  

</footer>
</div> <!-- div for animatedbg-->
</div> <!-- end of backgroundclr-->
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
