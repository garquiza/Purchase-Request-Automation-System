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
        <?php include './partials/sidebar.php'; ?>



 <div class="w-full md:w-3/4 lg:w-3/4 xl:w-3/4 p-6 mt-4 md:mt-0 md:ml-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">PPMP List</h1>

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
                    <a  href="ppmp_pending.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Pending</a>
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
                        <th class="border p-3 text-left">
    <a href="project_title.php" class="text-blue-600 hover:text-blue-800">Project Title</a>
</th>

                            <th class="border p-3 text-left">Approver</th>
                            <th class="border p-3 text-left">Date</th>
                            <th class="border p-3 text-left">Status</th>
                            <th class="border p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even:bg-gray-50 hover:bg-gray-200 transition-colors duration-200 border-b border-gray-300">
                            <td class="border p-3">Lorem</td>
                            <td class="border p-3">Lorem</td>
                            <td class="border p-3">Lorem</td>     
                             <td class="border p-3">Lorem</td>
                            <td class="border p-3 text-center space-x-3">
                                <button class="text-blue-500 hover:text-blue-600"><i class="bi bi-download"></i></button>
                                <button class="text-blue-500 hover:text-blue-600"><i class="bi bi-eye-fill"></i></button>
                               

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addFormModal" tabindex="-1" aria-labelledby="addFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="addFormModalLabel">Create PPMP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addItemForm">
                        <div class="mb-3">
                            <label for="department" class="form-label">Department:</label>
                            <input type="text" class="form-control" id="department" name="department" required>
                        </div>
                        <div class="mb-3">
                            <label for="section" class="form-label">Year:</label>
                            <textarea class="form-control" id="section" name="section" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="itemDescription" class="form-label">Project Title:</label>
                            <input type="text" class="form-control" id="itemDescription" name="itemDescription" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Code:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                        <div class="mb-3">
                            <label for="unitCost" class="form-label">General Description:</label>
                            <input type="number" class="form-control" id="unitCost" name="unitCost" required>
                        </div>
                        <div class="mb-3">
                            <label for="totalCost" class="form-label">Quantity Size:</label>
                            <input type="number" class="form-control" id="totalCost" name="totalCost" required>
                        </div>
                        <div class="mb-3">
                            <label for="purpose" class="form-label">Estimated Budget:</label>
                            <input type="text" class="form-control" id="purpose" name="purpose" required>
                        </div>

                        <!-- Schedule / Milestone of Activities -->
                        <div class="max-w-lg mx-auto p-6 bg-white border rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold mb-6 text-center">Schedule / Milestone of Activities</h2>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="jan" name="months[]" value="January" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="jan" class="ml-2 text-lg">January</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="feb" name="months[]" value="February" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="feb" class="ml-2 text-lg">February</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="mar" name="months[]" value="March" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="mar" class="ml-2 text-lg">March</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="apr" name="months[]" value="April" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="apr" class="ml-2 text-lg">April</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="may" name="months[]" value="May" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="may" class="ml-2 text-lg">May</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="jun" name="months[]" value="June" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="jun" class="ml-2 text-lg">June</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="jul" name="months[]" value="July" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="jul" class="ml-2 text-lg">July</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="aug" name="months[]" value="August" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="aug" class="ml-2 text-lg">August</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="sep" name="months[]" value="September" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="sep" class="ml-2 text-lg">September</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="oct" name="months[]" value="October" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="oct" class="ml-2 text-lg">October</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="nov" name="months[]" value="November" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="nov" class="ml-2 text-lg">November</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="dec" name="months[]" value="December" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="dec" class="ml-2 text-lg">December</label>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>