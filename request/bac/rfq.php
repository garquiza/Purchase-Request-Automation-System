<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for Quotation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">


    <div class="flex min-h-screen">
        <?php include './partials/sidebar.php' ?>
        <div class="bg-white shadow-md rounded-md p-6">



            <h2 class="text-2xl font-bold mb-4">REQUEST FOR QUOTATION</h2>

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

            <table class="w-full mt-6 border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">

                        <th class="border border-gray-300 px-4 py-2 text-left">Unit Cost</th>

                        <th class="border border-gray-300 px-4 py-2 text-left">Bidder's Technical Specification</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Bidder's Offer</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Quoted Price </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Total Quoted Price <br>(Per Item)</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Total Quoted Amount</th>
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
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8" class="border border-gray-300 px-4 py-2 text-right">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Row</button>
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Save</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
</body>

</html>