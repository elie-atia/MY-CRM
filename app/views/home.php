<?php 
include_once __DIR__ . '/header.php';
$user_id = $_SESSION['user_id'];
?>
<script src="/public/assets/js/jquery-3.6.4.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var creationDateField = document.getElementById('creation_date');
        var currentDate = new Date();
        var formattedDate = currentDate.toISOString().split('T')[0];
        creationDateField.value = formattedDate;
    });
</script>
<div class="container">
<h2>CRM System</h2>
    <form id="company-form" action="/app/controllers/CompanyController.php" method="post">
      
        <label for="company_name">Company Name:</label><br>
        <input type="text" id="company_name" name="name"><br>

        <label for="city">City:</label><br>
        <input type="text" id="city" name="email"><br>

        <label for="sector">Sector:</label><br>
        <input type="text" id="sector" name="sector"><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>

        <label for="creation_date">Creation date:</label><br>
        <input type="text" id="creation_date" name="creation_date" readonly><br>

        <label for="user_id">User id:</label><br>
        <input type="text" id="user_id" name="user_id" value="<?php echo $user_id; ?>"><br>

        <input type="submit" value="Submit">
    </form>
    <table id="contact-table">
        <!-- Contacts will be dynamically populated here -->
    </table>
    <script src="/public/assets/js/home.js"></script>
</div>

   

