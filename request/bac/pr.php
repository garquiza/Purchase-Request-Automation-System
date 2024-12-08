<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Request</title>
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
        <div class="w-full md:w-3/4 lg:w-3/4 xl:w-3/4 p-6 mt-4 md:mt-0 md:ml-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Purchase Request List</h1>

            <section class="mb-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">


                    <div class="p-6 bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg shadow-lg text-white transition-transform transform hover:scale-105 flex flex-col justify-between">
                        <h3 class="text-3xl font-bold mt-2">Total Number: </h3>
                    </div>
                </div>
            </section>

            <!-- Top-right button section -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex space-x-2">

                    <a href="ppmp.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">All</a>
                    <a href="ppmp_approved.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Approved</a>
                    <a href="ppmp_rejected.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Rejected</a>
                    <a href="ppmp_pending.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Pending</a>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="text" class="px-4 py-2 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search...">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Search</button>
                </div>
            </div>

            <!-- Procurement Plan Table -->
            <div class="overflow-x-auto mb-6 shadow-md rounded-lg">
                <table class="w-full border-collapse text-sm">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr class="border-b border-gray-300">
                            <th class="border p-3 text-left">PR No.</th>
                            <th class="border p-3 text-left">Purpose</th>
                            <th class="border p-3 text-left">Approver</th>
                            <th class="border p-3 text-left">Date Submitted</th>
                            <th class="border p-3 text-left">Status</th>
                            <th class="border p-3 text-left">PR Process</th>
                            <th class="border p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even:bg-gray-50 hover:bg-gray-200 transition-colors duration-200 border-b border-gray-300">
                            <td class="border p-3">Lorem</td>
                            <td class="border p-3">Lorem</td>
                            <td class="border p-3">Lorem</td>
                            <td class="border p-3">Lorem</td>
                            <td class="border p-3">Lorem</td>
                            <td class="border p-3">Lorem</td>
                            <td class="border p-3 text-center space-x-3">
                                <button class="text-blue-500 hover:text-blue-600"><i class="bi bi-download"></i></button>
                                <a href="pr_view.php" class="text-blue-500 hover:text-blue-600"><i class="bi bi-eye-fill"></i></a>
                                <button class="text-blue-500 hover:text-blue-600"><i class="fas fa-edit"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>



        </div>
    </div>


    </div>

    </form>