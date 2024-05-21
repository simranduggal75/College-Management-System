<?php
$conn=mysqli_connect("localhost","root","","college");


error_reporting(0);


$tid = $_GET['tid'];

$query = "DELETE FROM teachreg WHERE tid='$tid'";

$data = mysqli_query($conn,$query);

if($data)
{
  echo "<script>alert('Record Deleted..')</script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project2/teacher.php">
<?php
}
else
{
echo "Failed to Delete Record!!"; 
}
?>