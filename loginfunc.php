<?php session_start(); 
 //require_once('inc/connection.php'); 
 
 $con=mysqli_connect("localhost","root","","suwapiyasa");





//--------------------tempory code for open staff in dynamic way-----------------------------

		
		
		
		

		
		

/*		
	
//-------------------------senta-----------------------------------	
		
		
		
		
		if(isset($_POST['login'])){
			
			
		$username=$_POST['username'];
		$password=$_POST['password'];
			
		$query = "SELECT * FROM login where username='$username' && password='$password'";
		
		$result = mysqli_query($con,$query);
		
		
		if(mysqli_num_rows($result)>0){
			$query1  = "SELECT * from login";
			$result2 = mysqli_query($con,$query1);
			while($row=mysqli_fetch_array($result2)){
			
			if($row['username']==$username && $row['password']==$password){
				$_SESSION['username'] = $row['username'];
				$_SESSION['type1'] = $row['type'];
				$_SESSION['id'] = $row['id'];
				
				print_r($_SESSION['type1']);
				print_r($_SESSION['id']);
				
				header("location:sama.php");
			}
		
		
		
		}

		}
		} 
		
		


//------------------------------------------------------------------------------------------
*/









if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$decrypted_pass = sha1($password);
		
		
		
		$query = "SELECT * FROM login where username='$username' && password='$password'";
		
		
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
			$query1  = "SELECT * from login";
			$result2 = mysqli_query($con,$query1);
			while($row=mysqli_fetch_array($result2)){
			if($row['username']==$username && $row['password']==$decrypted_pass && $row['abstype']=="ENT"){
				$_SESSION['username'] = $row['username'];
				//$_SESSION['utype'] = $row['abstype']123
				header("location:ent.php");
			}
			else if($row['username']==$username && $row['password']==$decrypted_pass && $row['abstype']=="VOG"){
				$_SESSION['username'] = $row['username'];
				//$_SESSION['utype'] = $row['abstype'];
				header("location:vog.php");
			}
			else if($row['username']==$username && $row['password']==$decrypted_pass && $row['abstype']=="Cardiologist"){
				$_SESSION['username'] = $row['username'];
				//$_SESSION['utype'] = $row['abstype'];
				header("location:cardi.php");
			}
		 else if($row['username']==$username && $row['password']==$decrypted_pass && $row['abstype']=="EYE"){
				$_SESSION['username'] = $row['username'];
				//$_SESSION['utype'] = $row['abstype'];
				header("location:eye.php");
			}
			else if($row['username']==$username && $row['password']==$decrypted_pass && $row['abstype']=="VP"){
				$_SESSION['username'] = $row['username'];
				//$_SESSION['utype'] = $row['abstype'];
				header("location:vp.php");
			}
		}
		}else{
			echo '<script>alert("Wrong Details")</script>';
			echo "<script>window.open('login.php','_self')</script>";
		}
}  


?>
