<?php
 $servername="127.0.0.1";
 $username="root";
 $password="";
 $dbname="libary";

 @$conn= new mysqli($servername,$username,$password,$dbname);

 if($conn->connect_error) {
	die("connection failed:" .$conn->connect_error);
 }	

$name =  $conn -> real_escape_string($_POST['name']);
$email = $conn -> real_escape_string($_POST['email']);
$username = $conn -> real_escape_string($_POST['username']);
$password = $conn -> real_escape_string($_POST['password']);
$encrypt_password = md5($password);

	$sql="INSERT INTO `user`(`name`,`email`,`username`,`password`) VALUES ('".$name."','".$email."','".$username."','".$encrypt_password."')";
	echo "$sql";
	exit();

   $result = mysqli_query($conn ,$sql);
   
   
	if ($conn->query($result) === TRUE) {
	 header("Location: bookregister.php?message=success");
	}
	else{
	  header("Location: error.php?message=danger");
	}
	$conn->close();
?>