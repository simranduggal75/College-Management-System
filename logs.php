<html>
<head>
<style>

.button
{
display:inline-block;
padding:15px 25px;
font-size:24px;
cursor:pointer;
text-align:center;
text-decoration:none;
outline:none;
color:#fff;
background-color:#4CAF50;
border:none;
border-radius:15px;
box-shadow:0 9px #999;
}

.button:hover{
background-color:#3e8e41
}

.button:active{
background-color:#3e8e41;
box-shadow:0 5px #666;
transform:translateY(4px);
}



</style>
</head>
<body background="img/bg.jpg">
<center><img src="img/logo.png" width="15%"></center><br><br><br>

<center><button class="button" onclick="window.location.href='alogin.php';" >ADMIN LOGIN</button></center><br><br>
<center><button class="button" onclick="window.location.href='tlogin.php';" >TEACHER LOGIN</button></center><br><br>

<center><button class="button" onclick="window.location.href='slogin.php';">STUDENT LOGIN</button></center><br><br><br>


</body>
</html>