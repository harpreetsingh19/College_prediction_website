<?php
session_start();
$user=$_POST['ad_user'];
$pass=$_POST['ad_pass'];

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
			$select="select * from admin where username=? AND password=? Limit 1";

			$stmt=$conn->prepare($select);
			$stmt->bind_param("ss",$user,$pass);
			$stmt->execute();
			$stmt->bind_result($user,$pass);
			$stmt->store_result();
			$num=$stmt->num_rows;

			if($num==1)
			{
				require 'admin_page.php';				
			}
			else
			{
				echo"Invalid username or password";
			}
		
		}
	
}

?>