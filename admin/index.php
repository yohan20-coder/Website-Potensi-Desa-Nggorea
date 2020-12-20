<!DOCTYPE html>
<html>
<head>
	<title>Login Administrator</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
   	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="container">	
	<form method="post" action="ceklogin.php">
		<h3 align="center">Login Administrator</h3>
 		<input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br>
 		<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
		<br>
		<button class="btn btn-primary btn-block" type="submit">Log in</button>
	</form>
	</div>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>