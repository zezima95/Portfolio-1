<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
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
<div class="navbar" >
  <a href="index.php">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Lets Practice!
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="quiz1.php">Exercise 1</a>
    </div>

  </div> <!-- end of dropdown for Lets Practice!-->
  <div class="dropdown">
    <button class="dropbtn">Learning Content 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="userlearning.php">Lesson 1</a>
    </div>

  </div> <!-- End of dropdown for Learning Content-->
    <a href="upload1.html">Upload</a>
  <a href="download">Downloads</a>

        <div style="float: right;">
    	<a href="home.php?logout='1'" style="color: white;">Logout <?php echo ucfirst($_SESSION['user']['username']); ?></a>
    </div> 
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
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<?php echo "Welcome back! ";?><strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>