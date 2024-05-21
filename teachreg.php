 <?php
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);

if(isset($_POST["submit"]))
{

 $filename=$_FILES["image"]["name"];
$fs = $_POST["fs"];
$ls = $_POST["ls"];
$eid = $_POST["eid"];
$cno = $_POST["cno"];
$dob = $_POST["dob"];
$gd = $_POST["gd"];
$state = $_POST["state"];
$city = $_POST["city"];
$qual = $_POST["qual"];
$expr = $_POST["expr"];
$address = $_POST["address"];
$ID = $_POST["ID"];
$pass = $_POST["pass"];
$confirmpass = $_POST["confirmpass"];


$query="INSERT INTO teachreg(fs, ls, eid, cno, dob, gd, state, city, qual, expr, address, IDD, pass, confirmpass, image)
VALUES('$fs','$ls','$eid','$cno','$dob','$gd','$state','$city','$qual','$expr',
        '$address','$ID','$pass','$confirmpass','$filename')";

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
<title>Teacher Registration</title>
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
<center><p class="round2">Teacher Registration</p><br><br>
<img src="img/reglogo.png" width="130" height="130">
<form action="" method="POST" enctype="multipart/form-data">


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
box-sizing: border-box;border: 2px solid ; border-radius: 4px;font-family:Cursive;font-style:bold;
font-size:16px;" required>
<option><---Select Gender---></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select><br><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">State
<input type="text" name="state" value="" placeholder="Enter State" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">City
<input type="text" name="city" value="" placeholder="Enter City" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Qualification
<input type="text" name="qual" value="" placeholder="Enter your Qualification" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">Experience
<input type="text" name="expr" value="" placeholder="Enter Your Experience" required><br><br></p>

<p style="font: italic small-caps bold 20px Georgia, serif;margin-left:40px">
Address
<input type="text" name="address" value="" placeholder="Enter Your Address" required><br><br></p>


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
<input type="button" value="Back" onclick="location.href='tlogin.php'">
</form>
</center>
</body>
</html>


