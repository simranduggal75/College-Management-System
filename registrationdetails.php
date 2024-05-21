<html>
<head>
<title>RegistrationDetails</title>
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

table,th,td
{
border: 2px solid black;
border-collapse:collapse;
font-family:Georgia;
font-style:bold;
font-size:16px;
}
th,td
{
padding:15px;
text-align:left;
}
#t01 th
{
background-color:#42f572;
color: black;
}
td a
{
 padding: 5px;
  background: #42f572;
  text-decoration: none;
  border: 3px solid black;
  float: right;
  margin-top: 11px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: black;
}

input[type=text] {
  width: 45%;
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
<center><p class="round2">View Registration Details</p><br>

  <form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="fs" class="btn" placeholder="Enter Your First Name"><br><br>
<input type="submit" name="search" class="btn" value="Search By Name"><br><br>
</form>

<table id="t01">
<tr>
<th>Image</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email Id</th>
<th>Date Of Birth</th>
<th>Gender</th>
<th>State</th>
<th>City</th>
<th>Qualification</th>
<th>Experience</th>
</tr>
</center>
<br>
<?php
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);
if(isset($_POST['search']))
{
$fs=$_POST['fs'];
$query="SELECT * FROM teachreg where fs='$fs'";
$query_run=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($query_run))

{
?>
<tr>
<td><img src="<?php echo $row['image'];?>" width="145"></td>
<td><b><?php echo $row['fs']?></b></td>
<td><b><?php echo $row['ls']?></b></td>
<td><b><?php echo $row['eid']?></b></td>
<td><b><?php echo $row['dob']?></b></td>
<td><b><?php echo $row['gd']?></b></td>
<td><b><?php echo $row['state']?></b></td>
<td><b><?php echo $row['city']?></b></td>
<td><b><?php echo $row['qual']?></b></td>
<td><b><?php echo $row['expr']?></b></td>
</tr>
<?php
}
}
?>

</table>
</body>
</html>

