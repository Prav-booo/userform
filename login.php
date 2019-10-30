
<!DOCTYPE html>
<html>
<head>
	<meta lang="en" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>user login</title>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="signin.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div class="cointainer">
		<div class="row">
			<div class="col-md-12">
				<form action=".php" class="form-signin" method="POST">
				   <p><h3>USER LOGIN</h3></p>
					<input name="username" type="username" placeholder="Username" class="form-control" /><br>
					<input name="password" type="password" placeholder="Password" class="form-control" />
					<button class="btn  btn-primary" type="submit" >login</button><br>
					<a href="">Forgot password?</a>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>