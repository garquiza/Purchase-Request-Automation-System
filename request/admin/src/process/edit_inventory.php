<?php
require_once '../config/pdo.php';

if (isset($_POST['inventory_id'], $_POST['item_name'], $_POST['item_description'], $_POST['unit_cost'])) {
    $inventoryId = $_POST['inventory_id'];
    $itemName = $_POST['item_name'];
    $itemDescription = $_POST['item_description'];
    $unitCost = $_POST['unit_cost'];

    $sql = "UPDATE inventory SET material = :item_name, description = :item_description, unit_price = :unit_cost WHERE inventory_id = :inventory_id";
    $stmt = $pdo->prepare($sql);

    $result = $stmt->execute([
        'item_name' => $itemName,
        'item_description' => $itemDescription,
        'unit_cost' => $unitCost,
        'inventory_id' => $inventoryId
    ]);

    if ($result) {
        echo json_encode(['status' => 'success', 'message' => 'Item updated successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update item']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Missing data']);
}
