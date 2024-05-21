<?php
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);

if(isset($_POST["submit"]))
{

$rno = $_POST["rno"];
$snm = $_POST["snm"];
$sclass = $_POST["sclass"];
$sbj1 = $_POST["sbj1"];
$sbj2 = $_POST["sbj2"];
$sbj3 = $_POST["sbj3"];
$sbj4 = $_POST["sbj4"];
$sbj5 = $_POST["sbj5"];
$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];
$m4 = $_POST["m4"];
$m5 = $_POST["m5"];

$query="INSERT INTO marks(rno, snm, sclass, sbj1, sbj2, sbj3, sbj4, sbj5, m1, m2, m3, m4, m5)
VALUES('$rno','$snm','$sclass','$sbj1','$sbj2','$sbj3','$sbj4','$sbj5','$m1','$m2','$m3','$m4','$m5')";

if (mysqli_query($conn, $query))
{
 
                    
                        echo "<script>alert('Marks added successfully...');</script>";
                      }
                     else
                     {
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                     }
                

}
?>

<html>
<head>
<title>Add Marks</title>
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
margin-top:25px;
font-family:Cursive;
font-style:bold;
font-size:25px;
padding-left:70px;
margin-left:20px;
}

input[type=text] {
  width: 60%;
  padding: 8px 20px;
  margin: 3px 0;
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
border:2px solid black;;
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

input[type=reset]
{
background-color:#0000eb;
border:2px solid black;;
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
      </div><br><br>
<center><p class="round2">Add Marks </p><br>
<form action="#" method="POST">

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Roll No
<input type="text" name="rno" value="" placeholder="Enter Roll No"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Student Name
<input type="text" name="snm" value="" placeholder="Enter Student Name"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Student Class
<input type="text" name="sclass" value="" placeholder="Enter Student Class"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">Enter Subject 1
<input type="text" name="sbj1" value="" placeholder="Enter Subject 1"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">
 Enter Subject 2
<input type="text" name="sbj2" value="" placeholder="Enter Subject 2"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">Enter Subject 3
<input type="text" name="sbj3" value="" placeholder="Enter Subject 3"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">Enter Subject 4
<input type="text" name="sbj4" value="" placeholder="Enter Subject 4"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">Enter Subject 5
<input type="text" name="sbj5" value="" placeholder="Enter Subject 5"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Enter Marks for subject 1
<input type="text" name="m1" value="" placeholder="Enter Marks"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Enter Marks for subject 2
<input type="text" name="m2" value="" placeholder="Enter Marks"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Enter Marks for subject 3
<input type="text" name="m3" value="" placeholder="Enter Marks"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Enter Marks for subject 4
<input type="text" name="m4" value="" placeholder="Enter Marks"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Enter Marks for subject 5
<input type="text" name="m5" value="" placeholder="Enter Marks"><br><br></p>

<input type="submit" value="Submit" name="submit"> <input type="Reset" value="Reset">

</form></center>
</body>
</html>