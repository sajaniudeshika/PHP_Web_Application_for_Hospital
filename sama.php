<?php session_start(); 

$con=mysqli_connect("localhost","root","","suwapiyasa");

// require_once('inc/connection.php'); ?>


<!DOCTYPE html>

<h1> Test staff</h1>


	
	<html lang="en">
	<head>
	
		<title> System User Registration Form </title>
		<link rel="stylesheet" href="css/styleLogin.css">
		
	
	</head>
	
	<body>
	
		<header>
		<div class="appname">user Manegement System</div>
		
		
		</header>
		<h1>users page</h1>
	</body>
	
	
	</html>
	
<?PHP
	
	//--------------------------Staff----------------------------------------------------------
	
	if($_SESSION['type1'] =='staff'){
	
	$userID=$_SESSION['id'];
	require_once('$con');
	
	$sql = "SELECT * FROM staff WHERE nic_no='$userID' ";
	$result = $con  ->  query($sql);
	
	print_r($_SESSION['type1']);
	
	

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["nic_no"]."<br>"."staff_Id:".$row["number"]."<br>" ."Last Name:".$row["lastname"]."<br>"."First Name:".$row["firstname"]."<br>";
			print_r($_SESSION['type1']);
		}
	} 
	
	
	}
	
	
	$con->close();
?>
	