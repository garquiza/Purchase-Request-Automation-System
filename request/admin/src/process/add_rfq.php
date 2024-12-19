<?php
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectTitle = $_POST['project_title'];
    $prRequestNumber = $_POST['pr_request_number'];
    $endUser = $_POST['end_user'];
    $dateCreated = $_POST['date_created'];
    $deadlineSubmission = $_POST['deadline_submission'];
    $approvedBudget = $_POST['approved_budget'];
    $procurementMode = $_POST['procurement_mode'];

    $rfqItems = json_decode($_POST['rfq_items'], true);

    $conn->begin_transaction();

    try {
        $insertRfqQuery = "INSERT INTO rfq (project_title, pr_request_number, end_user, date_created, deadline_submission, approved_budget, procurement_mode)
                           VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($insertRfqQuery)) {
            $stmt->bind_param("sssssss", $projectTitle, $prRequestNumber, $endUser, $dateCreated, $deadlineSubmission, $approvedBudget, $procurementMode);

            if ($stmt->execute()) {
                $rfqId = $stmt->insert_id;

                $insertRfqItemsQuery = "INSERT INTO rfq_items (rfq_id, quantity, unit, general_name, tech_specification, unit_cost, bidder_offer_specification, quoted_unit_price)
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

                if ($stmt = $conn->prepare($insertRfqItemsQuery)) {
                    foreach ($rfqItems as $item) {
                        $stmt->bind_param("iisssdss", $rfqId, $item['quantity'], $item['unit'], $item['general_name'], $item['tech_spec'], $item['unit_cost'], $item['bidder_offer_spec'], $item['quoted_unit_price']);
                        $stmt->execute();
                    }
                } else {
                    throw new Exception('Failed to prepare statement for RFQ items.');
                }

                $conn->commit();

                echo json_encode([
                    'status' => 'success',
                    'message' => 'RFQ and items have been successfully saved!'
                ]);
            } else {
                throw new Exception('Failed to insert RFQ.');
            }
        } else {
            throw new Exception('Failed to prepare statement for RFQ insertion.');
        }
    } catch (Exception $e) {
        $conn->rollback();

        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
}

$conn->close();
