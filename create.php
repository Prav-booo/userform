<!DOCTYPE html> 
<html>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="studentform";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);
}	
$sql = "CREATE TABLE studentform(\n"

    . "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,\n"

    . "name VARCHAR(30) NOT NULL,\n"

    . "email VARCHAR(50),\n"

    . "contact_number INT(255),\n"

    . "username VARCHAR(255),\n"

    . "password VARCHAR(255),\n"

    . "department VARCHAR(255),\n"

    . "select_role VARCHAR(255))";


if (mysqli_query($conn, $sql)) {
    echo "Table studentform created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>