<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$conn=mysqli_connect("localhost","root","","college");

echo mysqli_error($conn);

$aname = $_POST["aname"];
$password = $_POST["password"];

$sql = "select * from admin where aname = '$aname' && password = '$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1)
{
header('location:dashboard.php');
}
else
{
header('location:alogin.php');
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
background:url(img/stbg.jpg);
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


</style>
</head>
<body>

<div class="login-box">

<h1>ADMIN LOGIN</h1>

<form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="POST">
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="USERID" name="aname" value="">
</div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="password" name="password" value="">
</div><br><br>


<input class="btn" type="submit" name="submit" value="LOGIN">
</form>
</body>
</html>