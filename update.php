<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentform";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_REQUEST['edit']; 

if(isset($id) && !empty($id)){
    
	 /* 
         $sql = "UPDATE studentform SET name=$name, email=$email, contact_number=$contact_number , username=$username , password=$password ,department=$department ,select_role=$select_role WHERE id=$id";
		 */ echo $result= "SELECT*FORM studentform WHERE id=$id " ;
		exit();
	   if(mysqli_query($conn, $sql)){
       	   header("location: userlist.php?update_message = success");
            } else
			{
              header("location:userlist.php?update_message=error");
            }
        }
		$row = mysqli_fetch_array($result);
mysqli_close($conn);  
 ?>