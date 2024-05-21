<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "ecommerce"; // your database name
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the product details from the form
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO products (product_name, description, price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $product_name, $description, $price);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "Product added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    // Handle the case when the form has not been submitted
    echo "Form not submitted";
}
?>
