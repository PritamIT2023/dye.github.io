<?php
	session_start();
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');	
	mysqli_select_db($con,'artgallery');
	
	if($password==''){
		header("location: http://localhost/online%20art%20gallery/faild.html");
	}
	
	
    $q="insert into customer values('$firstname','$lastname','$email','$password')";
		
	
	$result=mysqli_query($con,$q);
	
	if($result==TRUE)
	{
		
		echo "  Successfully  Register  wait for 5sec to redirect";
        header("Refresh: 5; URL=http://localhost/online%20art%20gallery/index.html");
		
	}
	else
	{	
		
        header("Refresh: 5; URL=http://localhost/online%20art%20gallery/faild.html");

      
	
	}	
		
?>
