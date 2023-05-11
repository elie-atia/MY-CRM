<?php 
include_once __DIR__ . '/header.php';
?>
<script src="/public/assets/js/jquery-3.6.4.js"></script>
<div class="container">
<h2>CRM System</h2>
    <form id="contact-form" action="/app/controllers/ContactController.php" method="post">
      
    <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br>
        <label for="company">Company:</label><br>
        <input type="text" id="company" name="company"><br>
        <input type="submit" value="Submit">
    </form>
    <table id="contact-table">
        <!-- Contacts will be dynamically populated here -->
    </table>
    <script src="/public/assets/js/home.js"></script>
</div>

   

