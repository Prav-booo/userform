<!DOCTYPE html>
<html>
	<head>
		<title>USER LIST</title>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="signin.css" rel="stylesheet" type="text/css" />
	</head>

<body>
 <div id="wrapper">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Studentdata</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="userlist.php">Userlist</a></li>
				</ul>
		    </div>
		</nav>
    <div class="container">
		<?php 
		
			@$update_message =$_REQUEST['update_messagge'];
			@$delete_message = $_REQUEST['delete_message'];
		?>
		
					<?php if(!empty($delete_message == 'success')) { ?>
						<div class="alert alert-success ">
							
							<?php
								echo "Record Deleted Successfully";	
							?>
						</div>
					<?php } ?>
					
					<?php if(!empty($delete_message == 'error')) { ?>
						<div class="alert alert-danger ">
							
							<?php
								echo "Something went wrong while deleing the record";	
							?>
						</div>
					<?php } ?>
				
				<?php if(!empty($update_message == 'success')){ ?>
				<div class="alert alert-success">
				<?php
					echo "Record Update Successfully";
				?></div>
				<?php } ?>
				
				<?php if(!empty($update_message == 'error')) { ?>
				<div class="alert alert-danger">
					<?php 
					echo "Something went wrong while updating record.";
					?></div>
				<?php } ?>
				
	<div class="row">
	<div class="col-md-12">
	<h2>USER LIST</h2>
		<table>
		   <tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact Number</th>
				<th>Username</th>
				<th>Department</th>
				<th>Year</th>
				<th colspan="2">Action</th>
			</tr>			
<?php
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="studentform";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql = "SELECT * FROM `studentform`";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>
				<td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["contact_number"]. "</td><td>" . $row["username"]. " </td><td>".$row["department"]."</td><td>". $row["select_role"]. " </td>
				<td><a href='u.php?edit=".$row['id']."'>Edit</a></td>
				<td><a href='delete.php?del=". $row['id']."'>Delete</a></td>
			</tr>";
		}
	} else {
		echo "0 results";
	}

$conn->close();
?>
			
		</table>
	</div>	
	</div>
	</div>	
 </div>
</body>
</html>




