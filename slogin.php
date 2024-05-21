<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);

$IDD = $_POST["IDD"];
$pass = $_POST["pass"];

$sql = "select * from studreg where IDD = '$IDD' && pass = '$pass'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1)
{
header('location:spanel.php');
}
else
{
header('location:slogin.php');
}
}
?>

<html>
<head>
<style>
@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body
{
margin:0;
padding:0;
font-family:sans-serif;
background:url(img/stbg.jpg) no-repeat;
background-size:cover;

}

.login-box
{
width:280px;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
color:white;
}

.login-box h1{
float:left;
font-size:40px;
border-bottom:6px solid #4caf50;
margin-bottom:50px;
padding:13px 0;
}

.textbox{
width:100%;
overflow:hidden;
font-size:20px;
padding:8px 0;
margin:8px 0;
border-bottom:1px solid #4caf50;
}

.textbox i
{
width:26px;
float:left;
text-align:center;
}

.textbox input{
border:none;
outline:none;
background:none;
color:white;
font-size:18px;
width:80px;
float:left;
margin:0 10px;
}

.btn
{
width:100%;
background:none;
border:2px solid #4caf50;
color:white;
padding:5px;
font-size:18px;
cursor:pointer;
margin:12px 0;
}

.alert {
  padding: 20px;
  background-color: green;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


</style>
</head>
<body>

<div class="login-box">

<h1>STUDENT LOGIN</h1>

<form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="POST">
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="USERID" name="IDD" value="">
</div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="password" name="pass" value="">
</div>

<input class="btn" type="submit" name="submit" value="LOGIN">

<input class="btn" type="button" name="" value="REGISTER" onclick="window.location.href='studreg.php';">

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>NOTE!</strong> If not registered kindly click register button before logging in.
</div>

</form>
</body>
</html>