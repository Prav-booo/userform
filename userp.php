<!DOCTYPE html>
<html>
     <head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<title>Password Change</title>
				<link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css" />
	 </head>
<body>
	<div class="container">
	 <div class="row">
	   <div class="col-md-12">
			<h1>Change Password</h1>
				<form method="POST" action="user.php">
				<table>
				<tr>
			   <td>Enter your UserName</td>
				<td><input type="username" size="10" name="username"></td>
				</tr>
				<tr>
				<td>Enter your existing password:</td>
				<td><input type="password" size="10" name="password"></td>
				</tr>
			  <tr>
				<td>Enter your new password:</td>
				<td><input type="password" size="10" name="newpassword"></td>
				</tr>
				<tr>
			   <td>Re-enter your new password:</td>
			   <td><input type="password" size="10" name="confirmnewpassword"></td>
				</tr>
				</table>
				<p><input type="submit" value="Update Password">
				</form>
			   <p><a href="index.php">Home</a>
			   <p><a href="logout.php">Logout</a>
		</div>
	 </div>
	</div>   
 </body>
 </html> 