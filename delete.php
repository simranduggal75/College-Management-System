<?php
$conn=mysqli_connect("localhost","root","","college");


error_reporting(0);


$rno = $_GET['rno'];

$query = "DELETE FROM studreg WHERE rno='$rno'";

$data = mysqli_query($conn,$query);

if($data)
{
  echo "<script>alert('Record Deleted..')</script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project2/student.php">
<?php
}
else
{
echo "Failed to Delete Record!!"; 
}
?>