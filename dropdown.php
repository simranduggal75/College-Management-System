<?php
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);

if(isset($_POST["submit"]))
{

 $csr = $_POST["csr"];
$yrr = $_POST["yrr"];
$sbj = $_POST["sbj"];

$query="INSERT INTO dropdown(csr,yrr,sbj)
VALUES('$csr','$yrr','$sbj')";

if (mysqli_query($conn, $query))
{
 
 echo "<script>alert('Record added successfully...');</script>";
 ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project2/dropdown.php">
<?php
}
else
 {
   echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
                

}
?>



<html>
<head>
<title>dropdown</title>
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
	<form action="#" method="POST">
<center><p class="round2">Upload Syllabus</p><br><br>
<img src="img/reglogo.png" width="130" height="130">
<form action="#" method="POST">



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

<input type="submit" value="Submit" name="submit"> <input type="Reset" value="Reset">
<input type="button" value="Back" onclick="location.href='syllabus.php'">
</form>
</center>
</body>
</html>