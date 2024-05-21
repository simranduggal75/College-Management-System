<?php
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);
error_reporting(0);

if(isset($_POST['submit']))
{

$rno = $_POST["rno"];
$nm = $_POST["nm"];
$at = $_POST["at"];
$csr = $_POST["csr"];
$yrr = $_POST["yrr"];
$sbj = $_POST["sbj"];

 $filename = $_FILES['myfile']['name'];

  $destination = 'uploads/' . $filename;

  $extension = pathinfo($filename,PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];

if(move_uploaded_file($file,$destination))
   {
    
    $query = "INSERT INTO assignment(rno,nm,at,csr,yrr,sbj,myfile)
    VALUES('$rno','$nm','$at','$csr','$yrr','$sbj','$filename')";

    if (mysqli_query($conn, $query))
{
 
 echo "<script>alert('Assignment added successfully...');</script>";
 ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project2/addassign.php">
<?php
}
else
 {
   echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
   }
}
?>


<html>
<head>
<title>Upload Assignment</title>
<style>
body
{
margin: 0;
padding:0;

}
.logo img
{
width: 130px;
height: 100px;

margin-left:10px;
position: absolute;

}
nav
{
 width:100%;
 height:12%;
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
padding: 18px 5px;
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

input[type=file] {
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
<form action="" method="POST" enctype="multipart/form-data">
<div class="logo"><a href="#"><img src="img/logo.png"></a>
</div>
<nav>
<ul>
<li><a href="spanel.php">Home</a></li>
<li><a href="registrationdetails1.php">Registration Details</a></li>
<li><a href="addassign.php">Upload Assignments</a></li>
<li><a href="subproj.php">Upload Project</a></li>
<li><a href="viewsyllabus.php">View Syllabus</a></li>
<li><a href="marksheet1.php">View Marksheet</a></li>
<li><a href="feedback.php">Feedback</a></li>
</ul>
</nav>
<div class="right_area">
        <a href="index.php" class="logout_btn">Logout</a>
      </div><br>
<center><p class="round2">Upload Assignment</p><br>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Roll No
<input type="text" name="rno" value="" placeholder="Enter Roll No"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px"> Name
<input type="text" name="nm" value="" placeholder="Enter Name"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Assignment Title
<input type="text" name="at" value="" placeholder="Enter Assignment Title"><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">
  Select Course 
  <?php
  $conn=mysqli_connect("localhost","root","","college");
error_reporting(0);
  // $query=mysql_query("select * from course");
  // $rowcount=mysql_num_rows($query);
$x = mysqli_query($conn, "SELECT * FROM course");
?>

<select name="csr" style="width: 60%;padding: 8px 20px;margin: 8px 0;
box-sizing: border-box;border: 2px solid ; border-radius: 4px;font-family:Cursive;font-style:bold;
font-size:16px;">
<option><---Select Course---></option>
<?php 
  while($pr = mysqli_fetch_array($x))
  {
    ?>
    <option value="<?php echo $pr['cnm'];?>"><?php echo $pr['cnm'];?></option>
    <?php
  }
?>
</select><br><br></p>


<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">Select Year 
<select name="yrr" id="yrr"  style="width: 60%;padding: 8px 20px;margin: 8px 0;
box-sizing: border-box;border: 2px solid ; border-radius: 4px;font-family:Cursive;font-style:bold;
font-size:16px;">
<option><---Select Year---></option>
<option value="Year1">year1</option>
<option value="Year2">Year2</option>
<option value="Year3">Year3</option>
<option value="Year4">Year4</option>
<option value="Year5">Year5</option>
</select><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">Select Subject
<?php
  $conn=mysqli_connect("localhost","root","","college");
error_reporting(0);
  // $query=mysql_query("select * from course");
  // $rowcount=mysql_num_rows($query);
$x = mysqli_query($conn, "SELECT * FROM subject");
?>

<select name="sbj" style="width: 60%;padding: 8px 20px;margin: 8px 0;
box-sizing: border-box;border: 2px solid ; border-radius: 4px;font-family:Cursive;font-style:bold;
font-size:16px;">
<option><---Select subject---></option>
<?php 
  while($pr = mysqli_fetch_array($x))
  {
    ?>
    <option value="<?php echo $pr['snm'];?>"><?php echo $pr['snm'];?></option>
    <?php
  }
?>
</select><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Upload File
<input type="file" name="myfile" id="myfile" required><br><br></p>


<input type="submit" value="submit" name="submit"> <input type="Reset" value="Reset">
</form>
</center>
</body>
</html>