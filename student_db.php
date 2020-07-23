<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];

if (!empty($user)&&!empty($pass)) {
	$host="localhost";
	$dbus="root";
	$dbpass="";
	$dbname="student-adm";

	$conn=new mysqli($host,$dbus,$dbpass,$dbname);

	if(mysqli_connect_error())
	{
		die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
		else
		{
			$select="select * from stu_data where username=? AND password=? Limit 1";

			$stmt=$conn->prepare($select);
			$stmt->bind_param("ss",$user,$pass);
			$stmt->execute();
			$stmt->bind_result($user,$pass);
			$stmt->store_result();
			$num=$stmt->num_rows;

			if($num==1)
			{
				require "stu_portal.php";				
			}
			else
			{
				echo"Invalid username or password";
			}
		
		}
	
}

?>