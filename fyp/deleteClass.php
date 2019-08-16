<?php
// include database connection file
include_once("functions.php");

// Get id from URL to delete that user
$class_id = $_GET['class_id'];

// Delete user row from table based on given id
$resultClass = mysqli_query($db, "DELETE FROM class_details WHERE class_id=$class_id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:viewClass.php");
?>

