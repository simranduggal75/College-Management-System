<?php
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);

if(isset($_POST["submit"]))
{

$nmm=$_POST["nmm"];
$srolee=$_POST["srolee"];
$feedbackk=$_POST["feedbackk"];

$query="INSERT INTO feedback(nmm,srolee,feedbackk)
VALUES('$nmm','$srolee','$feedbackk')";

if (mysqli_query($conn, $query))
{
 
echo "<script>alert('Thank you for your Feedback.!!');</script>";
}
else
 {
 echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
                

}
?>
<html>
<head>
<title>TeacherFeedback</title>
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
width:150px;
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

p.round2 {
  border: 2px solid black;
  border-radius: 8px;
 background-color:#ff1493;
width: 650px;
height:50px;
margin-top:40px;
font-family:Cursive;
font-style:bold;
font-size:25px;
}

input[type=text] {
  width: 60%;
  padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid ;
  border-radius: 4px;
font-family:Cursive;
font-style:bold;
font-size:16px;
}
textarea {
  width: 50%;
  height:30%;
  padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid ;
  border-radius: 4px;
font-family:Cursive;
font-style:bold;
font-size:16px;
}

input[type=submit]
{
background-color:#0000eb;
border:2px solid black;
color:white;
 padding: 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 18px;
margin: 4px 2px;
cursor: pointer;
border-radius: 12px;
font-family:Cursive;
font-style:bold;
font-size:20px;
}


</style>
</head>
<body style="background-color:lightcyan">
   <form action="#" method="POST">
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
<center><p class="round2">Teacher Feedback</p><br>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Enter your Full Name
<input type="text" name="nmm" value="" placeholder="Enter Your Full Name" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">Select Role 
<select name="srolee" id="srolee"  style="width: 60%;padding: 8px 20px;margin: 8px 0;
box-sizing: border-box;border: 2px solid ; border-radius: 4px;font-family:Cursive;font-style:bold;
font-size:16px;">
<option><---Select Role---></option>
<option value="Teacher">Teacher</option>
</select><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">
  <label>Enter Your Feedback</label>
<textarea name="feedbackk" placeholder="Enter Your Feedback" required > </textarea><br><br></p>
<input type= "submit" value="submit" name="submit"> 
</center>
</form>
</body>
</html>
