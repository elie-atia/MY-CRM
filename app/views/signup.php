<?php 
include_once __DIR__ . '/header.php';
?>

<div class="container">
    <form id="signup-form" action="/app/controllers/SignupController.php" method="post">
        <h2>Signup</h2>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>

    
</div>



