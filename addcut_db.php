<?php
session_start();

$cname=$_POST['cname'];
$stream=$_POST['stream'];
$marks=$_POST['marks'];

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
			$insert="INSERT INTO addcut(college,stream,marks) values(?,?,?)";

				$st=$conn->prepare($insert);
				$st->bind_param("ssi",$cname,$stream,$marks);
				$st->execute();
				$st->close();

				require 'addcut.php';			
		}

?>