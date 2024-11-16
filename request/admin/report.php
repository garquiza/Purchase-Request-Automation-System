<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Logs</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine.js CDN for dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">History Logs | Report Logs</h1>

            <!-- Buttons Section -->
            <div class="flex space-x-4 mb-6">
                <!-- Button 1 -->
                <a href="history.php" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">All</a>
                <!-- Button 2 -->
                <a href="audit.php" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition">Audit Trail</a>
                <!-- Button 3 -->
                <a href="report.php" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition">Report Logs</a>
            </div>

            <div class="bg-white shadow-md rounded-lg mt-6">
                <ul class="divide-y divide-gray-200">
                    <!-- Sample Log Entry -->
                    <li class="px-6 py-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">John Doe PR Has Been Approved.</h3>
                            </div>
                            <span class="text-xs text-gray-400">2024-11-07 14:35:12</span>
                        </div>
                    </li>

                    <!-- Another Sample Log Entry -->
                    <li class="px-6 py-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">JaneDoe PPMP Has Been Declined.</h3>
                            </div>
                            <span class="text-xs text-gray-400">2024-11-07 14:40:52</span>
                        </div>
                    </li>

                    <!-- Add more log entries here -->
                </ul>
            </div>
        </main>
    </div>

</body>
</html>