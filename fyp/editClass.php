<?php
// include database connection file
include_once("functions.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$class_id = $_POST['class_id'];
	
	$classname=$_POST['classname'];
	$class_description=$_POST['class_description'];

		
	// update user data
	$resultClass = mysqli_query($db, "UPDATE class_details SET classname='$classname',class_description='$class_description' WHERE class_id=$class_id");
	
	// Redirect to homepage to display updated user in list
	header("Location: viewClass.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$class_id = $_GET['class_id'];

// Fetech user data based on id
$resultClass = mysqli_query($db, "SELECT * FROM class_details WHERE class_id=$class_id");

while($class_data = mysqli_fetch_array($resultClass))
{
	$classname = $class_data['classname'];
	$class_description = $class_data['class_description'];

}
?>
<html>
<head>	
	<title>Edit Class Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="editClass.php">
		<table border="0">
			<tr> 
				<td>Class Name</td>
				<td><input type="text" name="classname" value=<?php echo $classname;?>></td>
			</tr>
			<tr> 
				<td>Class Description</td>
				<td><input type="text" name="class_description" value=<?php echo $class_description;?>></td>
			</tr>

				<td><input type="hidden" name="class_id" value=<?php echo $_GET['class_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

