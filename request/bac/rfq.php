<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request For Quotation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen">
        <?php include './partials/sidebar.php'; ?>
        <div class="bg-white shadow-md rounded-md p-6 flex-1 overflow-auto">

            <h1 class="text-2xl font-bold mb-4">REQUEST FOR QUOTATION</h1>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Project Title:</label>
                    <input type="text" class="border border-gray-300 rounded-md p-2 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">End-User:</label>
                    <input type="text" class="border border-gray-300 rounded-md p-2 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Purchase Request No.:</label>
                    <input type="text" class="border border-gray-300 rounded-md p-2 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Deadline of Submission:</label>
                    <input type="text" class="border border-gray-300 rounded-md p-2 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Date Created:</label>
                    <input type="text" class="border border-gray-300 rounded-md p-2 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Mode of Procurement:</label>
                    <input type="text" class="border border-gray-300 rounded-md p-2 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Approved Budget for the Contract:</label>
                    <input type="text" class="border border-gray-300 rounded-md p-2 w-full" />
                </div>
            </div>

            <div class="mt-6 overflow-auto max-h-64">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2 text-left">No.</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Qty.</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Unit</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">General Name of the Item</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Required Technical Specification</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Unit Cost</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Bidder's Offer Specification</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Quoted Unit Price</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Total Quoted Price <br>(Per Item)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                            <td class="border border-gray-300 px-4 py-2"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" /></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9" class="border border-gray-300 px-4 py-2 text-right">
                                <button class="bg-green-600 text-white font-bold py-2 px-4 rounded">Add Row</button>
                                <button class="bg-blue-600 text-white font-bold py-2 px-4 rounded">Add Signature</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <button type="submit" class="bg-blue-600 text-white py-3 px-8 rounded-md shadow-lg hover:bg-blue-700 transition duration-300 mt-6">Save</button>
        </div>
    </div>

</body>

</html>