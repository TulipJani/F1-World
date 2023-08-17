<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(array('error' => 'Method not allowed'));
  exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if (empty($data['email'])) {
  http_response_code(400);
  echo json_encode(array('error' => 'Email is required'));
  exit;
}

// Perform any additional validation here (e.g., email format)

// Simulate a successful subscription
$response = array('success' => true);

echo json_encode($response);
?>
