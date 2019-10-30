<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM employees WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>







<?php

session_start();

$username = $_SESSION["authenticatedUser"];
$currentpassword = md5($_POST['currentpassword']);
$newpassword = md5($_POST['newpassword']);
$confirmnewpassword = md5($POST['confirmnewpassword']);

/* make a connection with database */
$con = mysql_connect("localhost", "root", "") or die(mysql_error());

/* select the database */
mysql_select_db("groupproject") or die(mysql_error());

$queryget = mysql_query("SELECT password FROM users WHERE username='$username'") or 
die(mysql_error());
$row = mysql_fetch_assoc($queryget);
 $currentpasswordDB = $row['password'];

//check passwords

if ($currentpassword==$currentpasswordDB)

{
if ($newpassword==$confirmnewpassword)
{
//success, change password in DB
    $querychange = mysql_query("UPDATE users SET password='$newpassword' WHERE       
 username='$username'") or die(mysql_error());
}
else header("Location: passwordmismatch.php");

if ($querychange == true){

    $_SESSION["passchange"] = "Your password has been changed, Please Log in";

    header("Location:login.php");

}

else $_SESSION["nopasschange"] = "Your password could not be changed, Please try   
again";
 header("Location:userchangepassword.php");

}

else header("Location: passwordmismatch.php");

mysql_close($con);

?>