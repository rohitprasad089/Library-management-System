<?php
session_start();
include('header.php')
?>
<div class="container-fluid">
<div class="row m-5">
<div class="col-7 mx-4">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" alt="..." height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100" alt="..."height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="..." height="500">
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" class="d-block w-100" alt="..." height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--login form-->

<div class="card col-4 ml-2 login-card">
<center><i class="fas fa-users fa-5x"></i></center>
<hr>
<form method="post" class="p-3">
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
  <div>
  <h6 class="pt-2">
  <a href="librarianlogin.php">librarian login?</a><br>
  <a onclick='alert("Please contact to librarian")'  href="">forgetten password?</a><br>
  <a href=registration.php>Don't have an account?</a></h6>
  </div>
</form>
<?php
if(isset($_POST['submit']))
	{
		include_once('connection.php');
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql=mysqli_query($conn,"select * from userinfo where email='$email' && password='$password' && status='yes'");
        $count=0;
        $count=mysqli_num_rows($sql);
        if($count==0)
		{?>
		<p style="color:white; text-align:center; background-color:red;margin:auto; padding:5px;border-radius:5px;">Invalid user</p>
	<?php	}
		else{
    $_SESSION["email"]=$_POST["email"];
   ?>
     <script>
     window.location="users/profile.php";
     </script>     
     <?php
  }}
else{} ?>

</div></div>
</div>
</div>
</div>
<?php
include('footer.php');

?>