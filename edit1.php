<?php
$conn=mysqli_connect("localhost","root","","college");

error_reporting(0);
$tid = $_GET['tid'];
$fs = $_GET['fs'];
$ls = $_GET['ls'];
$cno = $_GET['cno'];
$gd = $_GET['gd'];
$qual = $_GET['qual'];
$expr = $_GET['expr'];
?>
<html>
<head>
<title>Teacher Registration Edit</title>
<style>
p.round2 {
border: 2px solid black;
border-radius: 8px;
background-color:#ffc40c ;
width: 90%;
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

input[type=date] {
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


input[type=password] {
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
background-color:#ffc40c;
border:2px solid black;
color:black;
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
background-color:#ffc40c;
border:2px solid black;
color:black;
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

input[type=button]
{
background-color:#ffc40c;
border:2px solid black;
color:black;
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
<body style="background-color:#088f8f;">
<center><p class="round2">Teacher Registration Edit</p><br><br>
<img src="img/reglogo.png" width="130" height="130">
<form action="#" enctype="multipart/form-data" method="GET">

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Teacher Id
<input type="text" name="tid" value="<?php echo "$tid" ?>" required readonly><br><br></p>


<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">First Name
<input type="text" name="fs" value="<?php echo "$fs" ?>" placeholder="Enter First Name" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Last Name
<input type="text" name="ls" value="<?php echo "$ls" ?>" placeholder="Enter Last Name" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Contact Number
<input type="text" name="cno" value="<?php echo "$cno" ?>" placeholder="Enter Contact number" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Gender
<input type="text" name="gd" value="<?php echo "$gd" ?>" placeholder="Enter Gender" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Qualification
<input type="text" name="qual" value="<?php echo "$qual" ?>" placeholder="Enter Qualification" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Experience<input type="text" name="expr" value="<?php echo "$expr" ?>"
placeholder="Enter your Experience" required><br><br></p>


<input type="submit" value="Update Details" name="submit"> 
<input type="Reset" value="Reset">
<input type="button" value="Back" onclick="location.href='teacher.php'">


<?php
$conn=mysqli_connect("localhost","root","","college");


error_reporting(0);

if($_GET['submit'])
{
$tid = $_GET['tid'];
$fs = $_GET['fs'];
$ls = $_GET['ls'];
$cno = $_GET['cno'];
$gd = $_GET['gd'];
$qual = $_GET['qual'];
$expr = $_GET['expr'];

$query = "UPDATE teachreg SET fs='$fs',ls='$ls',cno='$cno',gd='$gd',qual='$qual',expr='$expr'
WHERE tid='$tid'";

$data = mysqli_query($conn,$query);

if($data)
{
  echo "<script>alert('Record Updated..')</script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project2/teacher.php">
<?php
}
else
{
echo "Failed to Update Record!!"; 
}
}
?>
</form>
</center>
</body>
</html>