<?php 
include_once __DIR__ . '/header.php';
?>
<div class="container">
<form id="login-form">
        <h2>Login</h2>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Login">
    </form>
</div>

<script src="/public/assets/js/jquery-3.6.4.js"></script>
<script src="/public/assets/js/login.js"></script>


