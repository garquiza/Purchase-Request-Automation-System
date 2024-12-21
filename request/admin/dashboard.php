<?php

session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once '../admin/src/config/pdo.php'; 

$totalRequests = 0;
$totalApproved = 0;
$totalRejected = 0;
$totalPending = 0;

$query = "SELECT status, COUNT(*) as count FROM purchase_requests GROUP BY status";
$stmt = $pdo->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    switch ($row['status']) {
        case 'Approved':
            $totalApproved = $row['count'];
            break;
        case 'Rejected':
            $totalRejected = $row['count'];
            break;
        case 'Pending':
            $totalPending = $row['count'];
            break;
    }
}

$totalRequests = $totalApproved + $totalRejected + $totalPending;

$monthlyRequests = [];
$query = "SELECT MONTH(submitted_date) as month, COUNT(*) as count FROM purchase_requests GROUP BY MONTH(submitted_date)";
$stmt = $pdo->prepare($query);
$stmt->execute();
$monthlyResults = $stmt->fetchAll(PDO::FETCH_ASSOC);

for ($i = 1; $i <= 12; $i++) {
    $monthlyRequests[$i] = 0; 
}

foreach ($monthlyResults as $row) {
    $monthlyRequests[$row['month']] = $row['count'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            cursor: pointer;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .card-text {
            color: #6c757d;
        }

        .chart-container {
            max-height: 400px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 p-4 animate__animated animate__fadeInUp">
            <h2 class="mb-3">Dashboard</h2>
            <p>Welcome, <strong><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></strong></p>

            <div class="row row-cols-2 row-cols-md-4 g-3">
              
                <div class="col">
                    <a href="total_budget_cost.php" class="text-decoration-none">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">##</h5>
                                <p class="card-text">Total Budget Cost</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="total_savings.php" class="text-decoration-none">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">##</h5>
                                <p class="card-text">Total Savings</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="pr.php" class="text-decoration-none">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $totalRequests; ?></h5>
                                <p class="card-text">Total Purchase Requests</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $totalApproved; ?></h5>
                            <p class="card-text">Approved</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $totalRejected; ?></h5>
                            <p class="card-text">Rejected</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $totalPending; ?></h5>
                            <p class="card-text">Pending</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">##</h5>
                            <p class="card-text">Total Procured</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">##</h5>
                            <p class="card-text">Abstract Pending PR</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">##</h5>
                            <p class="card-text">Proceeding Pending PR</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">##</h5>
                            <p class="card-text">Award Pending PR</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Monthly Statistics</h5>
                    <div class="chart-container">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const ctx = document.getElementById('chart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Requests',
                    data: [<?php echo implode(',', $monthlyRequests); ?>], 
                    borderColor: '#0d6efd',
                    backgroundColor: 'rgba(13, 110, 253, 0.1)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            }
        });
    </script>

    <script>
        function updateTotalBudget() {
            const plannedBudgetElements = document.querySelectorAll('.planned-budget');
            let totalBudget = 0;

            plannedBudgetElements.forEach((element) => {
                totalBudget += parseFloat(element.textContent || 0);
            });

            const totalBudgetTitle = document.getElementById('totalBudgetTitle');
            totalBudgetTitle.textContent = `Total Budget: PHP ${totalBudget.toLocaleString()}`;
        }

        document.getElementById('totalBudgetCostModal').addEventListener('shown.bs.modal', updateTotalBudget);

        document.getElementById('saveSectorButton').addEventListener('click', () => {
            const sectorName = document.getElementById('sectorName').value;
            const plannedBudget = document.getElementById('plannedBudget').value;
            const actualBudget = document.getElementById('actualBudget').value;
            const variance = plannedBudget - actualBudget;

            if (sectorName && plannedBudget && actualBudget) {
                const tableBody = document.getElementById('budgetTableBody');
                const newRow = `
            <tr>
                <td>${sectorName}</td>
                <td class="planned-budget">${plannedBudget}</td>
                <td>${actualBudget}</td>
                <td>${variance}</td>
            </tr>
        `;
                tableBody.insertAdjacentHTML('beforeend', newRow);

                const addSectorModal = bootstrap.Modal.getInstance(document.getElementById('addSectorModal'));
                addSectorModal.hide();

                document.getElementById('addSectorForm').reset();

                updateTotalBudget();
            } else {
                Swal.fire('Error', 'Please fill in all fields.', 'error'); 
            }
        });
    </script>
</body>

</html>