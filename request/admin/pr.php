<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


require_once '../admin/src/config/database.php';

$status_query = "SELECT status, COUNT(*) as status_count FROM purchase_requests GROUP BY status";
$status_result = mysqli_query($conn, $status_query);

$pending_count = $approved_count = $rejected_count = 0;

while ($row = mysqli_fetch_assoc($status_result)) {
    if ($row['status'] == 'Pending') {
        $pending_count = $row['status_count'];
    } elseif ($row['status'] == 'Approved') {
        $approved_count = $row['status_count'];
    } elseif ($row['status'] == 'Rejected') {
        $rejected_count = $row['status_count'];
    }
}

$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$search = isset($_GET['search']) ? $_GET['search'] : '';
$status_filter = isset($_GET['status']) ? $_GET['status'] : '';

$query = "SELECT pr.*, pri.purpose 
          FROM purchase_requests pr
          LEFT JOIN purchase_request_items pri ON pr.pr_id = pri.pr_id
          WHERE (pr.pr_number LIKE '%$search%' OR pri.purpose LIKE '%$search%')";

if ($status_filter) {
    $query .= " AND pr.status = '$status_filter'";
}

$query .= " LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $query);

$count_query = "SELECT COUNT(*) as total FROM purchase_requests pr
                LEFT JOIN purchase_request_items pri ON pr.pr_id = pri.pr_id
                WHERE (pr.pr_number LIKE '%$search%' OR pri.purpose LIKE '%$search%')";
if ($status_filter) {
    $count_query .= " AND pr.status = '$status_filter'";
}
$count_result = mysqli_query($conn, $count_query);
$total_rows = mysqli_fetch_assoc($count_result)['total'];
$total_pages = ceil($total_rows / $limit);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Purchase Request List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../admin/src/css/dashboard.css">
    <link rel="stylesheet" href="src/css/pr.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="d-flex">
        <?php include '../admin/sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="header-card mb-4">
                <h1 class="display-5 mb-2">Admin - Purchase Request List</h1>
                <p class="text-light">Manage and monitor purchase requests for your organization.</p>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-center bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Pending</h5>
                            <h2 class="card-text text-warning"><?php echo $pending_count; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Approved</h5>
                            <h2 class="card-text text-success"><?php echo $approved_count; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Rejected</h5>
                            <h2 class="card-text text-danger"><?php echo $rejected_count; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <form method="get" class="d-flex mb-2">
                    <input type="text" name="search" class="form-control me-2" placeholder="Search by PR Number or Purpose" value="<?php echo htmlspecialchars($search); ?>">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                <form method="get" class="d-flex mb-2">
                    <select name="status" class="form-select me-2" onchange="this.form.submit()">
                        <option value="">All Statuses</option>
                        <option value="approved" <?php if ($status_filter == 'approved') echo 'selected'; ?>>Approved</option>
                        <option value="rejected" <?php if ($status_filter == 'rejected') echo 'selected'; ?>>Rejected</option>
                        <option value="pending" <?php if ($status_filter == 'pending') echo 'selected'; ?>>Pending</option>
                    </select>
                    <button type="submit" class="btn btn-outline-primary">Filter</button>
                </form>
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>PR ID</th>
                            <th>PR Number</th>
                            <th>Purpose</th>
                            <th>Approver</th>
                            <th>Submitted Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['pr_id']); ?></td>
                                <td><?php echo htmlspecialchars($row['pr_number']); ?></td>
                                <td><?php echo htmlspecialchars($row['purpose']); ?></td>
                                <td><?php echo htmlspecialchars($row['approver']); ?></td>
                                <td><?php echo date("F j, Y", strtotime($row['submitted_date'])); ?></td>
                                <td>
                                    <?php
                                    switch ($row['status']) {
                                        case 'Approved':
                                            echo '<span class="badge bg-success">Approved</span>';
                                            break;
                                        case 'Rejected':
                                            echo '<span class="badge bg-danger">Rejected</span>';
                                            break;
                                        case 'Pending':
                                            echo '<span class="badge bg-warning text-dark">Pending</span>';
                                            break;
                                        default:
                                            echo '<span class="badge bg-secondary">Unknown</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="download_pr.php?pr_id=<?php echo $row['pr_id']; ?>" class="btn btn-outline-success btn-sm" title="Download PR">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="update_pr.php?pr_id=<?php echo $row['pr_id']; ?>" class="btn btn-outline-warning btn-sm" title="Update PR">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-outline-info btn-sm" title="Print PR" onclick="printPR('<?php echo $row['pr_id']; ?>')">
                                        <i class="fas fa-print"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm" title="Delete PR" onclick="confirmDelete('<?php echo $row['pr_id']; ?>')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                            <a class="page-link" href="?page=<?php echo $page - 1; ?>&search=<?php echo htmlspecialchars($search); ?>&status=<?php echo $status_filter; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo htmlspecialchars($search); ?>&status=<?php echo $status_filter; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?php if ($page >= $total_pages) echo 'disabled'; ?>">
                            <a class="page-link" href="?page=<?php echo $page + 1; ?>&search=<?php echo htmlspecialchars($search); ?>&status=<?php echo $status_filter; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(pr_id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'This PR will be deleted permanently!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'delete_pr.php?pr_id=' + pr_id;
                }
            });
        }
    </script>
</body>

</html>