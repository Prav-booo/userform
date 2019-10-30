<!DOCTYPE html>
<html>
<head>
	<meta lang="en" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet"  href="assets/css/docs.min.css" type="text/css" />
	<link rel="stylesheet" href="signin.css" type="text/css">
	<title>New User-Form</title>
</head>
<body>
	<div id="wrapper">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Studentdata</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="userlist.php">Userlist</a></li>
    </ul>
  </div>
</nav>
  
		<div class="container">
				<div class="row">
					<div class="col-md-12">
					<div class="col-md-12">
						<?php
								 @$message = $_REQUEST['message'];
						
								if(@$message == 'success')
								{
									$msg = "Dear Customer, Thankyou for register with us!. Please check list of user <a href='userlist.php'>here</a>";
								} else {
									$msg = '';
								}
							?>
							
						</div>
						
							<?php if(!empty($msg)) { ?>
								<div class="alert alert-success ">
									
									<?php
										echo $msg;	
									?>
								</div>
							<?php } ?>
						
						
						<div class="col-md-12">
							<?php 
								@$message = $_REQUEST['message'];
							 
								if(@$message == 'danger')
								{
									$msg ="Sorry, Your request cannot accept!";
								}
								else{
									$msg='';
								}	
							?>
						
						</div>
							 <?php if(!empty($msg)) { ?>
								<div class="alert alert-danger">
								
									<?php
									echo $msg;
									?>
								</div>
								
							 <?php } ?>
							 
						<form class="form-signin" method="POST" action="userserver.php">
						<div class="alert alert-success alert-dismissible" id="myAlert">
						  <a href="userlist.php" class="close">&times;</a>
							
							<h4>Add New User</h4>
						</div>
								
						<input type="name" name="firstname" class="form-control" placeholder="Name" required /> <br>
						<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus /> <br>
						<input type="phone-number" name="contact-number" class="form-control" placeholder="Eg:9999999999" required /><br>
						<input type="username" name="username" class="form-control" placeholder="Username" required /><br>
						<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required /><br>
						<input type="department" name="department" class="form-control" placeholder="Department" required /> <br>
						<select id="select-role"  class="form-control" name="select-role" >	
						<option value="First Year">First Year</option>
						<option value="Second Year">Second Year</option>
						<option value="Third Year">Third Year</option>
						<option value="Final year">Final Year</option>
						</select><br>
						<button class="btn  btn-primary" type="submit" >Save</button><br>
						<p>Do you have account 
						<a href="login.php">Login Here?</a> </p>
						</form>	
					</div>
					</div>
				</div>
		</div>
</body>
</html>