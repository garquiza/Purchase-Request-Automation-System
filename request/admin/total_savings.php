<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Total Savings Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="src/css/pr.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .content {
            padding: 20px;
        }

        .header-card {
            margin-bottom: 20px;
        }

        .chart-container {
            margin-top: 20px;
        }

        .table th,
        .table td {
            text-align: center;
        }

        .animate__animated {
            animation-duration: 1.5s;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="header-card">
                <h1 class="mb-4">Total Savings Dashboard</h1>
                <p class="mb-0">Overview of savings distribution, trends, and fund sources.</p>
            </div>

            <div class="table-responsive mt-4">
                <h2>Fund Sources Overview</h2>
                <table class="table table-bordered mt-4">
                    <thead class="table-light">
                        <tr>
                            <th>Fund Source</th>
                            <th>Total ABC</th>
                            <th>Amount</th>
                            <th>Savings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fund Source 1</td>
                            <td>1,000,000.00</td>
                            <td>800,000.00</td>
                            <td>200,000.00</td>
                        </tr>
                        <tr>
                            <td>Fund Source 2</td>
                            <td>500,000.00</td>
                            <td>450,000.00</td>
                            <td>50,000.00</td>
                        </tr>
                        <tr>
                            <td>Fund Source 3</td>
                            <td>300,000.00</td>
                            <td>250,000.00</td>
                            <td>50,000.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row chart-container">
                <div class="col-md-6">
                    <canvas id="savingsPieChart" height="300"></canvas>
                </div>

                <div class="col-md-6">
                    <canvas id="savingsBarChart" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const pieCtx = document.getElementById('savingsPieChart').getContext('2d');
        const fundSources = ['Fund Source 1', 'Fund Source 2', 'Fund Source 3'];
        const savingsAmounts = [200000, 50000, 50000];

        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: fundSources,
                datasets: [{
                    data: savingsAmounts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Savings Distribution'
                    }
                }
            }
        });

        const barCtx = document.getElementById('savingsBarChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: fundSources,
                datasets: [{
                    label: 'Savings by Fund Source',
                    data: savingsAmounts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)'
                    ]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>