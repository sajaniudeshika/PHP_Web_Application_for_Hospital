<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$con=mysqli_connect("localhost","root","","suwapiyasa");
if(isset($_POST['admit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$nic = $_POST['nic'];
	$phone = $_POST['tele'];
	$date = date("Y-m-d");
	$doctor = $_POST['docapt'];

	$sql="SELECT count(number) AS total FROM ward";
	$result2=mysqli_query($con,$sql);
	$values=mysqli_fetch_assoc($result2);
	$num_rows=$values['total'];
	$max_number = 2;

	if($num_rows!=$max_number){
		$query = "insert into ward(fname,lname,nic_no,contact,doctor,date)values('$fname','$lname','$nic','$phone','$doctor','$date')";
		$result = mysqli_query($con,$query);
		echo "<script>alert('Patient admitted to ward')</script>";
		echo "<script>window.open('admin.php','_self')</script>";
	}
	else{
		echo "<script>alert('Cannot Admit Patient To Ward There are no free beds available')</script>";
		echo "<script>window.open('admin.php','_self')</script>";
	}
}
?>

<?php
$con=mysqli_connect("localhost","root","","suwapiyasa");
if(isset($_POST['book_apt'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$nic = $_POST['nic'];
	$phone = $_POST['tele'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$doct = $_POST['docapt'];


						$query1 = "UPDATE appointment Set fname='$fname',lname='$lname',email='$email',contact='$phone',doctor='$doct',date='$date' WHERE nic_no='$nic'";
						$result=mysqli_query($con,$query1);
						if($result){
								echo "<script>alert('Appointment Registered. A detailed Email has been sent to you.')</script>";
								echo "<script>window.open('admin.php','_self')</script>";
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
								$content = 'Dear <b>'.$fname.'!</b> your appointment has been updated accordingly';
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
							echo "<script>alert('NO Appointment')</script>";
							echo "<script>window.open('admin.php','_self')</script>";
						}
				}

?>
<?php
$con=mysqli_connect("localhost","root","","suwapiyasa");
if(isset($_POST['cancel_apt'])){
$nic = $_POST['nic'];
$query = "DELETE FROM appointment WHERE nic_no='$nic'";
$result=mysqli_query($con,$query);
	if($result){
		echo "<script>alert('Appointment Canceled')</script>";
		echo "<script>window.open('admin.php','_self')</script>";
	}else{
		echo "<script>alert('NO such Appointment')</script>";
		echo "<script>window.open('admin.php','_self')</script>";
	}
}
?>

<?php
$con=mysqli_connect("localhost","root","","suwapiyasa");
if(isset($_POST['discharge'])){
	$sql="SELECT count(number) AS total FROM ward";
	$result2=mysqli_query($con,$sql);
	$values=mysqli_fetch_assoc($result2);
	$num_rows=$values['total'];

	$email=$_POST['email'];
	$nic = $_POST['nic'];
	$payment=$_POST['payment'];

	if($num_rows!=0){
		$query2 = "SELECT COUNT(number) as valied From Ward WHERE nic_no='$nic'";
		$result3 = mysqli_query($con,$query2);
		$values2 = mysqli_fetch_assoc($result3);
		$num_rows_2 = $values2['valied'];
		if($num_rows_2!=0){
			$query = "DELETE FROM ward WHERE nic_no='$nic'";
			$result= mysqli_query($con,$query);
			if($result){
				echo "<script>alert('Discharged')</script>";
				echo "<script>window.open('admin.php','_self')</script>";
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
				$content = 'Thankyou for Choosing Suwapiyasa Hospitals as your health care partner. Total Payable amount is: '.$payment;
				//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'Discharge Details';
				$mail->Body    = $content;

				$mail->send();
							//echo 'Message has been sent';
				} catch (Exception $e) {
					echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
				}
				}
		}else{
			echo "<script>alert('Inavlied NIC')</script>";
			echo "<script>window.open('admin.php','_self')</script>";
		}
	}else{
		echo "<script>alert('No patients to discharge')</script>";
		echo "<script>window.open('admin.php','_self')</script>";
	}
}
?>
