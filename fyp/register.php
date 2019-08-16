<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		<?php include 'D:/Wamp/www/fyp/css/style.css'; ?>
	</style>
		<title>Registration system PHP and MySQL</title>
			<style>
	.header1 {
		background: rgba(0,0,0,0.8);
	}
	button[name=register_btn] {
		background: rgba(244, 194, 66,0.8);
	</style>
</head>
<body>
<div class="header1" style="width: 30%">
	<h2>Welcome to Registration Page</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn" style="color: black;">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>