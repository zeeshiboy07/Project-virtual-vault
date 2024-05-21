<?php
session_start();
include("add_to_cart.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 100pxpx;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product {
            width: 35%;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .product-details {
            padding: 20px;
            text-align: center;
        }

        .product h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .product p {
            margin-bottom: 10px;
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            margin-bottom: 15px;
        }

        .add-to-cart {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-to-cart:hover {
            background-color: #0056b3;
        }

        .image-divider {
            width: 48%;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-divider img {
            width: 100%;
            height: 40vh;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 550px) {
            .product, .image-divider {
                width: 100%;
            }
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="product">
            <div class="product-details">
                <img src="images/art1.jpg" alt="Product 1">
                <h2>Product 1</h2>
                <p>Description of Product 1.</p>
                <p>$19.99</p>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="product_name" value="Product 1">
                    <input type="hidden" name="description" value="Description of Product 1.">
                    <input type="hidden" name="price" value="19.99">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <div class="product-details">
                <img src="images/art2.jpg" alt="Product 2">
                <h2>Product 2</h2>
                <p>Description of Product 2.</p>
                <p>$29.99</p>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="product_name" value="Product 2">
                    <input type="hidden" name="description" value="Description of Product 2.">
                    <input type="hidden" name="price" value="29.99">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <div class="product-details">
                <img src="images/art3.jpg" alt="Product 3">
                <h2>Product 3</h2>
                <p>Description of Product 3.</p>
                <p>$39.99</p>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="product_name" value="Product 3">
                    <input type="hidden" name="description" value="Description of Product 3.">
                    <input type="hidden" name="price" value="39.99">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <div class="product-details">
                <img src="images/art4.jpg" alt="Product 4">
                <h2>Product 4</h2>
                <p>Description of Product 4.</p>
                <p>$49.99</p>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="product_name" value="Product 4">
                    <input type="hidden" name="description" value="Description of Product 4.">
                    <input type="hidden" name="price" value="49.99">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="image-divider">
            <img src="images/download.jpeg" alt="Divider Image">
        </div>

        <div class="product">
            <div class="product-details">
                <img src="images/art5.jpg" alt="Product 5">
                <h2>Product 5</h2>
                <p>Description of Product 5.</p>
                <p>$59.99</p>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="product_name" value="Product 5">
                    <input type="hidden" name="description" value="Description of Product 5.">
                    <input type="hidden" name="price" value="59.99">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
