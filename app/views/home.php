<?php 
include_once __DIR__ . '/header.php';
?>
<script src="/public/assets/js/jquery-3.6.4.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var creationDateField = document.getElementById('creation_date');
        var creationDateField2 = document.getElementById('date');
        var currentDate = new Date();
        var formattedDate = currentDate.toISOString().split('T')[0];
        creationDateField.value = formattedDate;
        creationDateField2.value = formattedDate;
    });
</script>
<div class="container">
<h2>CRM System</h2>
<div style="display: flex;">
  <!-- Première moitié de l'écran -->
  <div style="flex: 1;">
    <form id="company-form" action="/app/controllers/CompanyController.php" method="post">
      
        <label for="company_name">Company Name:</label><br>
        <input type="text" id="company_name" name="company_name"><br>

        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"><br>

        <label for="sector">Sector:</label><br>
        <input type="text" id="sector" name="sector"><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>

        <label for="creation_date">Creation date:</label><br>
        <input type="text" id="creation_date" name="creation_date" readonly><br>

        <label for="user_id">User id:</label><br>
        <input type="text" id="user_id" name="user_id" value="<?php 
        if (isset($_SESSION['user_id']))
            echo $_SESSION['user_id'];
         ?>"><br>

        <input type="submit" value="Submit">
    </form> 
    <table id="company-table">
        <!-- companies will be dynamically populated here -->
    </table>
    </div>

  <!-- Deuxième moitié de l'écran -->
  <div style="flex: 1;">
  <form id="mail-form" action="/app/controllers/MailController.php" method="post">
      
      <label for="type">Type:</label><br>
      <input type="text" id="type" name="type"><br>

      <label for="subject">Subject:</label><br>
      <input type="text" id="subject" name="subject"><br>

      <label for="content">Content:</label><br>
      <input type="text" id="content" name="content"><br>

      <input type="submit" value="Submit">
  </form> 
  <table id="mail-table">
      <!-- mail will be dynamically populated here -->
  </table>
</div>

</div>

<div style="display: flex; padding-top: 20px;">
<div style="flex: 1;">
  <form id="interaction-form" action="/app/controllers/InteractionController.php" method="post">
      
      <label for="type">Interaction Type:</label><br>
      <input type="type" id="type" name="type"><br>

      <label for="date">Interaction Date:</label><br>
      <input type="text" id="date" name="date"><br>

      <label for="notes">Notes:</label><br>
      <input type="notes" id="notes" name="notes"><br>
      
      <label for="user_id">User Id:</label><br>
      <input type="user_id" id="user_id" name="user_id" value="<?php 
        if (isset($_SESSION['user_id']))
            echo $_SESSION['user_id'];
         ?>"><br>

      <label for="company_id">Company Id:</label><br>
      <input type="company_id" id="company_id" name="company_id"><br>

      <input type="submit" value="Submit">
  </form> 
  <table id="interaction-table">
      <!-- mail will be dynamically populated here -->
  </table>
</div>
    </div>
        <script type="text/javascript">
            var user_id = "<?php echo $_SESSION['user_id']; ?>";
        </script>
        <script src="/public/assets/js/home.js"></script>
    </div>

   

