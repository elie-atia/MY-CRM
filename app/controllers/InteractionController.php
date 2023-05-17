<?php
require_once __DIR__ . '/../../config/database/db.php';
require_once __DIR__ . '/../models/Interaction.php';

$InteractionModel = new Interaction($conn);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
    if(isset($_GET['user_id'])) {
      $user_id = $_GET['user_id'];
      $result = $InteractionModel->getInteractionOfUser($user_id);
      $interactions = array();
      while($row = mysqli_fetch_assoc($result)) {
        $interactions[] = $row;
      }
      echo json_encode($interactions);
  }
    break;

  case 'POST':
    $interaction_type = $_POST['type'];
    $interaction_date = $_POST['date'];
    $notes = $_POST['notes'];
    $company_id = $_POST['company_id'];
    $user_id = $_POST['user_id'];

    if ($InteractionModel->createInteraction($interaction_type, $interaction_date, $notes, $company_id, $user_id)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $conn->error;
    }
    break;

  case 'PUT':
    parse_str(file_get_contents("php://input"),$_PUT);
    $id = $_PUT['id'];
    $name = $_PUT['name'];
    $email = $_PUT['email'];
    $phone = $_PUT['phone'];
    $company = $_PUT['company'];

    if ($contactModel->updateContact($id, $name, $email, $phone, $company)) {
      echo "Record updated successfully";
    } else {
      echo "Error: " . $conn->error;
    }
    break;

  case 'DELETE':
    parse_str(file_get_contents("php://input"),$_DELETE);
    $id = $_DELETE['id'];

    if ($contactModel->deleteContact($id)) {
      echo "Record deleted successfully";
    } else {
      echo "Error: " . $conn->error;
    }
    break;
}

$conn->close();
?>
