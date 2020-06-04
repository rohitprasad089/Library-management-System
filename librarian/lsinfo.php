<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:../index.php');
}
include('lheader.php')
?><!--content-->
  <div class="container-fluid p-3">
  <center><h4 class="mt-3"><u>USER INFORMATION</u></h4></center>
<?php
    include_once('../connection.php');
    $res=mysqli_query($conn,"select * from userinfo");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-dark'>";
    echo"<tr>";
    echo"<th>";echo"firstname";echo"</th>";
    echo"<th>";echo"middlename";echo"</th>";
    echo"<th>";echo"lastname";echo"</th>";
    echo"<th>";echo"aadhar";echo"</th>";
    echo"<th>";echo"phone";echo"</th>";
    echo"<th>";echo"birth";echo"</th>";
    echo"<th>";echo"blood";echo"</th>";
    echo"<th>";echo"gender";echo"</th>";
    echo"<th>";echo"city";echo"</th>";
    echo"<th>";echo"email";echo"</th>";
    echo"<th>";echo"status";echo"</th>";
    echo"<th>";echo"approve";echo"</th>";
    echo"<th>";echo"not approve";echo"</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
    echo"<tr>";
    echo"<td>";echo $row["firstname"];echo"</td>";
    echo"<td>";echo $row["middlename"];echo"</td>";
    echo"<td>";echo $row["lastname"];echo"</td>";
    echo"<td>";echo $row["aadhar"];echo"</td>";
    echo"<td>";echo $row["phone"];echo"</td>";
    echo"<td>";echo $row["birth"];echo"</td>";
    echo"<td>";echo $row["blood"];echo"</td>";
    echo"<td>";echo $row["gender"];echo"</td>";
    echo"<td>";echo $row["city"];echo"</td>";
    echo"<td>";echo $row["email"];echo"</td>";
    echo"<td>";echo $row["status"];echo"</td>";
    echo"<td>";?> <a href="approve.php?id=<?php echo $row["id"]; ?> ">approve</a><?php echo"</td>";
    echo"<td>";?> <a href="notapprove.php?id=<?php echo $row["id"]; ?> ">not approve</a><?php echo"</td>";
    echo"</tr>";
    }
    echo"</table>";
    echo"</div>";
?>
</div>
<?php
include('../footer.php')
?>