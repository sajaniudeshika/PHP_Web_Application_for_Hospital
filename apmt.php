<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$con=mysqli_connect("localhost","root","","suwapiyasa");
if(isset($_POST['book_apt'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$nic = $_POST['nic'];
	$phone = $_POST['tele'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$mindate = date("Y-m-d");
	$doct = $_POST['docapt'];
	$query1 = "INSERT INTO appointment(fname,lname,nic_no,email,contact,doctor,date)VALUES('$fname','$lname','$nic','$email','$phone','$doct','$date')";
	$result=mysqli_query($con,$query1);
	if($result){
			echo "<script>alert('Appointment Registered. A detailed Email has been sent to you.')</script>";
			echo "<script>window.open('apmt.php','_self')</script>";
			try {
			//Server settings
		   // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'suwapiyasahospitals@gmail.com';                 // SMTP username
			$mail->Password = 'himath159';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			//Recipients
			$mail->setFrom('suwapiyasahospitals@gmail.com', 'Suwapiyasa Hospital');
			$mail->addAddress("$email");     // Add a recipient
			$content = 'Dear <b>'.$fname.'!</b> your appointment has been scheduled for '.$date.'. we will be in touch with you for further details';
			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Appointment Details';
			$mail->Body    = $content;

			$mail->send();
						//echo 'Message has been sent';
			} catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
	}else{
		echo "<script>alert('Somthing Went Wrong')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Book an Appointment</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./bootstrap-3.3.6-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="./JQuery Library.js"></script>
		<script src="./bootstrap-3.3.6-dist/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/navbar.css">
		<link rel="stylesheet" type="text/css" href="./css/apmtstyle.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
	<body>
		<div class="row">
			<div calss="col-md-12">
				<div id="navigator">
						<header>
							<div class="logo">Suwapiyasa Hospital</div>
							<nav>
								<ul>
									<li><a href="Index.php">Home</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Staff</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Login</a></li>
								</ul>
							</nav>
							<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</header>
						<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
						<script type="text/javascript">
							$(document).ready(function(){
								$('.menu-toggle').click(function(){
									$('nav').toggleClass('active')
								})
							})
						</script>
					</div>
			</div>
		 </div>
		 <div calss="container">
			 <div calss="row">
				 <div class="col-md-6">
					 <h1 id="heading">Suwapiyasa Channeling</h1>
					 <hr>
					 <h3>Doctor Information</h3>
					 <hr>
					 <p>Prior your booking check the availability of the consultant. Incase if you experiance any problem Please make sure you call Suwapiyasa Hospital and reserve a Date & Time</p>
					 <form class="form-group" action="apmt.php" method="post">
									<label>First Name:</label><input type="text" class="form-control" name="fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
									<label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
									<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
									<label>Emial:</label><input type="text" class="form-control" name="email" required></br>
									<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter NIC to correct format"></br>
									<label>Select Doctor:</label><select class="form-control" name="docapt" required>
																	<option hidden >Select Specialist</option>
																	<option value="ENT">ENT Surgen</option>
																	<option value="VOG">VOG</option>
																	<option value="Cardiologist">Cardiologist</option>
																	<option value="EYE">EYE Surgen</option>
																	<option value="VP">VP</option>
																 </select><br/>
									<label>Date:</label><input type="date" class="form-control" name="date" required min="2018-12-25"></br>
									<input type="submit" name="book_apt" value="Book Appointment" class="btn btn-primary" id="book_btn">
								</form>
				 </div>
			 </div>
		 </div>
	</body>
</html>
