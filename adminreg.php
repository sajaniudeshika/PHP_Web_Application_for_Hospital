<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Admin Dashboard</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="./css/adminstyle.css">
   <link rel="stylesheet" type="text/css" href="./css/navbar.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <form class="form-group" action="" method="post">
      <?php
      $con=mysqli_connect("localhost","root","","suwapiyasa");
      if(isset($_POST['register'])){
      					$fname = $_POST['fname'];
      					$lname = $_POST['lname'];
      					$nic = $_POST['nic'];
      					$email = $_POST['email'];
      					$phone = $_POST['tele'];
      					//$type = $_POST['doct_type'];
      					//$time = $_POST['time'];
      					$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      					$hospital = $_POST['hospital'];
      					$username = $_POST['username'];
      					$password = $_POST['password'];
      					//$usertype = $_POST['usertype'];


      					$query = "INSERT INTO doctor(fname,lname,email,contact,nic_no,)values('$fname','$lname','$email','$phone','$type','$nic','$hospital','$time')";
      					$result=mysqli_query($con,$query);
      						if($result){
      							$encripted_pass = sha1($password);
      							$query2 ="INSERT INTO login(id,username,password,abstype,image)values('$nic','$username','$encripted_pass','$type','$image')";
      							$result2=mysqli_query($con,$query2);
      							if($result2){
      								echo "<script>alert('Registered')</script>";
      								echo "<script>window.open('admin.php','_self')</script>";
      							}else{
      								echo "<script>alert('Error')</script>";
      								echo "<script>window.open('admin.php','_self')</script>";
      							}
      						}else{
      							echo "<script>alert('Something Wrong')</script>";
      							echo "<script>window.open('admin.php','_self')</script>";
      						}
      }
      ?>

      <label>First Name:</label><input type="text" class="form-control" name="fname" id="admit-fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
      <label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
      <label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
      <label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter NIC to correct format"></br>
      <label>Profile Picture</label><input type="file" name="image" id="image"><br/>
      <label>Username:</label><input type="text" class="form-control" name="username" required title="Please enter a username"></br>
      <label>Password:</label><input type="password" class="form-control" name="password" required title="Please enter a password"></br>
      <input type="submit" name="register" value="Register" class="btn btn-primary">
    </form>
  </body>
</html>
