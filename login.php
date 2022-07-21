<?php
	session_start();
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');	
	mysqli_select_db($con,'artgallery');
	
	

		
	$q="select * from customer where email='$email' && password='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$_SESSION['email']=$email;
        header("location: http://localhost/online art gallery/customer/cu_index.php");
		
	}
	else
	{	
        header("location: http://localhost/online art gallery/loginfaild.html");
	
	}	
		
?>