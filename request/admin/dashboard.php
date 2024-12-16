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
            <p>Welcome,</p>

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
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">##</h5>
                            <p class="card-text">Purchase Request</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">##</h5>
                            <p class="card-text">Approved</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">##</h5>
                            <p class="card-text">Rejected</p>
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

    <div class="modal fade" id="totalBudgetCostModal" tabindex="-1" aria-labelledby="totalBudgetCostModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> 
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="totalBudgetCostModalLabel">Total Budget Cost</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mb-4" id="totalBudgetTitle">Total Budget: PHP 0.00</h4>

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Sector</th>
                                <th>Planned Budget</th>
                                <th>Actual Budget</th>
                                <th>Variance</th>
                            </tr>
                        </thead>
                        <tbody id="budgetTableBody">
                            <tr>
                                <td>Construction</td>
                                <td class="planned-budget">50,000</td>
                                <td>45,000</td>
                                <td>-5,000</td>
                            </tr>
                            <tr>
                                <td>Electrical</td>
                                <td class="planned-budget">20,000</td>
                                <td>18,000</td>
                                <td>-2,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSectorModal">
                        Add New Sector
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addSectorModal" tabindex="-1" aria-labelledby="addSectorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSectorModalLabel">Add New Sector</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addSectorForm">
                        <div class="mb-3">
                            <label for="sectorName" class="form-label">Sector Name</label>
                            <input type="text" class="form-control" id="sectorName" placeholder="Enter sector name" required>
                        </div>
                        <div class="mb-3">
                            <label for="plannedBudget" class="form-label">Planned Budget</label>
                            <input type="number" class="form-control" id="plannedBudget" placeholder="Enter planned budget" required>
                        </div>
                        <div class="mb-3">
                            <label for="actualBudget" class="form-label">Actual Budget</label>
                            <input type="number" class="form-control" id="actualBudget" placeholder="Enter actual budget" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="saveSectorButton">Save Sector</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="totalSavingsModal" tabindex="-1" aria-labelledby="totalSavingsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="totalSavingsModalLabel">Total Savings Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Here you can display the breakdown of the Total Savings or any other relevant details.</p>
                    <ul>
                        <li>Savings from Discounts: PHP 10,000</li>
                        <li>Project Efficiency Savings: PHP 5,000</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                    data: [10, 20, 15, 30, 25, 40, 35, 30, 20, 25, 15, 10],
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