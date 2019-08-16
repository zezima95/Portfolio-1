<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<style>
		<?php include 'D:/Wamp/www/fyp/css/style.css'; ?>
	</style>
	<style>
	.header {
		background: rgba(0,0,0,0.8);
	}
	button[name=login_btn] {
		background: rgba(244, 194, 66,0.8);
	</style>
</head>
<body>
	<div class="header" style="width: 30%">
		<h2>Welcome to Kadazandusun E-Learning System</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn" style="color: black;">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>