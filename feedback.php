<?php
session_start();

$feed=$_POST['feedback'];




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

				$insert="INSERT INTO feedback(feed) values(?)";

				$st=$conn->prepare($insert);
				$st->bind_param("s",$feed);
				$st->execute();
				$st->close();

				require 'first_page.php';			



		}

?>