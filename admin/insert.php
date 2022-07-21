<?php
	session_start();
	$id=$_POST['id'];
	$title=$_POST['title'];
	$image=$_POST['image'];
	$detail=$_POST['detail'];
	$price=$_POST['price'];
	$con=mysqli_connect('localhost','root');	
	mysqli_select_db($con,'artgallery');
	
	

		
	$q="INSERT INTO `art` (`id`, `title`, `image`, `detail`, `price`) VALUES ($id, '$title', '$image', '$detail', '$price');";
	$result=mysqli_query($con,$q);
	if(! $result)
	{
		 
        echo "Art add Fail   wait for 5sec to redirect";
        header("Refresh: 5; URL=http://localhost/online%20art%20gallery/admin/add_art.php#");
		
	}
	else
	{	
		echo "Art add Successfully  wait for 5sec to redirect";
        header("Refresh: 5; URL=http://localhost/online%20art%20gallery/admin/add_art.php#");
	
	}	
		
?>