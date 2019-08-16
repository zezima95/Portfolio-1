<?php
/**
* Simple PHP CRUD Script
* Developed by TutorialsClass.com
* URL:  http://tutorialsclass.com/code/php-simple-crud-application
**/

// Create database connection using config file
include_once("functions.php");

// Fetch all users data from database
$resultClass = mysqli_query($db, "SELECT * FROM class_details ORDER BY class_id DESC");

?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>

    <a href="addClass.php">Add New Class</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Class Name</th> <th>Class Description</th> <th>Update</th>
    </tr>
    <?php  
    while($class_data = mysqli_fetch_array($resultClass)) {         
        echo "<tr>";
        echo "<td>".$class_data['classname']."</td>";
        echo "<td>".$class_data['class_description']."</td>";    
        echo "<td><a href='editClass.php?class_id=$class_data[class_id]'>Edit</a> | <a href='deleteClass.php?class_id=$class_data[class_id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>



</body>
</html>
