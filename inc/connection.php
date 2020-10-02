
<?php 


	$dbhost ='localhost';
	$dbuser ='root';
	$dbpass ='';
	$dbname ='suwapiyasa';
	
	$con = mysqli_connect('localhost', 'root', '', 'suwapiyasa');
	
	//check connection 
	
	if(mysqli_connect_errno()){
	
		die('Database connection failed' .mysqli_connect_errno());
	
	}
	else{
		
			echo "success";
	
	}
	

?>