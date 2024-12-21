<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once '../admin/src/config/database.php';
$aoqQuery = "SELECT aoq_id, project_location FROM abstract_of_quotation";
$aoqResult = $conn->query($aoqQuery);
$aoqs = [];

if ($aoqResult->num_rows > 0) {
    while ($row = $aoqResult->fetch_assoc()) {
        $aoqs[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Resolution</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="src/css/pr.css">
    <style>
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .statement-input {
            height: 100px;
        }

        .footer {
            display: flex;
            justify-content: flex-end;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="header-card mb-4">
                <h1 class="mb-4">Resolution Form</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <form id="reso-form">
                        <div class="mb-3">
                            <label for="aoq-select" class="form-label">Select AOQ</label>
                            <select class="form-select" id="aoq-select" name="aoq_id" required>
                                <option value="" disabled selected>Select an AOQ</option>
                                <?php foreach ($aoqs as $aoq): ?>
                                    <option value="<?php echo $aoq['aoq_id']; ?>">
                                        <?php echo htmlspecialchars($aoq['project_location']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="supplier-name" class="form-label">Supplier Name</label>
                            <input type="text" class="form-control" id="supplier-name" name="supplier_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description of Goods/Services</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="total-amount-figures" class="form-label">Total Amount (Figures)</label>
                            <input type="number" class="form-control" id="total-amount-figures" name="total_amount_figures" required>
                        </div>
                        <div class="mb-3">
                            <label for="total-amount-words" class="form-label">Total Amount (Words)</label>
                            <input type="text" class="form-control" id="total-amount-words" name="total_amount_words" required>
                        </div>

                        <div id="whereas-section">
                            <h5>Whereas:</h5>
                            <div class="mb-3">
                                <label>1.</label>
                                <textarea class="form-control statement-input" name="whereas[]" placeholder="Enter statement" required></textarea>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" id="add-whereas">Add Another Whereas</button>

                        <div id="it-is-hereby-section" class="mt-4">
                            <h5>It is hereby that:</h5>
                            <div class="mb-3">
                                <label>1.</label>
                                <textarea class="form-control statement-input" name="it_is_hereby[]" placeholder="Enter statement" required></textarea>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" id="add-it-is-hereby">Add Another It is hereby that</button>

                        <div class="footer">
                            <button type="submit" class="btn btn-primary mt-4">Submit Resolution</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            let whereasCount = 1;
            let itIsHerebyCount = 1;

            $('#add-whereas').on('click', function() {
                whereasCount++;
                $('#whereas-section').append(`
                    <div class="mb-3">
                        <label>${whereasCount}.</label>
                        <textarea class="form-control statement-input" name="whereas[]" placeholder="Enter statement" required></textarea>
                    </div>
                `);
            });

            $('#add-it-is-hereby').on('click', function() {
                itIsHerebyCount++;
                $('#it-is-hereby-section').append(`
                    <div class="mb-3">
                        <label>${itIsHerebyCount}.</label>
                        <textarea class="form-control statement-input" name="it_is_hereby[]" placeholder="Enter statement" required></textarea>
                    </div>
                `);
            });

            $('#reso-form').on('submit', function(e) {
                e.preventDefault();

                const formData = $(this).serialize();

                $('#reso-form').on('submit', function(e) {
                    e.preventDefault();

                    const formData = $(this).serialize();

                    $.ajax({
                        type: 'POST',
                        url: 'src/process/add_resolution.php',
                        data: formData,
                        success: function(response) {
                            Swal.fire({
                                title: 'Submitted!',
                                text: 'Your resolution has been submitted successfully.',
                                icon: 'success',
                                showCancelButton: true,
                                confirmButtonText: 'Proceed to Notice of Award',
                                cancelButtonText: 'Download',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'noa.php';
                                } else if (result.isDismissed) {
                                    window.location.href = 'path/to/your/download/file.pdf'; // Change this to your actual file path
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            Swal.fire(
                                'Error!',
                                'There was an error submitting your resolution. Please try again.',
                                'error'
                            );
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>