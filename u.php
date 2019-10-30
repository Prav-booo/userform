<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentform";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}
?>

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
			
					<form action="updateform.php" method="POST" class="form-sigin">
						<div class="alert alert-success alert-dismissible" >
						   <button class="close" type="button" data-dismiss="alert">&times;</button>
						   <h4>Please Update Your Profile</h4>
						</div>   
	<?php
	
	$id = $_REQUEST['edit'];
	
	if (isset($id) && !empty($id)) {
		
		$select_query = "SELECT * FROM studentform WHERE id ='".$id."'" ;
		
		$selectSQL = mysqli_query($conn, $select_query);
		
		if(mysqli_num_rows($selectSQL) > 0) {
			while ($row = mysqli_fetch_array($selectSQL)) { 
			
			?>
			<label><h5>Name</h5></label><br>
				<input name="id" type="hidden" class="form-control" value="<?php echo $row['id']; ?>"  placeholder="Name" /><br>
				<input name="name" type="text" class="form-control" value="<?php echo $row['name']; ?>"  placeholder="Name" /><br>
			<label><h5>Eamil</h5></label><br>	
				<input name="email" type="text" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email" /><br>
			<label><h5>Contact-number</h5></label><br>	
				<input name="contact-number" type="phone-number" class="form-control" value="<?php echo $row['contact_number']; ?>" placeholder="Contact-number" /><br>
			<label><h5>Username</h5></label>	
				<input name="username" type="username" class="form-control" value="<?php echo $row['username']; ?>" placeholder="Username" /><br>
			<label><h5>Password</h5></label>	
				<input name="password" type="password" class="form-control" value="" placeholder="Password" /><br>
			<label><h5>Department</h5></label>	
				<input name="department" type="text" class="form-control" value="<?php echo $row['department']; ?>" placeholder="Department" /><br>
			<label><h5>Select-role</h5></label>	
				<select id="select-role"  class="form-control" name="select-role">	
					<option value="First Year" <?php if($row['select_role'] == 'First Year') { echo "selected='selected'"; } ?>>First Year</option>
					<option value="Second Year" <?php if($row['select_role'] == 'Second Year') { echo "selected='selected'"; } ?>>Second Year</option>
					<option value="Third Year" <?php if($row['select_role'] == 'Third Year') { echo "selected='selected'"; } ?>>Third Year</option>
					<option value="Final year" <?php if($row['select_role'] == 'Final year') { echo "selected='selected'"; } ?>>Final Year</option>
				</select><br>
				<button class="btn btn-lg btn-primary" type="submit" >Update your record</button><br>
           
				<?php
			} 
		}
	}
	
	mysqli_close($conn);  
?>
					
					</form>
				</div>
			</div>
		</div>
	</div>		

</body>
</html>

