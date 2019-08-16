<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<style>
		<?php include 'D:/Wamp/www/fyp/css/style.css'; ?>
	</style>
	<style>
		.header1 {
			background: rgba(0,0,0,0.8);
		}
		button[name=register_btn] {
			background: rgba(244, 194, 66,0.8);
		}
		button[name=back-button]{
			background: white;
			border: .05px;
			border-radius:8px;

			

		}

	</style>
</head>
<body>

	<div class="header1" style="width: 30%">
		<h2>User Registration / Admin Registration</h2>
	</div>
	
	<form method="post" action="create_user.php">

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
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
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
			<button type="submit" class="btn" name="register_btn" style="color: black;"> Register User / Register Admin</button>
			<button  type="submit" class="btn" style= "float: right;" name="back-button" style="color: white"><a style="color: red" href="home.php">Back</a></button>

		</div>
		
	</form>
</body>
</html>