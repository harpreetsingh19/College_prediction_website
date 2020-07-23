<!DOCTYPE html>
<html>
<head>
	<title>Adding cutoff</title>
	<style type="text/css">
		
		body{
			margin: 0;
			padding: 0;
			background:url(bg.jpg);
			background-size: cover;
		}
		.main{
			position: absolute;
			width: 30%;
			top: 20%;
			left: 30%;
			background:rgba(0,0,0,0.2);
			font: white;
			padding: 10%;
			border-radius: 2%;
		}
		input{
		width:80%;
		background: none;
		border: none;
		border-bottom: 1px grey;
		color:white;
		padding: 2px;
		padding-left: 5%;
		font-size: 14px;
		cursor: pointer;
		margin: 12px 0;
		}
	</style>
</head>
<body>
<div class="main">
<form method="post" action="addcut_db.php">

		<label for="cname" class="others">COLLEGE NAME</label><br>
		<input type="text" name="cname" placeholder="COLLEGE NAME" required><br>
		<label for="stream" class="others">STREAM</label><br>
		<input type="text" name="stream" placeholder="STREAM" required><br>
		<label for="marks" class="others">CUTOFF</label><br>
		<input type="text" name="marks" placeholder="CUTOFF MARKS" required>
		<input type="submit" value="SUBMIT">
	
	
</form>
</div>
</body>
</html>