<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Request</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS for Modal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>


<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">

    <div class="flex min-h-screen flex-col md:flex-row">
        <!-- Sidebar -->
        <?php include './partials/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="w-full md:w-3/4 lg:w-3/4 xl:w-3/4 p-6 mt-4 md:mt-0 md:ml-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Purchase Request List</h1>
         
                 <!-- Top-right button section -->
                 <div class="absolute top-20 right-4 flex space-x-2 flex-wrap md:flex-nowrap">
                <a href="" class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    <i class="fas fa-plus-circle mr-2"></i> Add 
</a>
                <a href="purchase_request.php"  class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    All
</a>
                <a href="purchase_approved.php"  class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    Approved
</a>
                <a href="purchase_rejected.php"  class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    Rejected
</a>
                <a href="purchase_pending.php"  class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    Pending
</a>
            </div>

            <!-- Stats Card Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                <!-- Total Number Card -->
                <div class="p-6 bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg text-white">
                    <p class="text-sm font-medium text-indigo-100">Total Number</p>
                    <h2 class="text-3xl font-bold">21</h2>
                </div>
            </div>

            <!-- Search and Add New Item Section -->
            <div class="flex justify-between mb-6 flex-wrap md:flex-nowrap">
                <div class="flex items-center space-x-2 ml-auto w-full md:w-auto">
                    <a href="add.php" class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                        <i class="fas fa-plus-circle mr-2"></i> Add 
</a>
                    <input type="text" class="px-4 py-2 w-full md:w-96 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search...">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Search</button>
                </div>
            </div>
</body>
</html>