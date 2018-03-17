<?php 
session_start();
if(isset($_POST['submitButton'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	require_once('dbConnect.php');
	$checkQuery = "SELECT * FROM studen_info WHERE email='$email'";
	$result = $con->query($checkQuery);
	echo $result->num_rows;
	if($result->num_rows>=1){
		$_SESSION['message'] = "Given Email Id already exists";
	}
	else{
		$sql = "INSERT INTO studen_info (name, email) VALUES ('$name','$email')";
		if(mysqli_query($con, $sql)){
		    $_SESSION['message'] = "Record Saved Successfully";
		}
		else{
			$_SESSION['message'] = "Record not Saved";
		}
	}
	mysqli_close($con);
	header("Location:home.php");
}
?>
