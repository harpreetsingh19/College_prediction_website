<!DOCTYPE html>
<html>
<head>
	<title>PORTAL</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background:url(bg.jpg);
			font-family: sans-serif;
		}
		.vc{
			position: absolute;
			top: 20%;
			left: 10%;
			font size:120%;
			color: white;

		}
		.main{
			position: absolute;
			top: 20%;
			left: 40%;
			color: white;
			font size:120%;
			padding: 5%;
			background:rgba(0,0,100,0.4);
			border-radius: 3%;
		}
		.main2{
			position: absolute;
			top: 20%;
			left: 70%;
			color: white;
			font size:120%;
			padding: 5%;
			background:rgba(0,0,100,0.4);
			border-radius: 3%;
		}
		.main3{
			position: absolute;
			top: 65%;
			left: 20%;
			color: white;
			font size:100%;
			padding: 1%;
			background:rgba(0,250,0,0.4);
			border-radius: 3%;
			width :50%;
		}
		input{
			width:70%;
			border:none;
			background:rgba(0,0,200,0.1);
			padding: 3%;
			font: grey;
			font-size: 100%;
			color: white;
			
		}
		.textarea{
			border-style: solid #ffffff;
			opacity: 70%;
		}
		.ig{
			position: absolute;
			height: 1000%;
		}


	</style>
</head>
<body>
<div class="vc">
<a href="veiwcollege.php"> <img class="ig" src="colleges-icon.png"> </a><br>
</div>

<div class="main">
	<form action="cut_display.php" method="post">
		<label>MARKS<br><br><br>
		<input type="text" name="marks" placeholder="MARKS" required><br><br>
		<input type="submit" value="SUBMIT">
		</label>
	</form>
</div>

<div class="main2">
	<form action="details.php" method="post">
	<label>USERNAME<br><br><br>
	<input type="text" name="username" placeholder="USERNAME" required><br><br>
	</label>
	<input type="submit" value="GET UR DATA">		
	</form>
</div>

<div class="main3">
	<form action="feedback.php" method="post">
	<label>WRITE SOMETHING YOU WANT US TO IMPROVE THAT WILL BE HIGHLY APPRICIATED<br><br><br>
	<input  class="textarea" type="textarea" name="feedback" placeholder="CLICK HERE" required><br><br>
	</label>
	<input type="submit" value="SUBMIT">		
	</form>
</div



</body>
</html>