<?php
 $servername="127.0.0.1";
 $username="root";
 $password="";
 $dbname="books_new";

 $conn= new mysqli($servername,$username,$password,$dbname);

 if($conn->connect_error) {
	die("connection failed:" .$conn->connect_error);
 }	

$book_name =  $conn -> real_escape_string($_POST['book_name']);
$author = $conn -> real_escape_string($_POST['author']);
$edition = $conn -> real_escape_string($_POST['edition']);
$publication = $conn -> real_escape_string($_POST['publication']);


	$sql="INSERT INTO `books_new`(`book_name`,`author`,`edition`,`publication`) VALUES ('".$book_name."','".$author."','".$edition."','".$publication."')";


	if ($conn->query($sql) === TRUE) {
	 header("Location: bookregister.php?message=success");
	}
	else{
	  header("Location: error.php?message=danger");
	}
	$conn->close();
?>