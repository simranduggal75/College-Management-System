<?php
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);

if(isset($_POST["submit"]))
{

 $filename=$_FILES["image"]["name"];
 $rno = $_POST["rno"];
$fs = $_POST["fs"];
$ls = $_POST["ls"];
$eid = $_POST["eid"];
$cno = $_POST["cno"];
$dob = $_POST["dob"];
$gd = $_POST["gd"];
$state = $_POST["state"];
$city = $_POST["city"];
$address = $_POST["address"];
$fnmm = $_POST["fnmm"];
$Mnmm = $_POST["Mnmm"];
$focc = $_POST["focc"];
$Mocc = $_POST["Mocc"];
$csr = $_POST["csr"];
$yrr= $_POST["yrr"];
$ID = $_POST["ID"];
$pass = $_POST["pass"];
$confirmpass = $_POST["confirmpass"];


$query="INSERT INTO studreg(rno, fs, ls, eid, cno, dob, gd, state, city, address, fnmm, Mnmm, focc, Mocc, csr, yrr, IDD, pass, confirmpass, image)
VALUES('$rno','$fs','$ls','$eid','$cno','$dob','$gd','$state','$city','$address','$fnmm','$Mnmm','$focc', '$Mocc','$csr','$yrr','$ID','$pass','$confirmpass','$filename')";

if (mysqli_query($conn, $query))
{
 move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
                    
                        echo "<script>alert('Record added successfully...');</script>";
                      }
                     else
                     {
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                     }
                

}
?>

<html>
<head>
<title>Student Registration</title>
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
<center><p class="round2">Student Registration</p><br><br>
<img src="img/reglogo.png" width="130" height="130">
<form action="" method="POST" enctype="multipart/form-data">

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Roll No
<input type="text" name="rno" value="" placeholder="Enter Roll No" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">First Name
<input type="text" name="fs" value="" placeholder="Enter First Name" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Last Name
<input type="text" name="ls" value="" placeholder="Enter Last Name" required><br><br></p>


<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Email ID
<input type="text" name="eid" value="" placeholder="Enter Email ID" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:35px">Enter Contact Number
<input type="text" name="cno" value="" placeholder="Enter Contact number" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Date Of Birth
<input type="date" name="dob" value="" placeholder="Enter Date Of Birth" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:38px">Gender
<select name="gd" id="gd" style="width: 60%;padding: 8px 20px;margin: 8px 0;
box-sizing: border-box;border: 2px solid ; border-radius: 4px;font-family:Cursive;font-style:bold;font-size:16px;" required>
<option><---Select Gender---></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select><br><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">State
<input type="text" name="state" value="" placeholder="Enter State" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">City
<input type="text" name="city" value="" placeholder="Enter City" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">
Address
<input type="text" name="address" value="" placeholder="Enter Your Address" required><br><br></p>


<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Father's Name
<input type="text" name="fnmm" value="" placeholder="Enter Father's Name" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Mother's Name
<input type="text" name="Mnmm" value="" placeholder="Enter Mother's Name" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Father's Occupation
<input type="text" name="focc" value="" placeholder="Enter Father's Occupation" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Mother's Occupation
<input type="text" name="Mocc" value="" placeholder="Enter Mother's Occupation" required><br><br></p>


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

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Create ID
<input type="text" id="ID" name="ID" value="" placeholder="Enter Id" required><br>
    (ID will be same as your Email Id)<br>
    <br></p>
<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Create Password
<input type="password" id="pass" name="pass" value="" placeholder="Create Password" required><br><br></p>
    
<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px"> Confirm password
<input type="password" id="confirmpass" name="confirmpass" value="" placeholder="Confirm Password" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Upload Photo
<input type="file" name="image" id="image" required><br><br></p>


<input type="submit" value="submit" name="submit"> <input type="Reset" value="Reset">
<input type="button" value="Back" onclick="location.href='slogin.php'">
</form>
</center>
</body>
</html>