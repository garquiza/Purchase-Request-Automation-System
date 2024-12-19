<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Purchase Request</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="src/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .form-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <div class="content animate__animated animate__fadeIn">
        <h1 class="mb-4">Create Purchase Request</h1>
        <div class="form-section">
            <form id="purchaseRequestForm" method="post">
                <div class="row g-3 mt-3">
                    <div class="col-md-12 mb-4">
                        <label for="ppmp_id" class="form-label">Select Approved PPMP:</label>
                        <select class="form-select" id="ppmp_id" name="ppmp_id" required>
                            <option value="">Select Approved PPMP</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="department" class="form-label">Department:</label>
                        <input type="text" class="form-control" id="department" name="department" required>
                    </div>
                    <div class="col-md-6">
                        <label for="section" class="form-label">Section:</label>
                        <input type="text" class="form-control" id="section" name="section" required>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-12">
                        <label for="inventory_item" class="form-label">Select Item:</label>
                        <select class="form-select" id="inventory_item" name="inventory_item" required>
                            <option value="">Select Item</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-4">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                    </div>
                    <div class="col-md-4">
                        <label for="unit_cost" class="form-label">Unit Cost:</label>
                        <input type="number" class="form-control" id="unit_cost" name="unit_cost" min="0" step="0.01" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="total_cost" class="form-label">Total Cost:</label>
                        <input type="number" class="form-control" id="total_cost" name="total_cost" readonly>
                    </div>
                </div>

                <div class="row g-3 mt-4">
                    <div class="col-md-12">
                        <label for="purpose" class="form-label">Purpose:</label>
                        <input type="text" class="form-control" id="purpose" name="purpose" required>
                    </div>
                </div>

                <div class="row g-3 mt-4">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary me-2" id="submitBtn">Submit</button>
                        <a href="pr.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('quantity').addEventListener('input', calculateTotal);
        document.getElementById('inventory_item').addEventListener('change', updateUnitCost);

        function calculateTotal() {
            const quantity = parseFloat(document.getElementById('quantity').value) || 0;
            const unitCost = parseFloat(document.getElementById('unit_cost').value) || 0;
            document.getElementById('total_cost').value = (quantity * unitCost).toFixed(2);
        }

        function updateUnitCost() {
            const selectedItem = document.getElementById('inventory_item').selectedOptions[0];
            const unitCost = selectedItem.getAttribute('data-unit-cost');
            document.getElementById('unit_cost').value = unitCost;
            calculateTotal(); 
        }

        document.getElementById('submitBtn').addEventListener('click', function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to submit this purchase request?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Submit',
                cancelButtonText: 'No, Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('purchaseRequestForm');
                    const formData = new FormData(form);

                    fetch('src/process/add_pr.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json()) 
                        .then(data => {
                            if (data.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: data.message,
                                    showConfirmButton: false,
                                    timer: 1000
                                }).then(() => {
                                    window.location.href = 'pr.php';
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Failed!',
                                    text: data.message
                                });
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong. Please try again later.'
                            });
                        });
                }
            });
        });
    </script>
</body>
</html>