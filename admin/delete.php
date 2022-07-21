<?php
	session_start();
	$id=$_POST['id'];
	$con=mysqli_connect('localhost','root');	
	mysqli_select_db($con,'artgallery');
	
	

		
	$q="delete  from art where id=$id";
	$result=mysqli_query($con,$q);
	if($result)
	{
		 
        echo "Delete Successfully   wait for 5sec to redirect";
        header("Refresh: 5; URL=http://localhost/online%20art%20gallery/admin/add_art.php#");
		
	}
	else
	{	
		 echo "Delete Successfully   wait for 5sec to redirect";
        header("Refresh: 5; URL=http://localhost/online%20art%20gallery/admin/add_art.php#");
	
	}	
		
?>