<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background:url(bg.jpg);
			font-family: sans-serif;
		}
		.main{
			position: absolute;
			top: 20%;
			left:10%;
			background:rgba(200,100,0,0.4);
			border-radius: 3%;
			border-style: 1% dashed;
			width:35%;
			padding: 2%;
		}
		input{
			width:80%;
			background: none;
			border:none;
			padding:1%;
		}
		.btn{
			background: #db817b;
		}
		label{
			font-style:italic;
			color: white;
		}
		h4{
			font-size:170%; 
			position: absolute;
			top: 5%;
			left: 15%;

		}

	</style>
</head>
<body>
	<h4><u>REGISTRATION FOR STUDENTS</u></h4>
	<div class="main">
<form action="resgistration_db.php" method="post">
	<label>FIRST NAME<br>
	<input type="text" name="fname" placeholder="FIRST NAME" required><br>
	</label><br>
	<label>LAST NAME<br>
	<input type="text" name="lname" placeholder="LAST NAME" required><br>
</label><br>




<label>DESIRED USERNAME<br>
	<input type="text" name="username" placeholder="USERNAME" required><br>
</label><br>

<label>PASSWORD(CHOOSE A STRONG PASSWORD)<br>
	<input type="password" name="password" placeholder="PASSWORD" required><br>
</label><br>





<label>ADRESS LINE 1<br>
	<input type="text" name="address1" placeholder="ADRESS LINE 1" required><br>
</label><br>
<label>ADRESS LINE 2<br>
	<input type="text" name="address2" placeholder="ADRESS LINE 2" required><br>
</label><br>
<label>DOB<br>
	<input type="text" name="month" placeholder="MONTH" required>
	<input type="text" name="date" placeholder="DATE" required>
	<input type="text" name="year" placeholder="YEAR" required><br>
</label><br>
<label>PREVIOUS SCHOOL<br>
	<input type="text" name="preschool" placeholder="PREVIOUS SCHOOL" required><br>
</label><br>
<label>ADDHAR NUMBER<br>
	<input type="text" name="addhar" placeholder="ADDHAR NUMBER" required><br>
</label><br>
<label>FROM WHERE U KNOW ABOUT THIS SITE<br>
	<input type="text" name="ref" placeholder="FROM WHERE U KNOW ABOUT THIS SITE" required><br>
</label><br>
	<input class="btn" type="submit" value="SUBMIT">
	
</form>
</div>
</body>
</html>