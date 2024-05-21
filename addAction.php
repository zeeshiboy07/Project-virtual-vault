<html>
<head>
	<title>Added data</title>
	<style>
		body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

h1, p {
    color: #ff6347; /* Tomato color */
    text-shadow: 2px 2px #ffa07a; /* Light salmon shadow */
    text-align: center;
}

a {
    text-decoration: none;
    color: white;
    display: inline-block;
    padding: 10px 20px;
    background-color: #3498db;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    margin-top: 20px;
}

a:hover {
    background-color: #2980b9;
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
}

font {
    font-size: 1.2em;
    margin: 10px 0;
    display: block;
    text-align: center;
}

p {
    font-size: 1.5em;
    margin: 20px 0;
}

	</style>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='crud.php'>View Result</a>";
	}
}
?>
</body>
</html>
