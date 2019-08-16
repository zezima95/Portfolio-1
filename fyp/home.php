<?php include('functions.php');


if (!isAdmin()) {
	$_SESSION["msg"] = "You must log in first";
	echo $_SESSION["msg"];
	header('location: login.php');
	exit();
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
		<?php include 'D:/Wamp/www/fyp/css/style.css'; ?>
	</style>
	<style>
	.header {
		background: rgba(0,0,0,0.8);
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>

<!-- NAVBAR PALING ATAS -->
<div class="navbar">
  <a href="home.php">Home</a>

      <a href="upload.html">Upload</a>
      <a href="downloads">Downloads</a>
            <div style="float: right;">
    	<a href="home.php?logout='1'" style="color: white;">Logout <?php echo ucfirst($_SESSION['user']['username']); ?></a>
    </div> 
  </div> <!-- End of dropdown for Learning Content-->


</div>
<!--END OF NAVBAR PALING ATAS-->
	<div class="header" style="width: 30%">
		<h2>Kadazandusun E - Learning System</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/web/profile1.png">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<?php echo "Welcome back! ";?><strong><?php echo $_SESSION['user']['username']; ?></strong>

						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>

					<small> 
						<br>
						<br>
						<br>
						<br>
                      <a href="create_user.php">Register New User / Register New Admin</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>