<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentform";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact_number = $_POST['contact-number'];
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];
$role = $_POST['select-role'];

if(isset($id)) {
	$updateSQL = "UPDATE `studentform` SET `name`='".$name."',`email`='".$email."',`contact_number`='".$contact_number."',`username`='".$username."',`password`='".$password."',`department`='".$department."',`select_role`='".$role."' WHERE id=".$id;
	
	
	if ($conn->query($updateSQL) === TRUE) {
		header("location: userlist.php?update_messagge=success"); 
	} else {
		header("location: userlist.php?update_message=error"); 
	}
}


mysqli_close($conn);
?>