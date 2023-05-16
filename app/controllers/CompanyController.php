<?php
require_once __DIR__ . '/../../config/database/db.php';
require_once __DIR__ . '/../models/Company.php';

$CompanyModel = new Company($conn);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
    if(isset($_GET['user_id'])) {
      $user_id = $_GET['user_id'];
      $result = $CompanyModel->getAllUserCompanies($user_id);
      $row = mysqli_fetch_assoc($result);
      echo json_encode($row);
    }
    break;

  case 'POST':
    $company_name = $_POST['company_name'];
    $city = $_POST['city'];
    $sector = $_POST['sector'];
    $email = $_POST['email'];
    $creation_date = $_POST['creation_date'];
    $user_id = $_POST['user_id'];

    if ($CompanyModel->createCompany($company_name, $city, $sector,$email,$creation_date,$user_id)) {
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
