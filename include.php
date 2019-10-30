<!DOCTYPE html>
<html>
	<head>
		<title>Update Details</title>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="signin.css" rel="stylesheet" type="text/css" />
	</head>
<body>
	<div id="wrapper">
	  <div class="container">
		<div class="row">
			<div class="col-md-12">
					<form action="userserver.php" method="POST" class="form-sigin">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<h4>Update User Form</h4>
						 </div>
						<div><?php if(isset($message)){echo $message; } ?>
						</div> 
						<input name="name" type="text" class="form-control" value="<?php echo $row['name']; ?>"  placeholder="Name" /><br>
						<input name="email" type="text" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email" /><br>
						<input name="contact-number" type="phone-number" class="form-control" value="<?php echo $row['contact_number']; ?>" placeholder="Contact-number" /><br>
						<input name="username" type="username" class="form-control" value="<?php echo $row['username']; ?>" placeholder="Username" /><br>
						<input name="password" type="password" class="form-control" value="<?php echo $row['[password']; ?>" placeholder="Password" /><br>
						<input name="department" type="text" class="form-control" value="<?php echo $row['department']; ?>" placeholder="Department" /><br>
						<select id="select-role"  class="form-control" name="select-role" value="<?php echo $row['select_role']; ?>">	
												<option value="First Year">First Year</option>
												<option value="Second Year">Second Year</option>
												<option value="Third Year">Third Year</option>
												<option value="Final year">Final Year</option>
												</select><br>
						<button class="btn  btn-primary" type="submit" >Save</button><br>
					</form>
			   </div>
			</div>
		</div>
	</div>		

</body>
</html>

<nav class="navbar navbar-inverse">
 <?php
 if ($_SERVER['REQUEST_METHOD']=='POST'){

$password = $_POST['password'];

$sql= "SELECT * FROM studentform WHERE password = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
exit();
}
}
$query=mysql_query("SELECT password FROM studentform WHERE id= $_POST['$id'] ");
 
$pass = mysql_query($query,0);

if(md5($password) == $pass)
{
	echo "Welcome!";
}else
{
 echo "Wrong?";	
}
exit();
?>



	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="assets/img/lib.png" alt="First slide">
		  <div class="container"><div class="carousel-caption"></div>
          </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="assets/img/lib1.png" alt="Second slide">
          <div class="container">
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	