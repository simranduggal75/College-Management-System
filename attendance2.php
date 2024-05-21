<?php
  if(isset($_POST["btnsubmit"]))
  {
    include "db.php";
    
    $date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
                  
    $query = "select *from `studreg` ";
    $result = mysqli_query($conn,$query)or die("select error");
    while($rec = mysqli_fetch_array($result))
    {
      $mno = $rec["rno"];
      if(isset($_POST[$mno]))
      {
        $query1 = "INSERT INTO  `attandance`(`rno` ,  `date` ,  `attendance`) VALUES('$mno','$date','1')";
      }
      else
      {
        $query1 = "INSERT INTO  `attandance`(`rno` ,  `date` ,  `attendance`) VALUES('$mno','$date','0')";
      }
      mysqli_query($conn,$query1)or die("insert error".$mno);
      print "<script>";
      print "alert('Attendance Marked Successfully...');";
      print "self.location='attendance1.php';";
      print "</script>";
    }
    
    
      
    
  }
  else
  {
    header("Location:attendance1.php");
  }
?>

