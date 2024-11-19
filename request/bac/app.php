<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Procurement Plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for modal functionality -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php include './partials/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="w-full md:w-3/4 md:ml-6 rounded-lg p-6 mt-4 md:mt-0">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Annual Procurement Plan</h1>

            <!-- Year and Buttons Section -->
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-xl font-semibold text-gray-700">Year: 
                    <select class="bg-gray-200 text-gray-700 border rounded px-4 py-2 ml-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <?php 
                        for ($year = 2020; $year <= 2050; $year++) {
                            echo "<option value='$year'>$year</option>";
                        }
                        ?>
                    </select>
                </h2>
                <div class="flex space-x-3">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg flex items-center space-x-2 transition-colors duration-200">
                        <i class="fas fa-download"></i>
                        <span>Download</span>
                    </button>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-lg flex items-center space-x-2 transition-colors duration-200">
                        <i class="fas fa-edit"></i>
                        <span>Edit</span>
                    </button>
                </div>
            </div>
</body>
</html>