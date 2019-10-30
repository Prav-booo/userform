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
<form action="userserver.php" method="POST" class="form-sigin">

<?php

$id = $_REQUEST['edit'];

if (isset($id) && !empty($id)) {

$select_query = "SELECT * FROM studentform WHERE id ='".$id."'" ;

$selectSQL = mysqli_query($conn, $select_query);

if(mysqli_num_rows($selectSQL) > 0) {
while ($row = mysqli_fetch_array($selectSQL)) { 

?>

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

<?php 
echo ;
echo "<br >";
echo $row['name'];
echo "<br >";
echo $row['email'];
echo "<br >";
echo $row['contact_number'];
echo "<br >";
echo $row['username'];
echo "<br >";
echo $row['password'];
echo "<br >";
echo $row['department'];
echo "<br >";
echo $row['select_role'];
echo "<br >";
} 
}

echo "<pre>";
//print_r($selectSQL);
exit();

//foreach($selectSQL as )
}

if($result) {
header("location: userlist.php?update_message = success");
} else {
header("location:userlist.php?update_message=error");
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

