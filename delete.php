<?php  
$servername="localhost";
$username="root";
$password="";
$dbname="studentform";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_REQUEST['del'];


if(isset($id) && !empty($id)) {
    
    $sql = "DELETE FROM studentform WHERE id = $id";
	
    if(mysqli_query($conn, $sql)) {
            header("location: userlist.php?delete_message=success"); 
    } else {
       header("location: userlist.php?delete_message=error"); 
    }
    
    mysqli_close($conn);
}
 
?>