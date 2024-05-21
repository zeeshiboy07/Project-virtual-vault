<?php
// Handle form submission for new messages
if (isset($_POST['submit'])) {
    $user_msg = mysqli_real_escape_string($mysqli, $_POST['user_msg']);
    $query = "INSERT INTO history (user_msg) VALUES ('$user_msg')";
    if (mysqli_query($mysqli, $query)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}

// Handle form submission for showing history
if (isset($_POST['show_history'])) {
    $query = "SELECT * FROM history ORDER BY created_at DESC";
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<div id='chat-box'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p><strong>" . htmlspecialchars($row['created_at']) . ":</strong> " . htmlspecialchars($row['user_msg']) . "</p>";
        }
        echo "</div>";
    } else {
        echo "No chat history available.";
    }
}
?>
