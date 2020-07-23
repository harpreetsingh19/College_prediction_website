<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url(bg.jpg);
			font-family: sans-serif;
		}
		.links{
			position: absolute;
			top: 10%;
			left: 40%;
		}
		a:link {
		  	color: red;
		}

		a:visited {
  			color: yellow;
		}

		a:hover {
  			color: hotpink;
		}

		a:active {
  			color: blue;
		}
		.form{
			position: absolute;
			width: 30%;
			top: 20%;
			left: 30%;
			background:rgba(0,0,0,0.2);
			font: white;
			padding: 2%;
            padding-right: 6%;
			border-radius: 2%;
			

		}
		input{
			width:95%;
			border:none;
			background:none;
			padding: 1%;
			font: grey;
			font-size: 16px;
			color: #dff5bc;
			border-bottom: 1px dashed white;
		}
		.others{
			padding: 2%;
			color: white;
		}
		.others1{
			padding: 2%;
			color: white;
		}
		
	</style>
</head>
<body>
	<div class="links">
	<a  href="admin_page.php">ADD COLLEGE </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a  href="addcut.php">ADD CUTOFF </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a  href="veiwcol.php">VEIW COLLEGE </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a  href="http://localhost/phpmyadmin/sql.php?server=1&db=student-adm&table=stu_registration&pos=0">VEIW STUDENT DEtAILS </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a  href="veiwfeedback.php">VEIW FEEDBACK</a>
</div>

<div class="form">
<form method="get" action="add_col.php"> 
<label for="cname" class="others">College Name</label><br>
<input type="text" name="cname" size="50">
<br><br>
<label for="addr" class="others">Address</label><br>
<input type="text" name="addr" size="50">
<br><br>
<label for="city" class="others">City</label><br>
<input type="text" name="city" size="50">
<br><br>
<label for="zip" class="others">ZIP Code</label><br>
<input type="text" name="zip" size="50">
<br><br>
<label for="cno" class="others">Contact Number</label><br>
<input type="text" name="cno" size="50">
<br><br>
<label for="cut" class="others">CUT OFF MARKS</label><br>
<input type="text" name="cut" size="50">
<br><br>

<label for="STREAM" class="others">STREAM</label><br><br>

<label for="chemical" class="others1">Chemical Engineering</label><br>
<input type="checkbox" name="ch1[]" value="chemical">
<br>
<label for="civil" class="others1">Civil Engineering</label><br>
<input type="checkbox" name="ch1[]" value="civil">
<br>
<label for="electrical" class="others1">Electrical Engineering</label><br>
<input type="checkbox" name="ch1[]" value="electrical">
<br>
<label for="mechanical" class="others1">Mechanical Engineering</label><br>
<input type="checkbox" name="ch1[]" value="mechanical">
<br>
<input type="submit" value="SUBMIT" class="button">
</form>
</div>

</body>
</html>