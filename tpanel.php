<html>
<head>
<title>Teacher Dashboard</title>
<style>
body
{
margin: 0;
padding:0;
background:#fffafa;
}
.logo img
{
width: 130px;
height: 120px;

margin-left:10px;
position: absolute;

}
nav
{
 width:100%;
 height:15%;
background:#0047ab;
overflow:auto;
margin-top:15px;
}
ul
{
padding:0;
margin:0 0 0 150px;
list-style: none;
}
li
{
float: left;
}
nav a
{
width:180px;
display:block;
padding: 20px 15px;
text-decoration:none;
font-family:Arial;
color:#fff;
text-align:center;
}
nav a:hover
{
background: #ffc40c;
transition:0.5s;
text-transform:uppercase;
transition-property: background;
}

.logout_btn{
  padding: 6px;
  background:  #800000;
  text-decoration: none;
  float: right;
  margin-top: 10px;
  margin-bottom:6px;
  margin-right: 15px;
  border-radius: 2px;
  font-size: 20px;
  font-weight: 600;
  color: white;
  width:8%;
text-align:center;
  transition: 0.5s;
  transition-property: background;
}

.logout_btn:hover{
  background: #000080;
}


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}



.newspaper {
  column-count: 3;
  column-gap: 40px;
  background-color:none;
}

* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  height: 60%;
  padding: 40px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 5px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body style="background-color:yellow;">
<div class="logo"><a href="#"><img src="img/logo.png"></a>
</div>
<nav>
<ul>
<li><a href="tpanel.php">Home</a></li>
<li><a href="marks.php">Add Marks</a></li>
<li><a href="attendance1.php">Add Attendance</a></li>
<li><a href="feedback1.php">Feedback</a></li>
<li><a href="projectreport1.php">View Project Report</a></li>
<li><a href="registrationdetails.php">Registration Details</a></li>
<li><a href="upsyllabus.php">Upload Syllabus</a></li>
<li><a href="assignments1.php">View Assignments</a></li>
</ul>
</nav>
<div class="right_area">
        <a href="index.php" class="logout_btn">Logout</a>
      </div><br>
<div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/clg1.jpg" style="width:100%" height="50%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/clg2.jpg" style="width:100%" height="50%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/clg3.jpg" style="width:100%" height="50%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br><br>
<div class="newspaper">
Loyola College, Chennai is a private Catholic higher education institution run by the Chennai Province of the Society of Jesus in Chennai, Tamil Nadu, India. It was founded in 1925 by the French Jesuit priest, Rev Fr Francis Bertram, SJ along with other European Jesuits. It is an autonomous Jesuit college affiliated with the University of Madras. Loyola commerce association celebrated its 75th year in 2019.
</div>
<br><br>

<img src="img/l1.png" style="width:250px">
<img src="img/l2.png"style="width:250px">
<img src="img/l3.png"style="width:250px;height:170px">
<img src="img/l4.png"style="width:240px">

<marquee width="100%" direction="down" height="100px" >
<h2>Motto Luceat Lux Vestra (Latin)<br><br>
Motto in English  Let your Light Shine<br><br>
Type  Private Autonomous Roman Catholic Non-profit Coeducational Higher education institution<br><br>
Established 1925; 96 years ago<br><br>
Founder Rev Fr Francis Bertram, SJ<br><br>
Religious affiliation Jesuit (Roman Catholic)<br><br>
Academic affiliations University of Madras<br><br>
Chairman  Rev. Fr. Jebamalai Irudayaraja, S.J.<br><br>
Rector  Rev.Fr.Francis P.Xavier, SJ<br><br>
Principal Rev. Fr. A. Thomas, SJ<br><br>

Location  Sterling Road, Nungambakkam, Chennai, Tamil Nadu, India.</h2>
</marquee><br><br>




<div class="row">
  <div class="column" style="background-color:blue;">
    <h2>"Teachers"</h2>
    <p>48</p>
 <h3>"Adminsitrative staff"</h3>
<p>55</p>

 </div>
  <div class="column" style="background-color:blue;">
    <h2>"Recruiters"</h2>
    <p>42</p>
<h3>"UG courses"</h3>
<p>5</p>
  </div>



  <div class="column" style="background-color:blue;">
    <h2>"Students"</h2>
    <p>888</p>
<h3>"PG courses"</h3>
<p>3</p>
  </div>
</div>

<h2>OUR TOP 10 RECRUITERS</h2>
<marquee scrollamount="50">
<img src="img/r1.png">
<img src="img/r2.png">
<img src="img/r3.png">
<img src="img/r4.png">
<img src="img/r5.png">
<img src="img/r6.png">
<img src="img/r7.png">
<img src="img/r8.png">
<img src="img/r9.png">
<img src="img/r10.png">
</marquee><br><br><br>

<h2>CONTACT<br></h2>
Loyola College, PB 3301,<br>
Sterling Road,<br>
Nungambakkam,<br>
Chennai - 600 034.<br>
Tel: +91 - 44 - 28178200<br>
Fax: +91 - 44 - 28175566<br>
helpdesk@loyolacollege.edu<br>
</body>
</html>