<?php
	$con= mysqli_connect('localhost','root','','amazon');
	
	if(ISSET($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
	
		$query = mysqli_query($con, "SELECT * FROM `newcustomer` WHERE `email` = '$email' AND `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
    session_start();        
			$_SESSION['id']=$fetch['id'];
		echo "<script>window.location='customerhome.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='index.html'</script>";
		}
		
	}

?>