<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background:url(bg.jpg);
			background-size: cover;
		}
		.home{
			position: absolute;
			top: 20%;
			left: 5%;
			height:16%;
			border-radius:20%;
		}
		.admin{
			position: absolute;
			top:40%;
			left:5%;
			height:16%;
			border-radius:20%;
		}
		.student{
			position: absolute;
			top: 60%;
			left: 5%;
			height:16%;
			border-radius:20%;
		}
		.info{
			position: absolute;
			top: 80%;
			left: 5%;
			height:16%;
			border-radius:20%;
		}
		.one{
			position: absolute;
			top:25%;
			left: 15%;
			color: white;
		}
		.two{
			position: absolute;
			top:45%;
			left: 15%;
			color: white;
		}
		.three{
			position: absolute;
			top:65%;
			left: 15%;
			color: white;
		}
		.four{
			position: absolute;
			top:85%;
			left: 15%;
			color: white;
		}
		.head{
			position: absolute;
			top: 10%;
			left: 30%;
			color: #ccebe1;
		}
		.main{
			width: 45%;
			position: absolute;
			top: 40%;
			left:25%;
			background:rgba(0,2,0,0.3);
			border-radius: 4%;
		}
		input{
		width:80%;
		background: none;
		border: none;
		border-bottom: 1px grey;
		color:white;
		padding: 5px;
		padding-left: 1%;
		font-size: 14px;
		cursor: pointer;
		margin: 12px 0;
		}


	</style>
</head>
<body>

	<h1 class="head">Admin Login</h1>
	
	<form method="post" action="admin_db.php">
		<div class="main">
		<input  type="text" placeholder="username" name="ad_user" required><br>
		<input type="password" placeholder="passowrd" name="ad_pass" required><br>
		<input type="submit" value="SIGN IN">
		</div>
	</form>



	<a href="admin.php"><img class="admin" src="index.png"></a>
	<a href="student.php"><img class="student" src="s.jpg"></a>
	<a href="information.php"><img class="info "src="info.png"></a>
	<a href="first_page.php"><img  class="home" src="h.jpg"></a>

	<h2 class="one">HOME</h2>
	<h2 class="two">ADMIN</h2>
	<h2 class="three">STUDENT</h2>
	<h2 class="four">ABOUT US</h2>




</body>
</html>