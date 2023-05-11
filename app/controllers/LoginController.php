<?php
require_once __DIR__ . '/../../config/database/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    // Verify the password
    if (password_verify($password, $user['password'])) {
        // Password is correct, start the session and save the user ID in the session
        session_start();
        $_SESSION['user_id'] = $user['id'];
        echo "Login successful";
    } else {
        // Password is not correct
        echo "Invalid username or password";
    }
} else {
    // User does not exist
    echo "Invalid username or password";
}


$conn->close();
?>
