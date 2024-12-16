<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once '../admin/src/config/database.php';

$aoqs = [];
$sql_aoq = "SELECT aoq_id, project_location FROM abstract_of_quotation";
$result_aoq = $conn->query($sql_aoq);
if ($result_aoq->num_rows > 0) {
    while ($row = $result_aoq->fetch_assoc()) {
        $aoqs[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Abstract of Quotation Next</title>
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
            <div class="header-card mb-4">
                <h1>Select AOQ</h1>
                <p>Fill out the details below</p>
            </div>

            <form id="aoq-selection-form">
                <div class="mb-4">
                    <label for="aoq" class="form-label">Select AOQ</label>
                    <select id="aoq" name="aoq" class="form-control" required>
                        <option value="">Select an AOQ</option>
                        <?php foreach ($aoqs as $aoq): ?>
                            <option value="<?php echo $aoq['aoq_id']; ?>">
                                <?php echo htmlspecialchars($aoq['project_location']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="button" class="btn btn-primary" id="load-aoq">Load AOQ Details</button>
            </form>

            <div id="specifications-section" class="mt-4" style="display: none;">
                <h2>Specifications</h2>
                <table class="table table-bordered" id="specifications-table">
                    <thead>
                        <tr>
                            <th>Specification</th>
                            <th>Quantity</th>
                            <th>Unit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="specification[]" required></td>
                            <td><input type="number" class="form-control" name="quantity[]" required></td>
                            <td><input type="text" class="form-control" name="unit[]" required></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="bidders-section" class="mt-4" style="display: none;">
                <h2>Bidders</h2>
                <table class="table table-bordered" id="bidders-table">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Bidders Specification</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="company_name[]" required></td>
                            <td><input type="text" class="form-control" name="bidders_specification[]" required></td>
                            <td><input type="number" class="form-control" name="bidders_quantity[]" required></td>
                            <td><input type="number" class="form-control" name="unit_price[]" required></td>
                            <td><input type="number" class="form-control" name="total_price[]" readonly></td>
                            <td><button type="button" class="btn btn-danger remove-bidder">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-secondary" id="add-bidder">Add Bidder</button>
            </div>

            <button type="submit" class="btn btn-primary mt-4" id="submit-form">Submit</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#load-aoq').on('click', function() {
                const aoqId = $('#aoq').val();
                if (aoqId) {
                    $('#specifications-section').show();
                    $('#bidders-section').show();
                } else {
                    alert('Please select an AOQ.');
                }
            });

            $('#add-bidder').on('click', function() {
                $('#bidders-table tbody').append(`
                    <tr>
                        <td><input type="text" class="form-control" name="company_name[]" required></td>
                        <td><input type="text" class="form-control" name="bidders_specification[]" required></td>
                        <td><input type="number" class="form-control" name="bidders_quantity[]" required></td>
                        <td><input type="number" class="form-control" name="unit_price[]" required></td>
                        <td><input type="number" class="form-control" name="total_price[]" readonly></td>
                        <td><button type="button" class="btn btn-danger remove-bidder">Remove</button></td>
                    </tr>
                `);
            });

            $(document).on('click', '.remove-bidder', function() {
                $(this).closest('tr').remove();
            });

            $(document).on('input', 'input[name="bidders_quantity[]"], input[name="unit_price[]"]', function() {
                const row = $(this).closest('tr');
                const quantity = row.find('input[name="bidders_quantity[]"]').val();
                const unitPrice = row.find('input[name="unit_price[]"]').val();
                const totalPrice = (quantity * unitPrice) || 0;
                row.find('input[name="total_price[]"]').val(totalPrice.toFixed(2));
            });

            $('#submit-form').on('click', function(e) {
                e.preventDefault();
                alert('Form submitted!');
            });
        });
    </script>
</body>

</html>