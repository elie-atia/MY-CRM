<?php
require_once __DIR__ . '/../../config/database/db.php';
require_once __DIR__ . '/../models/User.php';

$userModel = new User($conn);

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Validate the inputs
if (empty($username) || empty($password) || empty($email)) {
    echo "Username, password and email are required!";
    exit();
}

// Check if the username or email already exists
$result = $userModel->checkAlreadyExist($username,$email);
$user = $result->fetch_assoc();

if ($user) {
    echo "Username or email already exists!";
    exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the new user into the database
$result = $userModel->createUser($username,$hashed_password, $email);

if ($result > 0) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
