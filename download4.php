<html>
<head>
<title>Download4</title>
<style>

a
{
 padding: 10px;
 background-color:#ff1493; 
  text-decoration: none;
  border: 3px solid black;
  margin: 4px 2px;
  margin-top: 80px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: black;
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
<body style="background-color:#5f9ea0;">
    <form action="#">
<?php 

include 'db.php';

$id = $_GET['id']; // Get id from url bar

if (!$id) {
    header("Location: assignments1.php");
}

?>


                <?php 
                    
                $sql = "SELECT * FROM assignment WHERE id='$id'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    if ($row = mysqli_fetch_assoc($result)) {
                ?><br><br><center>
                <a href="uploads/<?php echo $row['myfile']; ?>" download="<?php echo $row['myfile']; ?>" class="download_link"><?php echo $row['myfile']; ?></a>
                <?php
                    }
                }
        
                ?>
                <br><br><br><br>
    <input type="button" value="Back" onclick="location.href='assignments1.php'">
            </body>
            </html>