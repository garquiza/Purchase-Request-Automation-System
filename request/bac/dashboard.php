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

                    <!-- Card: Approved -->
                    <div class="p-6 bg-gradient-to-r from-green-500 to-green-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between">
                        <p class="text-sm font-medium text-green-100">Approved</p>
                        <h2 class="text-3xl font-bold mt-2">50,780</h2>
                    </div>

                    <!-- Card: Rejected -->
                    <div class="p-6 bg-gradient-to-r from-red-500 to-red-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between">
                        <p class="text-sm font-medium text-red-100">Rejected</p>
                        <h2 class="text-3xl font-bold mt-2">50,780</h2>
                    </div>

                    <!-- Card: Total Savings with Modal -->
                    <div x-data="{ open: false }">
                        <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between" x-on:click="open = true">
                            <p class="text-sm font-medium text-yellow-100">Total Savings</p>
                            <h2 class="text-3xl font-bold mt-2">50,780</h2>
                        </div>

                        <!-- Modal Popup for Total Savings Details -->
                        <div x-show="open" x-cloak @click.away="open = false" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                            <div @click.stop class="bg-white p-8 rounded-lg shadow-xl w-full max-w-md md:max-w-lg lg:max-w-2xl">
                                <!-- Close Button -->
                                <button @click="open = false" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>

                                <h3 class="text-2xl font-semibold text-gray-700">Total Savings: #</h3>

                                <!-- Category Section -->
                                <table class="min-w-full table-auto mt-4 border-collapse">
                                    <thead>
                                        <tr class="bg-gray-200 text-gray-700">
                                            <th class="px-4 py-2 text-left">Fund Source</th>
                                            <th class="px-4 py-2 text-left">Total ABC</th>
                                            <th class="px-4 py-2 text-left">Amount</th>
                                            <th class="px-4 py-2 text-left">Savings</th>
                                        </tr>
                                    </thead>
                                    <tr class="bg-green-100">
                                        <td class="px-4 py-2 font-semibold">Lorem</td>
                                        <td class="px-4 py-2 font-semibold">120,000</td>
                                        <td class="px-4 py-2 font-semibold">50,000</td>
                                        <td class="px-4 py-2 font-semibold">50,000</td>
                                    </tr>
                                </table>

                                <!-- Pie Chart -->
                                <div class="mt-6">
                                    <canvas id="savingsPieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card: Total Budget with Modal -->
                    <div x-data="{ open: false }">
                        <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between" x-on:click="open = true">
                            <p class="text-sm font-medium text-yellow-100">Total Budget</p>
                            <h2 class="text-3xl font-bold mt-2">50,780</h2>
                        </div>

                        <!-- Modal Popup for Budget Details -->
                        <div x-show="open" x-cloak @click.away="open = false" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                            <div @click.stop class="bg-white p-8 rounded-lg shadow-xl w-full max-w-md md:max-w-lg lg:max-w-2xl">
                                <button @click="open = false" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>

                                <h3 class="text-2xl font-semibold text-gray-700">Total Budget Cost: #</h3>

                                <div class="mt-6">
                                    <p class="text-gray-700 font-bold">Budget Amount: <span class="text-lg font-semibold">120,000</span></p>
                                    <p class="text-gray-700 font-bold mt-2">Budget Per Sector:</p>

                                    <!-- Budget Per Sector Grid Layout -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                                        <div class="bg-green-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">COS</p>
                                            <p class="text-lg font-semibold text-green-600">120,000</p>
                                        </div>
                                        <div class="bg-yellow-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">CLA</p>
                                            <p class="text-lg font-semibold text-yellow-600">120,000</p>
                                        </div>
                                        <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">CAFA</p>
                                            <p class="text-lg font-semibold text-blue-600">120,000</p>
                                        </div>
                                        <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">CIT</p>
                                            <p class="text-lg font-semibold text-blue-600">120,000</p>
                                        </div>
                                        <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">COE</p>
                                            <p class="text-lg font-semibold text-blue-600">120,000</p>
                                        </div>
                                        <div class="bg-yellow-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">CIE</p>
                                            <p class="text-lg font-semibold text-yellow-600">120,000</p>
                                        </div>
                                    </div>
                                </div>


                                <!-- Category Section -->
                                <table class="min-w-full table-auto mt-4 border-collapse">
                                    <thead>
                                        <tr class="bg-gray-200 text-gray-700">
                                            <th class="px-4 py-2 text-left">Category</th>
                                            <th class="px-4 py-2 text-left">Total Amount</th>
                                            <th class="px-4 py-2 text-left">Contract Amount</th>
                                        </tr>
                                    </thead>
                                    <tr class="bg-blue-100">
                                        <td class="px-4 py-2 font-semibold">Lorem</td>
                                        <td class="px-4 py-2 font-semibold">120,000</td>
                                        <td class="px-4 py-2 font-semibold">50,000</td>
                                    </tr>
                                </table>

                             
                            </div>
                        </div>
                    </div>



                    <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between" x-on:click="open = true">
                            <p class="text-sm font-medium text-yellow-100">Total Procured</p>
                            <h2 class="text-3xl font-bold mt-2">50,780</h2>
                        </div>

                        <div class="p-6 bg-gradient-to-r from-green-500 to-green-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between">
                        <p class="text-sm font-medium text-green-100">Abstract Pending PR</p>
                        <h2 class="text-3xl font-bold mt-2">50,780</h2>
                    </div>

                    <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between" x-on:click="open = true">
                            <p class="text-sm font-medium text-yellow-100">Proceed Pending PR</p>
                            <h2 class="text-3xl font-bold mt-2">50,780</h2>
                        </div>


                    <div class="p-6 bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between">
                        <p class="text-sm font-medium text-indigo-100">Award Pending PR</p>
                        <h2 class="text-3xl font-bold mt-2">2,120</h2>
                    </div>

                </div>
            </section>

            <!-- Line Chart for Analytics Data -->
            <section class="mb-10">
                <h2 class="text-2xl font-bold text-gray-700 mb-6">Analytics Data Trends</h2>
                <canvas id="lineChart"></canvas>
            </section>
        </main>
    </div>

    <script>
        // Pie Chart Configuration for Savings
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

       


        // Line Chart Configuration for Analytics Data
        const lineChart = new Chart(document.getElementById('lineChart'), {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'User Trends',
                    data: [10, 30, 40, 70, 90],
                    fill: false,
                    borderColor: '#2563EB',
                    tension: 0.1
                }]
            }
        });
    </script>
</body>

</html>
