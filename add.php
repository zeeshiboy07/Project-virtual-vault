<html>
<head>
	<title>Virtual Vault</title>
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

h1, h2 {
    color: purple;
    text-shadow: 2px 2px #ffa07a; 
}

h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
}

h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

p {
    margin-bottom: 20px;
}

a {
    text-decoration: none;
    color: white;
    display: inline-block;
    padding: 15px 30px;
    background-color: #3498db;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

a:hover {
    background-color: #2980b9;
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 10px;
    vertical-align: middle;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

</style>

	
</head>

<body>
	<h1>Virtual Vault</h1>
	<h2>Add Data</h2>
	<p>
		<a href="crud.php">Back</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

