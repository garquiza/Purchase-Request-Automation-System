<?php
require_once '../config/pdo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $unit = $_POST['unit'];
    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $unit_cost = $_POST['unit_cost'];

    $item_no = 'IM-' . date('Y-m-d') . '-' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);

    $sql = "INSERT INTO inventory (item_no, unit, item_name, item_description, unit_cost) 
            VALUES (:item_no, :unit, :item_name, :item_description, :unit_cost)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':item_no', $item_no);
    $stmt->bindParam(':unit', $unit);
    $stmt->bindParam(':item_name', $item_name);
    $stmt->bindParam(':item_description', $item_description);
    $stmt->bindParam(':unit_cost', $unit_cost);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Item added successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add item.']);
    }
}
