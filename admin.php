<?php
		$con=mysqli_connect("localhost","root","","suwapiyasa");
		$sql="SELECT count(number) AS total FROM ward";
		$result2=mysqli_query($con,$sql);
		$values=mysqli_fetch_assoc($result2);
		$num_rows=$values['total'];
		$max_number = 2;
		//echo "Total number of patiens in ward: ".$num_rows."/".$max_number;
?>
<?php
$con=mysqli_connect("localhost","root","","suwapiyasa");
if(isset($_POST['reg_doc'])){
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$email = $_POST['email'];
					
					
					$phone = $_POST['tele'];
					$type = $_POST['doct_type'];
					$nic = $_POST['nic'];
					$hospital = $_POST['hospital'];
					$time = $_POST['time'];
					$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
					
					$username = $_POST['username'];
					$password = $_POST['password'];
					//$usertype = $_POST['usertype'];

					
					$query = "INSERT INTO doctor(fname,lname,email,contact,specialized_area,nic_no,hospital,time)values('$fname','$lname','$email','$phone','$type','$nic','$hospital','$time')";
					$result=mysqli_query($con,$query);
						if($result){
							$encripted_pass = sha1($password);
							
					//-----=- newly add type------- //
							$query2 ="INSERT INTO login(id,username,password,type,abstype,image)values('$nic','$username','$encripted_pass','$type','$type','$image')";
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
      <div class="header">
        <div id="navigator">
            <header>
              <div class="logo">Suwapiyasa Hospital</div>
            </header>
          </div>
      </div>
      <br/>
      <br/>
      <div class="row">
       <div class="col-lg-3">
         <div class="side_bar">
           <h3 id="heading">Admin Dashboad</h3>
           <div class="items">
              <div class="btn-group-vertical" class="item-buttons" style="width:305px;margin-top:30px;">
                 <button type="button" class="btn btn-primary" style="height:50px;" onclick="document.getElementById('view-apmt').style.display='inline';document.getElementById('admit_form').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('update-apmt').style.display='none';document.getElementById('cancel-apmt').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Add_Staff').style.display='none'">View All Appointments</button>

                 <button type="button" class="btn btn-primary" style="height:50px;" onclick="document.getElementById('update-apmt').style.display='inline';document.getElementById('admit_form').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('cancel-apmt').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Add_Staff').style.display='none'">Update Appointment</button>

                 <button type="button" class="btn btn-primary" style="height:50px;" onclick="document.getElementById('cancel-apmt').style.display='inline';document.getElementById('admit_form').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('update-apmt').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Add_Staff').style.display='none'">Cancel Appointment</button>

                 <button type="button" class="btn btn-primary" style="height:50px;" onclick="document.getElementById('Add_Doctor').style.display='inline';document.getElementById('admit_form').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('update-apmt').style.display='none';document.getElementById('cancel-apmt').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Add_Staff').style.display='none'">Add Doctor</button>

                 <button type="button" class="btn btn-primary" style="height:50px;" onclick="document.getElementById('Add_Staff').style.display='inline';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('update-apmt').style.display='none';document.getElementById('cancel-apmt').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Add_Doctor').style.display='none';">Add Staff</button>

                 <button type="button" class="btn btn-primary" style="height:50px;">Staff Salary</button>

                 <button type="button" class="btn btn-primary" style="height:50px;" onclick="document.getElementById('admit_form').style.display='inline';document.getElementById('view-ward').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('update-apmt').style.display='none';document.getElementById('cancel-apmt').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Add_Staff').style.display='none'">Reister Patient to Ward</button>

                 <button type="button" class="btn btn-primary" style="height:50px;" onclick="document.getElementById('view-ward').style.display='inline';document.getElementById('admit_form').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('update-apmt').style.display='none';document.getElementById('cancel-apmt').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Add_Staff').style.display='none'">View Ward Details</button>

                 <button type="button" class="btn btn-primary" style="height:50px;" onclick="document.getElementById('discharge-ward').style.display='inline';document.getElementById('admit_form').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('update-apmt').style.display='none';document.getElementById('cancel-apmt').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Add_Staff').style.display='none'">Discharge Patient</button>
              </div>
           </div>
         </div>
       </div>
       <div class="col-md-8">

         <div id="admit_form">
             <div class="card">
    						<div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
    						<center><h5 style="color:white;font-size:25px">Register patient to ward</h5></center><input id="curent_no" style="color:red" type="text" value="<?php echo $num_rows ?>" disabled>
    						</div>
    						<div class="card-body" >
    								<form class="form-group" action="adminfunc.php" method="post">
    									<label>First Name:</label><input type="text" class="form-control" name="fname" id="admit-fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
    									<label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
    									<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
    									<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter NIC to correct format"></br>
    									<label>Select Doctor:</label><select class="form-control" name="docapt" required>
                                      <option hidden >Select Specialist</option>
    																	<option value="ENT">ENT Surgen</option>
    																	<option value="VOG">VOG Surgen</option>
    																	<option value="Cardiologist">Cardiologist</option>
    																	<option value="EYE">EYE Surgen</option>
    																	<option value="VP">VP Surgen</option>
    																</select><br/>
    									<input type="submit" name="admit" value="Register patient to ward" class="btn btn-primary">
    								</form>
    						</div>
    					</div>
          </div>

          <!-------------------------------Ward details----------------------------------------->
          <div id="view-ward" style="display:none;margin-top:20px;">
            <table class="table table-hover" style="margin-top:20px;" id="userTbl">
                <?php
                  $con=mysqli_connect("localhost","root","","suwapiyasa");
                  $query="SELECT * FROM ward";
                  $search_result=mysqli_query($con,$query);
                 ?>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>NIC No</th>
									<th>Telephone</th>
									<th>Doctor</th>
									<th>Admited Date</th>
								<tr>
                  <tbody>
								  <?php while($row=mysqli_fetch_array($search_result)):?>
									<tr>
										<td><?php echo $row['fname'];?></td>
										<td><?php echo $row['lname'];?></td>
										<td><?php echo $row['nic_no'];?></td>
										<td><?php echo $row['contact'];?></td>
										<td><?php echo $row['doctor'];?></td>
										<td><?php echo $row['date'];?></td>
										<!--<td><a href="discharge-patients.php" style="text-decoration:none;"><input type="button" style="background-color:red;color:white;border-radius:5px;border-color:red;" value="Discharge Patient" name="discharge"></a></td>-->
									</tr>
								  <?php endwhile;?>
                  </tbody>
							</table>
          </div>
          <!------------------------------------------------------------------------------------------------------>

          <!-------------------------------Appointment details----------------------------------------->
          <div id="view-apmt" style="display:none;margin-top:20px;">
            <table class="table table-hover" style="margin-top:20px;" id="userTbl">
                <?php
                  $con=mysqli_connect("localhost","root","","suwapiyasa");
                  $query="SELECT * FROM appointment";
                  $search_result=mysqli_query($con,$query);
                 ?>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>NIC No</th>
                  <th>email</th>
									<th>Telephone</th>
									<th>Doctor</th>
									<th>Appointment Date</th>
								<tr>
                  <tbody>
								  <?php while($row=mysqli_fetch_array($search_result)):?>
									<tr>
										<td><?php echo $row['fname'];?></td>
										<td><?php echo $row['lname'];?></td>
										<td><?php echo $row['nic_no'];?></td>
                    <td><?php echo $row['email'];?></td>
										<td><?php echo $row['contact'];?></td>
										<td><?php echo $row['doctor'];?></td>
										<td><?php echo $row['date'];?></td>
									</tr>
								  <?php endwhile;?>
                  </tbody>
							</table>
          </div>
          <!------------------------------------------------------------------------------------------------->

          <!---------------------------------Update Appointment------------------------------------------------------->
          <div id="update-apmt" style="display:none;margin-top:20px;">
            <div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
            <center><h5 style="color:white;font-size:25px">Update Appointment</h5></center>
            </div>
            <form class="form-group" action="adminfunc.php" method="post">
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
 									<label>Date:</label><input type="date" class="form-control" name="date" required min="2018-12-14"></br>
 									<input type="submit" name="book_apt" value="Book Appointment" class="btn btn-primary" id="book_btn">
 							</form>
          </div>
          <!------------------------------------------------------------------------------------------------------------>

          <!-------------------------------------------Cancel Appointment----------------------------------------------->
          <div id="cancel-apmt" style="display:none;margin-top:20px;">
              <div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
              <center><h5 style="color:white;font-size:25px">Cancel Appointment</h5></center>
              </div>
              <form class="form-group" action="adminfunc.php" method="post">
                <label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
                <input type="submit" name="cancel_apt" value="Cancel Appointment" class="btn btn-danger" id="book_btn">
            </form>
          </div>
          <!-------------------------------------------------------------------------------------------------------------->

          <!-------------------------------------Discahrge Patients------------------------------------------->
          <div id="discharge-ward" style="display:none;margin-top:20px;">
            <form class="form-group" action="adminfunc.php" method="post">
              <table class="table table-hover" style="margin-top:20px;" id="userTbl">
                  <?php
                    $con=mysqli_connect("localhost","root","","suwapiyasa");
                    $query="SELECT * FROM ward";
                    $search_result=mysqli_query($con,$query);
                   ?>
  								<tr>
  									<th>First Name</th>
  									<th>Last Name</th>
  									<th>NIC No</th>
  									<th>Telephone</th>
  									<th>Doctor</th>
  									<th>Admited Date</th>
  								<tr>
                    <tbody>
  								  <?php while($row=mysqli_fetch_array($search_result)):?>
  									<tr>
  										<td><?php echo $row['fname'];?></td>
  										<td><?php echo $row['lname'];?></td>
  										<td><?php echo $row['nic_no'];?></td>
  										<td><?php echo $row['contact'];?></td>
  										<td><?php echo $row['doctor'];?></td>
  										<td><?php echo $row['date'];?></td>
  									</tr>
  								  <?php endwhile;?>
                    </tbody>
  							</table>
              </form>

                <div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
                <center><h5 style="color:white;font-size:25px">Patient Discharge Form</h5></center>
                </div>
                <form class="form-group" action="adminfunc.php" method="post">
                  <label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
 									<label>Emial:</label><input type="text" class="form-control" name="email" required></br>
                  <label>Amount to Pay:</label><input type="text" class="form-control" name="payment" required  title="Please enter valied amount"></br>
                  <input type="submit" name="discharge" value="Discharge" class="btn btn-danger" id="book_btn">
                </form>
          </div>
          <!-------------------------------------------------------------------------------------------------------------->

          <!---------------------------------------------ADD Doctor------------------------------------------------------->
          <div id="Add_Doctor" style="display:none;margin-top:20px;">
            <div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
            <center><h5 style="color:white;font-size:25px">Add Doctor</h5></center>
            </div>
            <form class="form-group" action="" method="post" enctype="multipart/form-data">
 									<label>First Name:</label><input type="text" class="form-control" name="fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
 									<label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
 									<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
 									<label>Emial:</label><input type="text" class="form-control" name="email" required></br>
 									<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter to correct format"></br>
 									<label>Specialized Area:</label><select class="form-control" name="doct_type" required>
 																	<option hidden >Select Specialist</option>
 																	<option value="ENT">ENT Surgen</option>
 																	<option value="VOG">VOG</option>
 																	<option value="Cardiologist">Cardiologist</option>
 																	<option value="EYE">EYE Surgen</option>
 																	<option value="VP">VP</option>
 																 </select><br/>
 									<label>Time:</label><input type="time" class="form-control" name="time" required></br>
                  <label>Hospital:</label><input type="text" class="form-control" name="hospital" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
									<label>Profile Picture</label><input type="file" name="image" id="image"><br/>
                  <label>Username:</label><input type="text" class="form-control" name="username" required title="Please enter a username"></br>
 									<label>Password:</label><input type="password" class="form-control" name="password" required title="Please enter a password"></br>
 									<input type="submit" name="reg_doc" value="Register Doctor" class="btn btn-primary" id="book_btn">
 							</form>
          </div>
          <!-------------------------------------------------------------------------------------------------------------->

					<!------------------------------------- Add Staff--------------------------------------------------------------->
					<div id="Add_Staff" style="display:none;margin-top:20px;">
						<div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
						<center><h5 style="color:white;font-size:25px">Add Staff</h5></center>
						</div>
						<form class="form-group" action="" method="post" enctype="multipart/form-data">
									<label>First Name:</label><input type="text" class="form-control" name="fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
									<label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
									<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format"></br>
									<label>Emial:</label><input type="text" class="form-control" name="email" required></br>
									<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter to correct format"></br>
									<label>Staff Type:</label><select class="form-control" name="doct_type" required>
																	<option hidden >Select Type</option>
																	<option value="Optition">Optition</option>
																	<option value="Eye_tech">Eye Technition</option>
																	<option value="Nurse">Nurse</option>
																 </select><br/>
									<label>Profile Picture</label><input type="file" name="image" id="image"><br/>
									<label>Username:</label><input type="text" class="form-control" name="username" required title="Please enter a username"></br>
									<label>Password:</label><input type="password" class="form-control" name="password" required title="Please enter a password"></br>
									<input type="submit" name="reg_staff" value="Register Staff Member" class="btn btn-primary" id="book_btn">
							</form>
					</div>
					<!--------------------------------------------------------------------------------------------------------------->
       </div>
      </div>
  </body>
</html>
<script>
	$(document).ready(function(){
		$('#insert').click(function(){
			var image_name = $('#image').val();
			if(image_name == ''){
				alert("please select an image");
				return false;
			}
			else{
				var extension = $('#image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extention, ['gif','png','jpg','jpeg'])==-1){
					alert('Invalied file format');
					$('#image').val('');
					return false;
				}
			}
		})
	});
</script>
