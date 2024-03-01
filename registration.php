<?php
session_start();
if (isset($_SESSION["user"])) {
	header("Location: Dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Registration Form</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	
		<form action="process.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="fullname" placeholder="Full Name:">
			</div>
			<div class="form-group">
				<input type="email"  class="form-control" name="email" placeholder="Email:">
			</div>
			<div class="form-group">
				<input type="password"  class="form-control" name="password" placeholder="Password:">
			</div>
			<div class="form-group">
				<input type="password"  class="form-control" name="repeat_password" placeholder="Repeat password:">
			</div>
				<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Register" name="submit">
			</div>

		</form>
		<div><p>Having an account <a href="login.php">Login Here</a></p></div>
	</div>

</body>
</html>


