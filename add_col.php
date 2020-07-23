<?php
session_start();

$cname=$_GET['cname'];
$adrr=$_GET['addr'];
$city=$_GET['city'];
$zip=$_GET['zip'];
$num=$_GET['cno'];
$cut=$_GET['cut'];



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

				$insert="INSERT INTO addcol(cname,adrr,city,zip,num,cutoff) values(?,?,?,?,?,?)";

				$st=$conn->prepare($insert);
				$st->bind_param("sssiii",$cname,$adrr,$city,$zip,$num,$cut );
				$st->execute();
				$st->close();

				require 'addcut.php';			



		}

?>