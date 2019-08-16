<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="viewClass.php">Go to Home</a>
	<br/><br/>

	<form action="addClass.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Class Name</td>
				<td><input type="text" name="classname"></td>
			</tr>
			<tr> 
				<td>Class Description</td>
				<td><input type="text" name="class_description"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$classname = $_POST['classname'];
		$class_description = $_POST['class_description'];
		
		// include database connection file
		include_once("functions.php");
				
		// Insert user data into table
		$resultClass = mysqli_query($db, "INSERT INTO class_details(classname,class_description) VALUES('$classname','$class_description')");
		
		// Show message when user added
		echo "class added successfully. <a href='viewClass.php'>View Users</a>";
	}
	?>
</body>
</html>
