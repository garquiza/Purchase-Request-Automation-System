<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR View</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen">
        <?php include './partials/sidebar.php'; ?>

        <div class="flex-1 shadow-xl rounded-lg p-8 ml-1 mt-10">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-semibold text-gray-800">Purchase Request</h2>
                <div class="flex gap-4">
                    <button
                        class="bg-blue-600 text-white px-6 py-2 rounded-md text-lg hover:bg-blue-700 focus:outline-none flex items-center gap-2">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <button
                        class="bg-green-600 text-white px-6 py-2 rounded-md text-lg hover:bg-green-700 focus:outline-none flex items-center gap-2">
                        <i class="fas fa-download"></i> Download
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="department" class="text-sm font-medium text-gray-600">Department:</label>
                    <p class="mt-1 text-gray-700">Lorem</p>
                </div>
                <div>
                    <label for="pr_no" class="text-sm font-medium text-gray-600">PR No.:</label>
                    <p class="mt-1 text-gray-700">Lorem</p>
                </div>
                <div>
                    <label for="section" class="text-sm font-medium text-gray-600">Section:</label>
                    <p class="mt-1 text-gray-700">Lorem</p>
                </div>
                <div>
                    <label for="sai_no" class="text-sm font-medium text-gray-600">SAI No.:</label>
                    <p class="mt-1 text-gray-700">Lorem</p>
                </div>
            </div>

            <div class="overflow-x-auto mb-8">
                <table class="w-full table-auto border-collapse rounded-lg shadow-md bg-white">
                    <thead class="bg-gray-100">
                        <tr class="text-left text-sm text-gray-600">
                            <th class="px-4 py-3 border-b border-gray-300">Item No.</th>
                            <th class="px-4 py-3 border-b border-gray-300">Unit</th>
                            <th class="px-4 py-3 border-b border-gray-300">Item Description</th>
                            <th class="px-4 py-3 border-b border-gray-300">Quantity</th>
                            <th class="px-4 py-3 border-b border-gray-300">Unit Cost</th>
                            <th class="px-4 py-3 border-b border-gray-300">Total Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">Lorem</td>
                            <td class="px-4 py-3">Lorem</td>
                            <td class="px-4 py-3">Lorem</td>
                            <td class="px-4 py-3">Lorem</td>
                            <td class="px-4 py-3">Lorem</td>
                            <td class="px-4 py-3">Lorem</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="bg-gray-100">
                            <td colspan="5" class="text-right px-4 py-3 border-t border-gray-300">TOTAL AMOUNT:</td>
                            <td class="px-4 py-3 border-t border-gray-300">Lorem</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="purpose" class="text-sm font-medium text-gray-600">Purpose:</label>
                    <p class="mt-1 text-gray-700">Lorem</p>
                </div>
                <div>
                    <label for="requested_by" class="text-sm font-medium text-gray-600">Requested by:</label>
                    <p class="mt-1 text-gray-700">Lorem</p>
                </div>
                <div>
                    <label for="approved_by" class="text-sm font-medium text-gray-600">Approved by:</label>
                    <p class="mt-1 text-gray-700">Lorem</p>
                </div>
            </div>

            <div class="flex justify-end gap-4">
                <button
                    class="bg-blue-600 text-white px-6 py-2 rounded-md text-lg hover:bg-blue-700 focus:outline-none transition duration-200 ease-in-out">Save</button>
                <button
                    class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md text-lg hover:bg-gray-400 focus:outline-none transition duration-200 ease-in-out">Cancel</button>
            </div>
        </div>
    </div>
</body>

</html>
