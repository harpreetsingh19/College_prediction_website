<?php
session_start();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user=$_POST['username'];
$pass=$_POST['password'];
$add1=$_POST['address1'];
$add2=$_POST['address2'];
$m=$_POST['month'];
$d=$_POST['date'];
$y=$_POST['year'];
$pschool=$_POST['preschool'];
$addhar=$_POST['addhar'];
$ref=$_POST['ref'];






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
			$insert="INSERT INTO stu_registration(fn,ln,username,password,a1,a2,month,date,year,preschool,addhar,ref) values(?,?,?,?,?,?,?,?,?,?,?,?)";

				$st=$conn->prepare($insert);
				$st->bind_param("ssssssiiisis",$fname,$lname,$user,$pass,$add1,$add2,$m,$d,$y,$pschool,$addhar,$ref);
				$st->execute();
				$st->close();


				$insert="INSERT INTO stu_data(username,password) values(?,?)";

				$st=$conn->prepare($insert);
				$st->bind_param("ss",$user,$pass);
				$st->execute();
				$st->close();

				require 'student.php';			
		}

?>