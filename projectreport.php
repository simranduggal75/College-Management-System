<html>
<head>
<title>Project Report</title>
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
height: 130px;

margin-left:10px;
position: absolute;

}
nav
{
 width:100%;
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
width:200px;
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



</style>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
<div class="logo"><a href="#"><img src="img/logo.png"></a>
</div>
<nav>
<ul>
<li><a href="dashboard.php">Home</a></li>
<li><a href="course.php">Courses</a></li>
<li><a href="student.php">Students</a></li>
<li><a href="users.php">Users</a></li>
<li><a href="subject.php">Subjects</a></li>
<li><a href="teacher.php">Teachers</a></li>
<li><a href="projectreport.php">Project Report</a></li>
<li><a href="syllabus.php">Syllabus</a></li>
<li><a href="assignments.php">Assignments</a></li>
<li><a href="attendancereport.php">Attendance</a></li>
<li><a href="viewfeedback.php">Feedback</a></li>
<li><a href="marksheet.php">Marksheet</a></li>
</ul>
</nav>
<div class="right_area">
        <a href="index.php" class="logout_btn">Logout</a>
      </div><br>
<center><p class="round2">Project Report</p><br>
<center><table id="t01">
<tr>
<th>Roll No</th>
<th>Name</th>
<th>Project Title</th>
<th>Course</th>
<th>Year</th>
<th>Subject</th>
<th>Operation</th>
</tr>

<?php
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);
$query = "select * from project";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
  while($result=mysqli_fetch_assoc($data))
 {
   echo "
<tr>
<td><b>".$result['rno']."</b></td>
<td><b>".$result['nm']."</b></td>
<td><b>".$result['pt']."</b></td>
<td><b>".$result['csr']."</b></td>
<td><b>".$result['yrr']."</b></td>
<td><b>".$result['sbj']."</b></td>
<td> 
<a href ='download.php?id=$result[id]'>Download</a></td>
</tr>
 ";
  }
} 
  else
  {  
    echo "No Record Found";
    
  }
  ?>
</form></center>
</body>
</table>
</html>