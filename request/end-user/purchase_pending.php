<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">

    <div class="flex min-h-screen flex-col md:flex-row">
        <?php include './partials/sidebar.php'; ?>

        <div class="w-full md:w-3/4 lg:w-3/4 xl:w-3/4 p-6 mt-4 md:mt-0 md:ml-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Purchase Request Pending List</h1>

            <div class="absolute top-20 right-4 flex space-x-2 flex-wrap md:flex-nowrap">
                <a class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none" data-bs-toggle="modal" data-bs-target="#addFormModal">
                    <i class="fas fa-plus-circle mr-2"></i> Add
                </a>
                <a href="purchase_request.php" class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    All
                </a>
                <a href="purchase_approved.php" class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    Approved
                </a>
                <a href="purchase_rejected.php" class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    Rejected
                </a>
                <a href="purchase_pending.php" class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    Pending
                </a>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                <div class="p-6 bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg text-white">
                    <p class="text-sm font-medium text-indigo-100">Total Number</p>
                    <h2 class="text-3xl font-bold">21</h2>
                </div>
            </div>

            <div class="flex justify-between mb-6 flex-wrap md:flex-nowrap">
                <div class="flex items-center space-x-2 ml-auto w-full md:w-auto">
                    <button class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none" data-bs-toggle="modal" data-bs-target="#addFormModal">
                        <i class="fas fa-plus-circle mr-2"></i> Add
                    </button>
                    <input type="text" class="px-4 py-2 w-full md:w-96 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search...">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Search</button>
                </div>
            </div>

            <div class="overflow-x-auto mb-6">
                <table class="w-full border-collapse">
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
                            <td class="border p-3"></td>
                            <td class="border p-3 text-center space-x-3">
                                <button class="text-blue-500 hover:text-blue-600"><i class="bi bi-download"></i></button>
                                <button class="text-blue-500 hover:text-blue-600"><i class="bi bi-eye-fill"></i></button>
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

    <div class="modal fade" id="addFormModal" tabindex="-1" aria-labelledby="addFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="addFormModalLabel">Create PR</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addItemForm">
                        <div class="mb-3">
                            <label for="department" class="form-label">Department:</label>
                            <input type="text" class="form-control" id="department" name="department" required>
                        </div>
                        <div class="mb-3">
                            <label for="section" class="form-label">Section:</label>
                            <textarea class="form-control" id="section" name="section" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="itemDescription" class="form-label">Item Description:</label>
                            <input type="text" class="form-control" id="itemDescription" name="itemDescription" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                        <div class="mb-3">
                            <label for="unitCost" class="form-label">Unit Cost:</label>
                            <input type="number" class="form-control" id="unitCost" name="unitCost" required>
                        </div>
                        <div class="mb-3">
                            <label for="totalCost" class="form-label">Total Cost:</label>
                            <input type="number" class="form-control" id="totalCost" name="totalCost" required>
                        </div>
                        <div class="mb-3">
                            <label for="purpose" class="form-label">Purpose:</label>
                            <input type="text" class="form-control" id="purpose" name="purpose" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="addItemForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>