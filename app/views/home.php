<!DOCTYPE html>
<html>
<head>
  <title>Accueil</title>
  <!-- Inclure les fichiers CSS pour l'en-tête et la page d'accueil -->
  <link rel="stylesheet" type="text/css" href="/public/assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="/public/assets/css/home.css">

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
</head>

<body class="bg-image">
<?php 
include_once __DIR__ . '/header.php';
?>
<div class="banner">
    Welcome to your CRM. Choose to login or sign-up in order to begin!
</div>

  <div class="buttons">
    <a class="button" href="/public/index.php/login">Login</a>
    <a class="button" href="/public/index.php/signup">Signup</a>
  </div>
  <?php if (isset($_SESSION['user_id'])): ?>
  <div class="table-container">
    <table class="full-width-table">
    <tr>
        <th>Company Name</th>
        <th>City</th>
        <th>Email</th>
        <th>Sector</th>
        <th>Creation date</th>
        <th>Action</th>
        <!-- Plus de th pour chaque en-tête de colonne que vous voulez -->
    </tr>
    <tr>
        <td>Data 1</td>
        <td>Data 2</td>
        <td>Data 3</td>
        <td>Data 1</td>
        <td>Data 2</td>
        <td><button class="action-button">🔍</button></td>

        <!-- Plus de td pour chaque cellule de données que vous voulez -->
    </tr>
    <tr>
        <td>Data 4</td>
        <td>Data 5</td>
        <td>Data 6</td>
        <td>Data 1</td>
        <td>Data 2</td>
        <td><button class="action-button">🔍</button></td>
        <!-- Plus de td pour chaque cellule de données que vous voulez -->
    </tr>
    <!-- Plus de tr pour chaque ligne que vous voulez -->
    </table>
</div>
<?php endif; ?>

<div id="myModal" class="modal">
  <div class="modal-content">
        <a class="modal-button" href="/public/index.php/send-mail?company_id=1">Send Mail</a>
        <a class="modal-button" href="/public/index.php/see-interaction?company_id=1">See Interactions</a>
        <button class="close">Close</button>
  </div>
</div>


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
</body>
</html>

