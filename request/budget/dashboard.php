<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Analytics Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Alpine.js for Dropdown Toggle -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <style>
        .chart-container {
            width: 700px; 
            height: 700px; 
            max-width: 100%; 
            margin: 0 auto; 
        }
        #myPieChart {
            width: 100% !important;
            height: 100% !important;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">
        <?php include './partials/sidebar.php'; ?>

        <main class="flex-1 p-8 overflow-y-auto">
            <header class="mb-10">
                <h1 class="text-4xl font-bold text-gray-800 mb-2">Data Analytics Overview</h1>
                <p class="text-gray-600">Insights into user trends, revenue, and more.</p>
            </header>

            <!-- Stats Cards Section with Proportional Layout -->
            <section class="mb-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                    <!-- Card: Purchase Request -->
                    <div class="p-6 bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between">
                        <p class="text-sm font-medium text-indigo-100">Purchase Request</p>
                        <h2 class="text-3xl font-bold mt-2">2,120</h2>
                    </div>

                    <!-- Card: Total Savings with Modal -->
                    <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between" x-on:click="open = true">
                        <a href="total_savings.php" class="text-sm font-medium text-yellow-100">Total Savings</a>
                        <h2 class="text-3xl font-bold mt-2">50,780</h2>
                    </div>

                    <!-- Card: Total Budget with Modal -->
                    <div class="p-6 bg-gradient-to-r from-red-500 to-red-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between" x-on:click="open = true">
                        <a href="total_budget.php" class="text-sm font-medium text-yellow-100">Total Budget</a>
                        <h2 class="text-3xl font-bold mt-2">50,780</h2>
                    </div>

                    <!-- Card: Total Procured with Modal -->
                    <div class="p-6 bg-gradient-to-r from-blue-500 to-blue-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between" x-on:click="open = true">
                        <p class="text-sm font-medium text-yellow-100">Total Procured</p>
                        <h2 class="text-3xl font-bold mt-2">50,780</h2>
                    </div>

                </div>
            </section>

            <!-- Line Chart for Analytics Data -->
            <section class="mb-10">
                <h2 class="text-2xl font-bold text-gray-700 mb-6">Analytics Data Trends</h2>
                <div class="chart-container">
                    <canvas id="dataPieChart"></canvas>
                </div>
            </section>
        </main>
    </div>

    <script>
        const savingsPieChart = new Chart(document.getElementById('savingsPieChart'), {
            type: 'pie',
            data: {
                labels: ['Amount', 'Fund Source'],
                datasets: [{
                    data: [30, 40],
                    backgroundColor: ['#34D399', '#FBBF24'],
                }]
            }
        });

        const dataPieChart = new Chart(document.getElementById('dataPieChart'), {
            type: 'pie',
            data: {
                labels: ['Total Procured', 'Total Budget Cost', 'Total Savings'],
                datasets: [{
                    data: [25, 30, 20], 
                    backgroundColor: ['#3B82F6', '#EF4444', '#F59E0B']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                }
            }
        });
    </script>
</body>

</html>
