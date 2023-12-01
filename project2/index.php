<?php
	if($_POST)
	{
		$servername="localhost";
		$username="root";
		$password="";
		$databse="db";
		
		$conn=new mysqli($servername,$username,$password,$database);
	
		if($conn->connect_error)
		{
			echo "connection error";
		}

		$user=$_POST["username"];
		$pass=$_POST["password"];

		$sql="INSERT INTO user(username,password) VALUES('$user','$pass')";
		
		if($conn->query($sql)){
			echo "Successful";
		}
		else
		{
			echo "unsuccessful";
		}
	$conn->close();
	}
?>