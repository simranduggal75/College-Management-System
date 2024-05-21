<html>
<head>
<title>Add Attendance</title>
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
margin-top:25px;
font-family:Cursive;
font-style:bold;
font-size:25px;
padding-left:70px;
margin-left:20px;
}

input[type=text] {
  width: 60%;
  padding: 8px 20px;
  margin: 3px 0;
  box-sizing: border-box;
  border: 2px solid ;
  border-radius: 4px;
font-family:Cursive;
font-style:bold;
font-size:16px;
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
input[type=submit]
{
background-color:#5f9ea0;
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
<body style="background-color:lightcyan">

  <form action="attendance2.php" method="post">
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
      </div><br><br>
<center><p class="round2">Add Attendance</p><br>

<script type="text/javascript">
  function getatt(value)
  {
    if(value == true)
    {
      document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
      document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
    }
    else
    {
      document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
      document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
    }
  }
</script>


<table width="800" border="1" align="center" bgcolor="#DAF7A6">
      <tr>
        <td>
      
        <table width="180px" align="left" style="">
              <tr>
                  <td> Select date : <br />
                   <?php 
                $dt = getdate();
              $day = $dt["mday"];
              $month = date("m");
              $year = $dt["year"];
              
              echo "<select name='cdate'>";
              for($a=1;$a<=31;$a++)
              {
                if($day == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select><select name='cmonth'>";
              for($a=1;$a<=12;$a++)
              {
                if($month == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select><select name='cyear'>";
              for($a=2010;$a<=$year;$a++)
              {
                if($year == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select>";
            ?>                    
                    </td>
                </tr>
             </table> 
        
          <table width="400" border="2" align="left" bordercolor="" bgcolor="lightcyan" style="margin-left:20px;"> <center>
          
            <tr bgcolor="#5f9ea0" >
              <td width="114"><b><span class="style7">Roll No</span></b></td>
              <td width="152"><b><span class="style7">Name</span></b></td>
              <td width="110"><b><span class="style7">Attend</span></b></td>
            </tr>
            <?php
        include "db.php";
        extract($_POST);
        $query = "select *from `studreg` order by `rno`";
        $s = 0;
        $result = mysqli_query($conn,$query)or die("select error");
        while($rec = mysqli_fetch_array($result))
        {
          $s = $s + 1;
          echo ' <tr>
                <td width="114"><b>'.$rec["rno"].'</b></td>
                <td width="152"><b>'.$rec["fs"].' </b></td>
                <td width="110"><input type=checkbox name='.$rec["rno"].' onclick="getatt(this.checked);"/></td>
              </tr>';
        }
      ?>      
            <tr>
              <td colspan="3"><div align="center">
                <input type="submit" value="Get Attendance" name="btnsubmit"/>
                &nbsp;&nbsp;</div></td>
            </tr>
          </table>
         
         
          
         </td>
      </tr>
    </table>





</form>
</body>
</html>
