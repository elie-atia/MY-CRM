


<!DOCTYPE html>
<html>
<head>
    <title>My CRM</title>
    <link rel="stylesheet" type="text/css" href="/public/assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/public/index.php/">Home</a></li>
                <?php
                session_start();  // Start the session
                if (isset($_SESSION['user_id'])) {
                    // If the user is logged in, display their name and a logout link
                    echo '<li>Welcome, ' . htmlspecialchars($_SESSION['username']) . '</li>';
                    echo '<li><a href="/public/index.php/logout">Logout</a></li>';
                } else {
                    // If the user is not logged in, display the Signup and Login links
                    echo '<li><a href="/public/index.php/signup">Signup</a></li>';
                    echo '<li><a href="/public/index.php/login">Login</a></li>';
                }
                ?>

            </ul>
        </nav>  
    </header>
</body>
</html>

