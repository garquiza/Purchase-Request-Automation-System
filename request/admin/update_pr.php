<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Request List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="src/css/pr.css">
    <style>
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="header-card">
                <h1 class="mb-4">Update Purchase Request</h1>
                <p class="mb-0">Manage and track all purchase requests efficiently.</p>
            </div>

            <div class="alert 
            <?php
            echo $pr_data['status'] === 'Approved' ? 'alert-success' : ($pr_data['status'] === 'Rejected' ? 'alert-danger' : 'alert-warning');
            ?>">
                <strong>Status:</strong> <?php echo htmlspecialchars($pr_data['status']); ?>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" id="department" class="form-control" value="<?php echo htmlspecialchars($items[0]['department'] ?? ''); ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="pr_number" class="form-label">PR Number</label>
                    <input type="text" id="pr_number" class="form-control" value="<?php echo htmlspecialchars($pr_data['pr_number']); ?>" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="section" class="form-label">Section</label>
                    <input type="text" id="section" class="form-control" value="<?php echo htmlspecialchars($items[0]['section'] ?? ''); ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="sai_number" class="form-label">SAI Number</label>
                    <input type="text" id="sai_number" class="form-control" placeholder="Enter SAI Number">
                </div>
            </div>

            <div class="table-responsive mb-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Unit Cost</th>
                            <th>Total Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($item['item_name']); ?></td>
                                <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                                <td><?php echo htmlspecialchars(number_format($item['unit_cost'], 2)); ?></td>
                                <td><?php echo htmlspecialchars(number_format($item['total_cost'], 2)); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-end fw-bold">Total Amount</td>
                            <td><?php echo htmlspecialchars(number_format($total_amount, 2)); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="mb-3">
                <label for="purpose" class="form-label">Purpose</label>
                <textarea id="purpose" class="form-control" rows="3" readonly><?php echo htmlspecialchars($items[0]['purpose'] ?? ''); ?></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="requested_by" class="form-label">Requested By</label>
                    <input type="text" id="requested_by" class="form-control"
                        value="<?php echo htmlspecialchars($pr_data['end_user_first_name'] . ' ' . $pr_data['end_user_last_name']); ?>" readonly>
                </div>

                <div class="col-md-6">
                    <label for="approved_by" class="form-label">Approved By</label>
                    <input type="text" id="approved_by" class="form-control"
                        value="<?php echo htmlspecialchars($pr_data['approver']); ?>" readonly>
                </div>

            </div>

            <div class="text-center mt-4">
                <button class="btn btn-primary" onclick="editStatus(<?php echo $pr_id; ?>)">Update Status</button>
                <?php if ($pr_data['status'] === 'Approved'): ?>
                    <a href="pp.php?pr_number=<?php echo urlencode($pr_data['pr_number']); ?>&status=<?php echo urlencode($pr_data['status']); ?>" class="btn btn-success">Proceed</a>
                <?php endif; ?>
                <a href="pr.php" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>


</body>

</html>