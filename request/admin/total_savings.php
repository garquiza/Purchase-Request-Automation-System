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
    <title>Total Savings Cost</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="src/css/pr.css">
    <style>
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .pie-chart-container {
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="header-card">
                <h1 class="mb-2">Total Savings Cost</h1>
                <p class="mb-0">Monitor and calculate total savings efficiently.</p>
            </div>

            <div class="mb-4">
                <h4>Savings: <span id="totalSavings" class="text-success">₱0.00</span></h4>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-primary" id="addRowButton">
                    <i class="fas fa-plus-circle"></i> Add Fund Source
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Fund Source</th>
                            <th>Total ABC</th>
                            <th>Amount</th>
                            <th>Savings</th>
                        </tr>
                    </thead>
                    <tbody id="fundSourceTable">
                    </tbody>
                </table>
            </div>

            <div class="pie-chart-container">
                <canvas id="savingsPieChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tableBody = document.getElementById('fundSourceTable');
            const totalSavingsDisplay = document.getElementById('totalSavings');
            const addRowButton = document.getElementById('addRowButton');
            let savingsPieChart;

            function updateSavings() {
                let totalSavings = 0;
                const data = [];
                const labels = [];

                Array.from(tableBody.children).forEach(row => {
                    const abc = parseFloat(row.querySelector('.abc').value) || 0;
                    const amount = parseFloat(row.querySelector('.amount').value) || 0;
                    const savings = abc - amount;
                    row.querySelector('.savings').textContent = `₱${savings.toFixed(2)}`;
                    totalSavings += savings;

                    labels.push(row.querySelector('.fund-source').value || 'Unknown');
                    data.push(savings);
                });

                totalSavingsDisplay.textContent = `₱${totalSavings.toFixed(2)}`;
                updateChart(labels, data);
            }

            function updateChart(labels, data) {
                if (savingsPieChart) savingsPieChart.destroy();

                const ctx = document.getElementById('savingsPieChart').getContext('2d');
                savingsPieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            data: data,
                            backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545', '#6c757d'],
                            hoverOffset: 4
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            }

            addRowButton.addEventListener('click', function() {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><input type="text" class="form-control fund-source" placeholder="Fund Source"></td>
                    <td><input type="number" class="form-control abc" placeholder="₱0.00" min="0"></td>
                    <td><input type="number" class="form-control amount" placeholder="₱0.00" min="0"></td>
                    <td class="savings">₱0.00</td>
                `;

                row.querySelectorAll('input').forEach(input => {
                    input.addEventListener('input', updateSavings);
                });

                tableBody.appendChild(row);
                updateSavings();
            });
        });
    </script>
</body>

</html>