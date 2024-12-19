<?php
require_once '../config/pdo.php';

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id'], $data['name'], $data['budget']) && is_numeric($data['budget']) && $data['budget'] > 0) {
    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $budget = (float)$data['budget'];

    try {
        $query = "UPDATE sector SET name = :name, budget = :budget WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([':name' => $name, ':budget' => $budget, ':id' => $id]);

        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid input data.']);
}
