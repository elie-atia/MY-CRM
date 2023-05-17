<!DOCTYPE html>
<html>
<head>
  <title>Send Mail</title>
  <!-- Inclure les fichiers CSS pour l'en-tête et la page d'accueil -->
  <link rel="stylesheet" type="text/css" href="/public/assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="/public/assets/css/home.css">

<script src="/public/assets/js/jquery-3.6.4.js"></script>
</head>

<body class="bg-image">
<?php 
include_once __DIR__ . '/header.php';
?>


  
  

<div id="myModal" class="modal">
  <div class="modal-content">
        <a class="modal-button" href="/public/index.php/send-mail?company_id=1">Send Mail</a>
        <a class="modal-button" href="/public/index.php/see-interaction?company_id=1">See Interactions</a>
        <button class="close">Close</button>
  </div>
</div>



</body>
</html>

