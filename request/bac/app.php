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

            <!-- Procurement Plan Table -->
            <div class="overflow-x-auto rounded-lg">
                <table class="w-full border-collapse border border-gray-300 bg-white shadow-md rounded-lg">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="border border-gray-300 p-3 text-left">CODE (PAP)</th>
                            <!-- Clickable Procurement Project Header -->
                  
                            <th class="border border-gray-300 p-3 text-left"><div x-data="{ open: false }">
        <!-- Procurement Project Link -->
        <a href="javascript:void(0)" @click="open = true" class="text-indigo-600 hover:text-indigo-800">PROCUREMENT PROJECT</a>
        <!-- Modal -->
        <div x-show="open" x-transition @keydown.window="if (event.key === 'Escape') open = false"
            class="fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75">
            <div class="bg-white p-6 rounded-lg shadow-xl w-96">
                <h2 class="text-2xl font-semibold mb-4">Procurement Project Details</h2>
                <p>Additional details and content for the selected project will appear here.</p>
                <div class="flex justify-end mt-4">
                    <button @click="open = false" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Close</button>
                </div>
            </div>
        </div>
    </div>
</th>
                            <th class="border border-gray-300 p-3 text-left">PMO/End-User</th>
                            <th class="border border-gray-300 p-3 text-left">is this an Early Procurement Activity<br>(Yes/No)</th>
                            <th class="border border-gray-300 p-3 text-left">MODE OF PROCUREMENT</th>
                            <th colspan="4" class="border border-gray-300 p-3 text-center">SCHEDULE FOR EACH PROCUREMENT ACTIVITY
                            <th class="border border-gray-300 p-3 text-left">Source of Funds</th>
                            <th colspan="3" class="border border-gray-300 p-3 text-center">Estimated Budget (PHP)</th>
                            <th class="border border-gray-300 p-3 text-left">Remarks</th>
                            <th class="border border-gray-300 p-3 text-left">Action</th>
                        </tr>
                        <tr class="bg-gray-100 text-gray-600">
                            <th class="border border-gray-300 p-2"></th>
                            <th class="border border-gray-300 p-2"></th>
                            <th class="border border-gray-300 p-2"></th>
                            <th class="border border-gray-300 p-2"></th>
                            <th class="border border-gray-300 p-2"></th>
                            <th class="border border-gray-300 p-2">Advertisement/Posting of IB/REI</th>
                            <th class="border border-gray-300 p-2">Submission of Opening of Bids</th>
                            <th class="border border-gray-300 p-2">Notice of Award</th>
                            <th class="border border-gray-300 p-2">Contract Signing</th>
                            <th class="border border-gray-300 p-2"></th>
                            <th class="border border-gray-300 p-2">Total</th>
                            <th class="border border-gray-300 p-2">MOOE</th>
                            <th class="border border-gray-300 p-2">CO</th>
                            <th class="border border-gray-300 p-2"></th>
                            <th class="border border-gray-300 p-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Row -->
                        <tr class="even:bg-gray-50 hover:bg-gray-200 transition-colors duration-200">
                            <td class="border border-gray-300 p-3">APP</td>
                            <td class="border border-gray-300 p-3">Project 1</td>
                            <td class="border border-gray-300 p-3">User</td>
                            <td class="border border-gray-300 p-3 text-center">
                                <button class="text-green-500 hover:text-green-600"><i class="fas fa-check"></i></button>
                                <button class="text-red-500 hover:text-red-600 ml-2"><i class="fas fa-times"></i></button>
                            </td>
                            <td class="border border-gray-300 p-3"><input type="date" class="border rounded p-2 w-full focus:ring-2 focus:ring-blue-300"></td>
                            <td class="border border-gray-300 p-3"><input type="date" class="border rounded p-2 w-full focus:ring-2 focus:ring-blue-300"></td>
                            <td class="border border-gray-300 p-3"><input type="date" class="border rounded p-2 w-full focus:ring-2 focus:ring-blue-300"></td>
                            <td class="border border-gray-300 p-3"><input type="date" class="border rounded p-2 w-full focus:ring-2 focus:ring-blue-300"></td>
                            <td class="border border-gray-300 p-3"><input type="date" class="border rounded p-2 w-full focus:ring-2 focus:ring-blue-300"></td>
                            <td class="border border-gray-300 p-3">Source</td>
                            <td class="border border-gray-300 p-3 text-center">₱500,000</td>
                            <td class="border border-gray-300 p-3 text-center">₱300,000</td>
                            <td class="border border-gray-300 p-3 text-center">₱200,000</td>
                            <td class="border border-gray-300 p-3">Brief Description</td>
                            <td class="border border-gray-300 p-3 text-center space-x-3">
                                <button class="text-blue-500 hover:text-blue-600"><i class="fas fa-edit"></i></button>
                                <button class="text-red-500 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="flex justify-center mt-6">
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg">
                    <i class="fas fa-save"></i> Save
                </button>
            </div>
        </div>
    </div>
</body>
</html>