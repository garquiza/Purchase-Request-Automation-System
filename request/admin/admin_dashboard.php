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
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
<!-- Sidebar and Main Content Container -->
<div class="flex h-screen">
<?php 
include 'sidebar.php';
?>
<!-- Main Content -->
<main class="flex-1 p-6 overflow-x-hidden">
    <header class="mb-8">
        <h1 class="text-3xl font-semibold text-gray-800">Data Analytics Overview</h1>
        <p class="text-gray-600">Insights into user trends, revenue, and more.</p>
    </header>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
        <div class="p-6 bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg shadow-lg text-white">
            <p class="text-sm font-medium text-indigo-100">Purchase Request</p>
            <h2 class="text-2xl font-bold">2,120</h2>
        </div>

        <div class="p-6 bg-gradient-to-r from-green-500 to-green-700 rounded-lg shadow-lg text-white">
            <p class="text-sm font-medium text-green-100">Approved</p>
            <h2 class="text-2xl font-bold">50,780</h2>
        </div>

        <div class="p-6 bg-gradient-to-r from-red-500 to-red-700 rounded-lg shadow-lg text-white">
            <p class="text-sm font-medium text-red-100">Rejected</p>
            <h2 class="text-2xl font-bold">50,780</h2>
        </div>

        <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-700 rounded-lg shadow-lg text-white">
            <p class="text-sm font-medium text-yellow-100">Total Savings</p>
            <h2 class="text-2xl font-bold">50,780</h2>
        </div>
    </div>

    <!-- Stats Cards (Additional) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
        <div class="p-6 bg-gradient-to-r from-purple-500 to-purple-700 rounded-lg shadow-lg text-white">
            <p class="text-sm font-medium text-purple-100">Total Procured</p>
            <h2 class="text-2xl font-bold">50,780</h2>
        </div>

       
        <div class="p-6 bg-gradient-to-r from-pink-500 to-pink-700 rounded-lg shadow-lg text-white">
            <p class="text-sm font-medium text-pink-100">Abstract Pending PR</p>
            <h2 class="text-2xl font-bold">50,780</h2>
        </div>

        <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-700 rounded-lg shadow-lg text-white">
            <p class="text-sm font-medium text-yellow-100">Proceed Pending PR</p>
            <h2 class="text-2xl font-bold">50,780</h2>
        </div>

        <div class="p-6 bg-gradient-to-r from-pink-500 to-pink-700 rounded-lg shadow-lg text-white">
            <p class="text-sm font-medium text-pink-100">Award Pending PR</p>
            <h2 class="text-2xl font-bold">50,780</h2>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Line Chart Card -->
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold text-gray-700">Revenue Over Time</h3>
            <!-- Line Chart -->
            <canvas id="revenueChart" class="mt-4 h-48 sm:h-64 md:h-72 bg-gray-200 rounded-lg"></canvas>
        </div>
    </div>
</main>
</div>

<script>
    // Line Chart: Revenue Over Time
    const revenueChart = new Chart(document.getElementById('revenueChart').getContext('2d'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue',
                data: [1200, 1500, 1800, 1300, 1700, 2000],
                borderColor: '#4F46E5',
                backgroundColor: 'rgba(79, 70, 229, 0.2)',
                fill: true,
                tension: 0.3
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
