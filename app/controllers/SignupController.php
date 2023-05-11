<?php
require_once __DIR__ . '/../../config/database/db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Validate the inputs
if (empty($username) || empty($password) || empty($email)) {
    echo "Username, password and email are required!";
    exit();
}

// Check if the username or email already exists
$sql = "SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $username, $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    echo "Username or email already exists!";
    exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the new user into the database
$sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $username, $hashed_password, $email);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
