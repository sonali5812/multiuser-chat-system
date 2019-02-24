<!DOCTYPE HTML>
<head>
	<title>
		WebChat
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<DIV id="main">
		<div id="info">
			<h2>LOGIN HERE</h2>
			<FORM action="login.php" method="post">
				<label><b>user name</b></label>
				<input type="text" name="uname" placeholder="User name"><br><br>
				<label><b>password</b></label>
				<input type="text" name="pass" placeholder="Password"><br><br>
				<button style="background-color: red;color:white" type="submit"><b>Login</b></button>


			</FORM>
			<FORM action="signup.php" method="post">
				<h2>DON'T HAVE A ACCOUNT SIGN UP HERE</h2>
				<label><b>user name :</b></label>
				<input type="text" name="uname" placeholder="User name"><br><br>
				<label><b>email address: :</b></label>
				<input type="text" name="email" placeholder="email"><br><br>
				<label><b>password:</b></label>
				<input type="text" name="password" placeholder="Password"><br><br>
				<button style="background-color: red;color:white" type="submit"><b>sign up</b></button>

			</FORM>
		</div>
	</DIV>

	</body>
</html>