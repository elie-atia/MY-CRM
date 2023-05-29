<?php
// Commencez la session PHP pour accéder aux variables de session.
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>My CRM</title>
    <link rel="stylesheet" type="text/css" href="/public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/header.css">
</head>
<body>
    <header>
        <div class="header">
            <a class="site-name" href="/public/">CRM</a>
            
            <?php if (isset($_SESSION['user_id'])): ?>
            <a class="logout" href="/public/logout">Logout</a>
            <?php endif; ?>
        </div>
    </header>
</body>
</html>

