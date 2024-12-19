<?php
session_start();

require_once '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User  not logged in.']);
    exit();
}

$rfq_id = isset($_POST['project']) ? intval($_POST['project']) : 0;
$project_location = isset($_POST['project_location']) ? trim($_POST['project_location']) : '';
$implementing_office = isset($_POST['implementing_office']) ? trim($_POST['implementing_office']) : '';
$approved_budget = isset($_POST['approved_budget']) ? floatval($_POST['approved_budget']) : 0.00;
$prepared_by = isset($_POST['prepared_by']) ? trim($_POST['prepared_by']) : '';
$verified_by = isset($_POST['verified_by']) ? trim($_POST['verified_by']) : '';

if (empty($rfq_id) || empty($project_location) || empty($implementing_office) || $approved_budget <= 0 || empty($prepared_by) || empty($verified_by)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit();
}

$sql = "INSERT INTO abstract_of_quotation (rfq_id, project_location, implementing_office, approved_budget, prepared_by, verified_by) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("issdss", $rfq_id, $project_location, $implementing_office, $approved_budget, $prepared_by, $verified_by);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Data saved successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error saving data: ' . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Error preparing statement: ' . $conn->error]);
}

$conn->close();
