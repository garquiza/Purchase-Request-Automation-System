<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Request List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="src/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="header-card mb-4">
                <h1 class="display-5 mb-2">Purchase Request List</h1>
                <p class="text-light">Manage and track the status of your purchase requests.</p>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-center bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Pending</h5>
                            <h2 class="card-text text-warning"></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Approved</h5>
                            <h2 class="card-text text-success"></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Rejected</h5>
                            <h2 class="card-text text-danger"></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <form method="get" class="d-flex mb-2">
                    <input type="text" name="search" class="form-control me-2" placeholder="Search by PR Number or Purpose">">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                <form method="get" class="d-flex mb-2">
                    <select name="status" class="form-select me-2" onchange="this.form.submit()">
                        <option value="">All Statuses</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                        <option value="pending">Pending</option>
                    </select>
                    <button type="submit" class="btn btn-outline-primary">Filter</button>
                </form>

                <div>
                    <?php if ($ppmp_count > 0): ?>
                        <a href="create_pr.php" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Purchase Request
                        </a>
                    <?php else: ?>
                        <button class="btn btn-primary" disabled>
                            <i class="fas fa-plus"></i> Wait for PPMP Approval.
                        </button>
                    <?php endif; ?>
                </div>


            </div>

            <div class="table-responsive mt-4">
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>PR Number</th>
                            <th>Purpose</th>
                            <th>Approver</th>
                            <th>Submitted Date</th>
                            <th>Status</th>
                            <th>PR Process</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                                <td>
                                    <a href="download_pr.php?pr_number=" class="btn btn-outline-primary btn-sm" title="Download PR"><i class="fas fa-download"></i></a>
                                    <a href="view_pr.php?pr_number=" class="btn btn-outline-info btn-sm" title="View PR"><i class="fas fa-eye"></i></a>
                                    <a href="update_pr.php?pr_number=" class="btn btn-outline-warning btn-sm" title="Update PR"><i class="fas fa-edit"></i></a>
                                    <button class="btn btn-outline-danger btn-sm" title="Delete PR" onclick="confirmDelete('')"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                    </tbody>
                </table>

                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="?page=" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

    <script>
        function confirmDelete(prNumber) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request to delete the PR
                    fetch('src/process/delete_pr.php?pr_number=' + prNumber)
                        .then(response => response.json())
                        .then(data => {
                            // Check if the deletion was successful
                            if (data.status === 'success') {
                                // Show success message
                                Swal.fire({
                                    title: 'Deleted!',
                                    text: data.message,
                                    icon: 'success'
                                }).then(() => {
                                    // Reload the page or redirect
                                    window.location.href = 'pr.php'; // Modify this URL if necessary
                                });
                            } else {
                                // Show error message
                                Swal.fire({
                                    title: 'Error!',
                                    text: data.message,
                                    icon: 'error'
                                });
                            }
                        })
                        .catch(error => {
                            // Handle fetch error
                            Swal.fire({
                                title: 'Error!',
                                text: 'Something went wrong. Please try again later.',
                                icon: 'error'
                            });
                        });
                }
            });
        }
    </script>

</body>

</html>