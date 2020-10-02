<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}
?>
<?php
$con=mysqli_connect("localhost","root","","suwapiyasa");
$query="select * from doctor where specialized_area='EYE' " ;
$query2 = "SELECT image from login where abstype='EYE'";
$result = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
    $name = $row['fname'];
    $lname = $row['lname'];
    $type =$row['specialized_area'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>EYE Surgeon</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="./css/doctorstyle.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="col-md-12">
        <div class="header">
          <div class="logo" style="margin-left:15px">Suwapiyasa Hospital</div>
        </div>
      </div>
    </div>
    <div class="row">
          <div class="col-md-3">
            <div class="card" style="margin-top:10px; margin-left:10px;">
              <?php
                   $con=mysqli_connect("localhost","root","","suwapiyasa");
                   $query = "SELECT image from login where abstype='EYE'";
                   $result = mysqli_query($con,$query);
                   while($row= mysqli_fetch_array($result)){
                     echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" style="width:100%;height:250px;"/>';
                   }
              ?>
               <div class="container">
                 <h4>Dr. &nbsp;<?php echo $_SESSION['username']; ?></h4>
                 <p><?php echo $type ?> &nbsp;Surgeon</p>
                 <p>No.of Appointments today:</p>
                 <?php
            					$con2=mysqli_connect("localhost","root","","suwapiyasa");
            					$date =date("Y-m-d");
            					$sql="SELECT count(nic_no) AS total FROM appointment WHERE doctor='EYE' and date='$date'";
            					$result2=mysqli_query($con2,$sql);
            					$values=mysqli_fetch_assoc($result2);
            					$num_rows=$values['total'];
            					echo  $num_rows;
          				?><br/>
                  <div class="cancel_apt">
                    <ul>
                      <li id="cancel"><a href="logout.php" style="text-decoration:none;color:#fff">Logout</a></li>
                    </ul>
                  </div>
               </div>
            </div>

          </div>
          <div class="col-md-8">
            <div class="sub_nav">
              <ul>
                <li id="apmt" onclick="document.getElementById('welcome').style.display='none';document.getElementById('appoitments').style.display='inline';document.getElementById('apmt').style.background='#2196f3';document.getElementById('mg-profile').style.display='none';document.getElementById('profile').style.background='#262626';document.getElementById('patients').style.display='none';document.getElementById('patientclk').style.background='#262626';">Appointments</li>
                <li id="profile" onclick="document.getElementById('welcome').style.display='none';document.getElementById('mg-profile').style.display='inline';document.getElementById('profile').style.background='#2196f3';document.getElementById('appoitments').style.display='none';document.getElementById('apmt').style.background='#262626';document.getElementById('patients').style.display='none';document.getElementById('patientclk').style.background='#262626';">Manage Profile</li>
                <li id="patientclk" onclick="document.getElementById('welcome').style.display='none';document.getElementById('patients').style.display='inline';document.getElementById('patientclk').style.background='#2196f3';document.getElementById('appoitments').style.display='none';document.getElementById('apmt').style.background='#262626';document.getElementById('mg-profile').style.display='none';document.getElementById('profile').style.background='#262626';">Patients</li>
                <li id="view_his"><a href="eye-patienthistory.php" style="text-decoration:none;color:#fff">Patient History</a></li>
              </ul>
            </div>

              <div id="welcome" style="display:inline;">
                <h1 style="margin-left:40px;font-size:70px;">Suwapiyasa Hospitals Welimada</h1>
              </div>
              <!------------------------------Appointments------------------------------------------->
              <div id="appoitments" style="display:none;">
                  <div class="card" style="margin-top:10px;background-color:#262626;color:white;">
            				<div class="card-body">
            					<center><h4 style="text-decoration:underline;">Appointment Details</h4></center>
              				<div class="card-body" >
                  					<table class="table table-hover"style="margin-top:10px;background-color:#262626;color:black;">
                  						<thead>
                  							<tr>
                  							  <th scope="col">First Name</th>
                  							  <th scope="col">Last Name</th>
                  							  <th scope="col">NIC Number</th>
                  							  <th scope="col">Telephone</th>
                  							  <th scope="col">Email</th>
                  							  <th scope="col">Date</th>
                  							</tr>
                  						</thead>
                  						  <tbody>
                  							<?php
                  								$con=mysqli_connect("localhost","root","","suwapiyasa");
                  								$query="select * from appointment WHERE doctor='EYE'";
                  								$result=mysqli_query($con,$query);
                  								while($row=mysqli_fetch_array($result)){
                  								$fname = $row['fname'];
                  								$lname = $row['lname'];
                  								$nic = $row['nic_no'];
                  								$phone = $row['contact'];
                  								$email = $row['email'];
                  								$date = $row['date'];
                  								echo "<tr>
                  										<td>$fname</td>
                  										<td>$lname</td>
                  										<td>$nic</td>
                  										<td>$phone</td>
                  										<td>$email</td>
                  										<td>$date</td>
                  									  </tr>";
                  							}
                  							?>
                  						  </tbody>
                  					</table>
              				</div>
            				</div>
            			</div>
                </div>
                <!-------------------------------------------------------------------------------------->

                <!-------------------------------------Manage Profile----------------------------------->
                <div id="mg-profile" style="display:none;">
                  <div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
                  <center><h5 style="color:white;font-size:25px">Manage My Profile</h5></center>
                  </div>
                  <form class="form-group" action="eyefunc.php" method="post" enctype="multipart/form-data">
       									<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
       									<label>Time:</label><input type="time" class="form-control" name="time" required></br>
                        <label>Hospital:</label><input type="text" class="form-control" name="hospital" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
      									<label>Profile Picture</label><input type="file" name="image" id="image"><br/>
                        <label>Username:</label><input type="text" class="form-control" name="username" required title="Please enter a username"></br>
       									<label>Password:</label><input type="password" class="form-control" name="password" required title="Please enter a password"></br>
       									<input type="submit" name="edit_profile" value="Edit Profile" class="btn btn-primary" id="book_btn">
       							</form>
                </div>
                <!-------------------------------------------------------------------------------------------->

                <!-------------------------------------------Patients--------------------------------------------->
                <div id="patients" style="display:none;">
                  <form class="form-group" action="" method="post">
                          <?php
                          $con=mysqli_connect("localhost","root","","suwapiyasa");
                          if(isset($_POST['register'])){
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $nic = $_POST['nic'];
                            $phone = $_POST['tele'];
                            $priscription = $_POST['priscription'];
                            $date = date("Y-m-d");
                            $query = "INSERT INTO apmt_eye(fname,lname,nic_no,contact,priscription,date)values('$fname','$lname','$nic','$phone','$priscription','$date')";
                            $result=mysqli_query($con,$query);
                            if($result){
                              echo "<script>alert('Registered')</script>";
                              echo "<script>window.open('eye.php','_self')</script>";
                            }else{
                              echo "<script>alert('Somethig Went Wrong')</script>";
                              echo "<script>window.open('eye.php','_self')</script>";
                            }
                          }
                          ?>
                        <label>First Name:</label><input type="text" class="form-control" name="fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
                        <label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
                        <label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
                        <label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter NIC to correct format"></br>
                        <label>Proscription And Diagnostics</label><textarea class="form-control" name="priscription" required></textarea></br>
                        <input type="submit" name="register" value="Register" class="btn btn-primary">
                  </form>
                </div>
                <!----------------------------------------------------------------------------------------------------->
          </div>
    </div>
  </body>
</html>
