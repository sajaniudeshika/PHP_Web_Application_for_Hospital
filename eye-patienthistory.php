<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>EYE-patient History</title>
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

    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
				<div class="card">
    				<div class="card-body">
    				<center><h4 style="text-decoration:underline;">Search Patient History</h4></center>
    				<form action="eye-patienthistory.php" method="post">
      					<?php
      						if(isset($_POST['search']))
      						{
      							$valueToSearch = $_POST['valueToSearch'];
      							$query="SELECT * FROM apmt_eye WHERE nic_no='$valueToSearch'";
      							$search_result = filterTable($query);
      						}
      						else{
      							$query="SELECT * FROM apmt_eye";
      							$search_result = filterTable($query);
      						}
      						function filterTable($query)
      						{
      							$connection = mysqli_connect("localhost","root","","suwapiyasa");
      							$filter_result = mysqli_query($connection,$query);
      							return $filter_result;

      						}
      					?>
      					<center>
      					<input type="text" name="valueToSearch" placeholder="enter nic number filter" required pattern="[9]{1}[1-9]{8}[v-V]{1}" title="Please enter NIC to correct format">
      					<input type="submit" name="search" value="search" class="btn btn-primary">
      					</center>
      					<div class="card-body" >
      					<table class="table table-hover">
      						<tr>
                    <th>First Name</th>
                    <th>Last Name</th>
      							<th>Contact</th>
      							<th>Nic Number</th>
      							<th>Priscription</th>
                    <th>Date Treated</th>
      						<tr>
      						<?php while($row=mysqli_fetch_array($search_result)):?>
      							<tr>
                      <td><?php echo $row['fname'];?></td>
      								<td><?php echo $row['lname'];?></td>
                      <td><?php echo $row['nic_no'];?></td>
                      <td><?php echo $row['contact'];?></td>
      								<td><?php echo $row['priscription'];?></td>
                      <td><?php echo $row['date'];?></td>
      							</tr>
      						<?php endwhile;?>
      					</table>
      					</div>
    				</form>
    				</div>
  				</div>
				</div>
    </div>
    <div class="col-md-1">
    </div>
  </div>
  </body>
</html>
