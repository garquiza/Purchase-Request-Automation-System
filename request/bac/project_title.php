<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Procurement Plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen flex-col md:flex-row">
        
        <?php include './partials/sidebar.php'; ?>

        <div class="w-full md:w-3/4 md:ml-6 rounded-lg p-6 mt-4 md:mt-0">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Project Title</h1>

            <div class="overflow-x-auto max-w-full rounded-lg mb-6">
                <table class="w-full border-collapse border border-gray-300 bg-white shadow-md rounded-lg">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="border border-gray-300 p-3 text-left">CODE</th>
                            <th class="border border-gray-300 p-3 text-left">General Description</th>
                            <th class="border border-gray-300 p-3 text-left">Quantity / Size</th>
                            <th class="border border-gray-300 p-3 text-left">Estimated Budget</th>
                            <th class="border border-gray-300 p-3 text-left">Mode of Procurement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even:bg-gray-50 hover:bg-gray-200 transition-colors duration-200">
                            <td class="border border-gray-300 p-3">Lorem ipsum dolor sit amet.</td>
                            <td class="border border-gray-300 p-3">Lorem ipsum dolor sit amet.</td>
                            <td class="border border-gray-300 p-3">Lorem ipsum dolor sit amet.</td>
                            <td class="border border-gray-300 p-3">Lorem ipsum dolor sit amet.</td>
                            <td class="border border-gray-300 p-3">Lorem ipsum dolor sit amet.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-12 overflow-x-auto max-w-full rounded-lg">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Monthly Schedule of Activities</h2>
                <table class="w-full border border-gray-300 bg-white shadow-md rounded-lg">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700 text-center">
                            <th class="p-4 border-b border-gray-300">January</th>
                            <th class="p-4 border-b border-gray-300">February</th>
                            <th class="p-4 border-b border-gray-300">March</th>
                            <th class="p-4 border-b border-gray-300">April</th>
                            <th class="p-4 border-b border-gray-300">May</th>
                            <th class="p-4 border-b border-gray-300">June</th>
                            <th class="p-4 border-b border-gray-300">July</th>
                            <th class="p-4 border-b border-gray-300">August</th>
                            <th class="p-4 border-b border-gray-300">September</th>
                            <th class="p-4 border-b border-gray-300">October</th>
                            <th class="p-4 border-b border-gray-300">November</th>
                            <th class="p-4 border-b border-gray-300">December</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-gray-600 text-center even:bg-gray-50">
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                            <td class="p-4 border-b border-gray-300">Lorem Ipsum</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-12">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Total Budget: </h2>
                <h3 class="text-xl  mb-4 text-gray-800">Prepared by: </h3>
                <h3 class="text-xl  mb-4 text-gray-800">Submitted by: </h3>
            </div>
        </div>
    </div>
</body>
</html>