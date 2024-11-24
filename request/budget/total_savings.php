<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Savings Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            width: 700px;
            height: 700px;
            max-width: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex justify-center items-center chart-container">
        <div class="flex flex-col items-center">
            <div class="bg-blue-500 text-white text-lg font-semibold rounded-md p-2 mb-4">
                Total Savings Details
            </div>

            <!-- Table for Savings Details -->
            <table class="min-w-full table-auto mt-4 border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2 text-left">Fund Source</th>
                        <th class="px-4 py-2 text-left">Total ABC</th>
                        <th class="px-4 py-2 text-left">Amount</th>
                        <th class="px-4 py-2 text-left">Savings</th>
                    </tr>
                </thead>
                <tr class="bg-green-100">
                    <td class="px-4 py-2 font-semibold">Lorem</td>
                    <td class="px-4 py-2 font-semibold">120,000</td>
                    <td class="px-4 py-2 font-semibold">50,000</td>
                    <td class="px-4 py-2 font-semibold">50,000</td>
                </tr>
            </table>
</body>
</html>