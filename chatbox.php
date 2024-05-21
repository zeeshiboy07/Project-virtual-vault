

<?php
    include 'dbConnection.php';
    include 'chat_handler.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Chatbox</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        #chat-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 5px;
            overflow-y: auto;
            height: 100px;
        }

        #chat-box p {
            margin: 5px 0;
        }

        form {
            text-align: center;
        }

        input[type="text"] {
            width: 20%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            border: none;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Bot Chatbox of Virtual Vault</h1>
    <button onclick="window.location.href='index.html'">Back to home</button>

    <form method="post">
        <label for="user_msg">Enter your message:</label><br>
        <input type="text" id="user_msg" name="user_msg" required><br><br>
        <button type="submit" name="submit">Send</button>
    </form>

    <form method="post">
        <button type="submit" name="show_history">Show History</button>
    </form>

    
</body>
</html>
