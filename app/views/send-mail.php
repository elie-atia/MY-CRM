<!DOCTYPE html>
<html>
<head>
  <title>Send Mail</title>
  <!-- Inclure les fichiers CSS pour l'en-tête et la page d'accueil -->
  <link rel="stylesheet" type="text/css" href="/public/assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="/public/assets/css/send-mail.css">

<script src="/public/assets/js/jquery-3.6.4.js"></script>
</head>

<body class="bg-image">
<?php 
include_once __DIR__ . '/header.php';
?>


<div class="container">

    <div class="container-select">
        Type of Mail: 
        <select id="mail-select" class="mail-select">
        </select>
    </div>
    
    <div class="container-mail-button">
        <div class="container-mail">

            <div id="email-heading-subject" class="email-heading">
                <span class="email-subject">Subject:</span> <span class="email-body"></span>
            </div>

            <div class="email-heading">
                <span class="email-subject">To:</span> <span class="email-body">blablabla</span>
            </div>

            <div class="email-heading">
                <span class="email-subject">Content:</span> 
            </div>
            <div class="email-body-content"></div>
        </div>

        <a class="button" href="/">Send Mail </a>
    </div>

</div>


<script src="/public/assets/js/send-mail.js"></script>

</body>
</html>

