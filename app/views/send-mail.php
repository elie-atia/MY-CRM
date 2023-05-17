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
        <select class="select">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
    </div>
    
    <div class="container-mail-content">
        <div class="mail-content">
            <p>hellohellohellohellohellohello</p>
            <p>hellohellohellohellohellohello</p>

            <p>hellohellohellohellohellohello</p>

            <p>hellohellohellohellohellohello</p>

        </div>
        <button class="button">Send Mail </button>
    </div>

</div>



</body>
</html>

