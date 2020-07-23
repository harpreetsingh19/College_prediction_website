<!DOCTYPE html>
<html>
<head>
	<title>STUDENT LOGIN</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background:url(bg.jpg);
			font-family: sans-serif;
		}
		.main{
			position: absolute;
			top: 30%;
			left:25%;
			width: 50%;
			background:rgba(200,0,0,0.4);
			padding: 3%;
			border-radius: 30%;
			bor
		}
		input{
		width:80%;
		background: none;
		border: none;
		border-bottom: 1% red;
		color:white;
		padding: 2%;
		padding-left: 1%;
		font-size: 80%;
		cursor: pointer;
		margin: 1% 0;
		}
		h1{
			font-size:350%;
			position: absolute;
			top: 5%;
			left: 25%;
			color: red;
		}
		
		</style>
</head>
<body>

	<h1> <u> STUDENT LOGIN </u></h1>

<div class="main">
	<form action="student_db.php" method="post">
		<input type="text" name="username" placeholder="USERNAME" required><br>
		<input type="password" name="password" placeholder="PASSWORD" required><br>
		<input type="submit" value="LOGIN"><br>
		<a href="registration.php"><h3>REGISTRATION</h3></a>		
	</form>
</div>



</body>
</html>