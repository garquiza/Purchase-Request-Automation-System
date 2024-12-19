<?php
require_once '../config/pdo.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['name'], $data['budget']) && !empty(trim($data['name'])) && is_numeric($data['budget'])) {
        $name = trim($data['name']);
        $budget = floatval($data['budget']);

        try {
            $stmt = $pdo->prepare("INSERT INTO sector (name, budget) VALUES (:name, :budget)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':budget', $budget);

            if ($stmt->execute()) {
                echo json_encode(['success' => true, 'message' => 'Sector added successfully.']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to add sector.']);
            }
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid input data.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
