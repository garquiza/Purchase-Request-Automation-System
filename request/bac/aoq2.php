<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract of Quotation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen">
        <?php include './partials/sidebar.php'; ?>

        <div class="container mx-auto p-8 max-w-7xl relative mt-10">
            <h1 class="text-4xl font-semibold text-center text-gray-800 mb-8">ABSTRACT OF QUOTATION</h1>

            <div class="absolute top-8 right-8">
                <button class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-6 rounded-md shadow-md">
                    + ADD Company
                </button>
            </div>

            <div class="overflow-x-auto mb-8">
                <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-medium text-gray-700">TUP Specification</th>
                            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-medium text-gray-700">Quantity</th>
                            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-medium text-gray-700">Unit</th>
                            <th colspan="2" class="border border-gray-300 px-6 py-3 text-left text-sm font-medium text-gray-700">Company Name</th>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 px-6 py-3 text-sm text-gray-600"></th>
                            <th class="border border-gray-300 px-6 py-3 text-sm text-gray-600"></th>
                            <th class="border border-gray-300 px-6 py-3 text-sm text-gray-600"></th>
                            <th class="border border-gray-300 px-6 py-3 text-sm text-gray-600">Bidders Specifications</th>
                            <th class="border border-gray-300 px-6 py-3 text-sm text-gray-600">Price</th>
                            <th class="border border-gray-300 px-6 py-3 text-sm text-gray-600">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-6 py-4 text-sm text-gray-700"></td>
                            <td class="border border-gray-300 px-6 py-4 text-sm text-gray-700"></td>
                            <td class="border border-gray-300 px-6 py-4 text-sm text-gray-700"></td>
                            <td class="border border-gray-300 px-6 py-4 text-sm text-gray-700"></td>
                            <td class="border border-gray-300 px-6 py-4 text-sm text-gray-700"></td>
                            <td class="border border-gray-300 px-6 py-4 text-sm text-gray-700"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="border border-gray-300 px-6 py-4 text-sm font-medium text-right text-gray-700">Total:</td>
                            <td colspan="2" class="border border-gray-300 px-6 py-4 text-sm text-gray-700"></td>
                            <td colspan="2" class="border border-gray-300 px-6 py-4 text-sm text-gray-700"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Prepared By:</label>

                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md shadow-md">
                        + ADD SIGNATURE
                    </button>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Verified By:</label>

                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md shadow-md">
                        + ADD SIGNATURE
                    </button>
                </div>
            </div>

            <div class="mt-8 text-center">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md shadow-md">
                    SAVE
                </button>
            </div>
        </div>

</body>

</html>