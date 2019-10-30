<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentform";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['firstname']);
$email = $conn->real_escape_string($_POST['email']);
$contact_number = $conn->real_escape_string($_POST['contact-number']);
$username=$conn->real_escape_string($_POST['username']);
$password   = $conn->real_escape_string($_POST['password']);
$encrypt_password = md5($password);
$department = $conn -> real_escape_string($_POST['department']);
$select_role= $conn->real_escape_string($_POST['select-role']); 

 $sql   = "INSERT into studentform (name,email,contact_number,username,password,department,select_role) VALUES('" . $name . "','" . $email . "','" . $contact_number . "','" . $username . "','" . $encrypt_password . "','" .$department . "','".$select_role ."')";

if ($conn->query($sql) === TRUE) {
	 header("Location: index.php?message=success");
}
else{
  header("Location: error.php?message=danger");
}

 $conn->close();
?>
