<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Youtube Connect</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="navbar">
		<img src="logo.png" id="logo">
		<nav>
			<a href="home.php" class="link">home</a>
			<a href="buy.php" class="link">buy</a>
			<a href="giveaway.php" class="link">giveaway</a>
			<a href="login.php" class="link">register/login</a>
		</nav>
	</div>
	<div id="loginform">
		<div id="logincontainer">
			<h1>Sign in</h1>
			<form action="profile.php" method="post">
			<p>Username: <br><input type="text" name="username" required></p>
			<p>Password: <br><input type="text" name="password" required></p>
			<input type="submit" value="Sign in">
		</div>
	</div>
</body>
</html>