<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="src/css/dashboard.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background: linear-gradient(90deg, #007bff, #0056b3);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #004085);
        }

        .success-alert,
        .error-alert {
            display: none;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="container">
                <div class="header-card">
                <h2 class="text-center mb-4">User Settings</h2>
                </div>
                <div class="alert alert-success success-alert" id="success-alert" role="alert">
                    <i class="fas fa-check-circle"></i> Settings updated successfully!
                </div>
                <div class="alert alert-danger error-alert" id="error-alert" role="alert">
                    <i class="fas fa-exclamation-circle"></i> Something went wrong. Please try again.
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <i class="fas fa-user-cog me-2"></i> Account Details
                            </div>
                            <div class="card-body">
                                <form id="settings-form" action="update_settings.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" value="" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" value="" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••">
                                        <small class="text-muted">Leave blank to keep your current password.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Account Status</label>
                                        <select class="form-select" id="status" name="status">
                                            <option value="activate" >Activate</option>
                                            <option value="disabled">Disabled</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember_me" >
                                        <label class="form-check-label" for="remember_me">Remember Me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const successAlert = document.getElementById('success-alert');
        const errorAlert = document.getElementById('error-alert');
    </script>
</body>

</html>