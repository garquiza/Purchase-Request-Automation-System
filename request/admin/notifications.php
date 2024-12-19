<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once '../admin/src/config/database.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 0.75rem;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .card-text {
            color: #6c757d;
        }

        .notifications-list {
            max-height: 400px;
            overflow-y: auto;
        }

        .notification-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-item:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 p-4 animate__animated animate__fadeInUp">
            <h2 class="mb-3">Notifications</h2>
            <p>Welcome, <strong><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></strong></p>

            <div class="row row-cols-1 row-cols-md-3 g-3 mb-4">
                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">5</h5>
                            <p class="card-text">New Notifications</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">12</h5>
                            <p class="card-text">Read Notifications</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">17</h5>
                            <p class="card-text">Total Notifications</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recent Notifications</h5>
                    <div class="notifications-list">
                        <div class="notification-item">
                            <i class="fas fa-bell text-primary me-2"></i>
                            Your purchase request has been approved.
                            <span class="text-muted float-end">2 mins ago</span>
                        </div>
                        <div class="notification-item">
                            <i class="fas fa-exclamation-circle text-danger me-2"></i>
                            A budget alert has been triggered.
                            <span class="text-muted float-end">10 mins ago</span>
                        </div>
                        <div class="notification-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Your template was successfully created.
                            <span class="text-muted float-end">1 hour ago</span>
                        </div>
                        <div class="notification-item">
                            <i class="fas fa-envelope text-info me-2"></i>
                            You received a new message from the admin.
                            <span class="text-muted float-end">3 hours ago</span>
                        </div>
                        <div class="notification-item">
                            <i class="fas fa-info-circle text-warning me-2"></i>
                            Reminder: Update your profile information.
                            <span class="text-muted float-end">Yesterday</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>