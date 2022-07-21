
<?php
	session_start();
	$id=$_POST['id'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');	
	mysqli_select_db($con,'artgallery');
	
	

		
	$q="select * from admin where id='$id' && password='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$_SESSION['password']=$password;
        header("location: http://localhost/online art gallery/admin/ad_index.php");
		
	}
	else
	{	
        header("location: http://localhost/online art gallery/ad_loginfaild.html");
	
	}	
		

		
?>