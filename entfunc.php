<?php
$con=mysqli_connect("localhost","root","","suwapiyasa");
if(isset($_POST['edit_profile'])){
  $phone = $_POST['tele'];
  $time = $_POST['time'];
  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $hospital = $_POST['hospital'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query1 = "UPDATE doctor Set contact='$phone', time='$time',hospital='$hospital' WHERE specialized_area='ENT'";
  $result=mysqli_query($con,$query1);
  if($result){
    $encripted_pass = sha1($password);
    $query2 = "UPDATE login Set username='$username',password='$encripted_pass',image='$image' WHERE abstype='ENT'";
    $result2=mysqli_query($con,$query2);
    if($result2){
      echo "<script>alert('Profile Altered')</script>";
      echo "<script>window.open('./ent.php','_self')</script>";
    }else{
      echo "<script>alert('Somethig Went Wrong')</script>";
      echo "<script>window.open('./ent.php','_self')</script>";
    }
  }else{
    echo "<script>alert('Somethig Went Wrong')</script>";
    echo "<script>window.open('./ent.php','_self')</script>";
  }
}
?>
