<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once '../admin/src/config/database.php';

$projects = [];
$sql = "SELECT rfq_id, project_title FROM rfq";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
}

$user_id = $_SESSION['user_id'];
$user_name = "";
$sql_user = "SELECT first_name, last_name FROM admin_users WHERE id = ?";
$stmt = $conn->prepare($sql_user);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result_user = $stmt->get_result();
if ($result_user->num_rows > 0) {
    $user = $result_user->fetch_assoc();
    $user_name = htmlspecialchars($user['first_name'] . ' ' . $user['last_name']);
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Abstract of Quotation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="src/css/pr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>

    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="header-card mb-4">
                <h1>Abstract of Quotation</h1>
                <p>Fill out the project details below</p>
            </div>

            <form id="aoq-form" method="POST">
                <div class="mb-4">
                    <label for="project" class="form-label">Project</label>
                    <select id="project" name="project" class="form-control" required>
                        <option value="">Select a project</option>
                        <?php foreach ($projects as $project): ?>
                            <option value="<?php echo $project['rfq_id']; ?>">
                                <?php echo htmlspecialchars($project['project_title']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="project-location" class="form-label">Project Location</label>
                    <input type="text" id="project-location" name="project_location" class="form-control" placeholder="Enter project location" required>
                </div>
                <div class="mb-4">
                    <label for="implementing-office" class="form-label">Implementing Office</label>
                    <input type="text" id="implementing-office" name="implementing_office" class="form-control" placeholder="Enter office details" required>
                </div>
                <div class="mb-4">
                    <label for="approved-budget" class="form-label">Approved Budget for the Contract</label>
                    <input type="number" id="approved-budget" name="approved_budget" class="form-control" placeholder="Enter budget amount" required>
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <label for="prepared-by" class="form-label">Prepared By:</label>
                        <input type="text" id="prepared-by" name="prepared_by" class="form-control" value="<?php echo $user_name; ?>" required>
                    </div>
                    <div>
                        <label for="verified-by" class="form-label">Verified By:</label>
                        <input type="text" id="verified-by" name="verified_by" class="form-control" value="<?php echo $user_name;                        ?>" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save and Proceed</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#aoq-form').on('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to save the details?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, save it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'src/process/add_aoq.php',
                            type: 'POST',
                            data: $(this).serialize(),
                            success: function(response) {
                                console.log(response);
                                try {
                                    const res = JSON.parse(response);
                                    if (res.success) {
                                        Swal.fire(
                                            'Saved!',
                                            'Your details have been saved.',
                                            'success'
                                        ).then(() => {
                                            window.location.href = 'aoq_next.php';
                                        });
                                    } else {
                                        Swal.fire(
                                            'Error!',
                                            res.message,
                                            'error'
                                        );
                                    }
                                } catch (e) {
                                    console.error('Parsing error:', e);
                                    Swal.fire(
                                        'Error!',
                                        'There was an error processing the response.',
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('AJAX error:', status, error);
                                Swal.fire(
                                    'Error!',
                                    'There was an error processing your request.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>