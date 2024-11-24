<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Alpine.js for Dropdown Toggle -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body>
<div x-show="open" x-cloak @click.away="open = false" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                            <div @click.stop class="bg-white p-8 rounded-lg shadow-xl w-full max-w-md md:max-w-lg lg:max-w-2xl">
                                <!-- Close Button -->
                                <button @click="open = false" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>

                                <h3 class="text-2xl font-semibold text-gray-700">Total Budget Cost: #</h3>

                                <div class="mt-6">
                                <p class="text-gray-700 font-bold">
    Budget Amount: 
    <input type="number" value="120000" class="text-lg font-semibold border border-gray-300 rounded px-2 py-1" />
</p>
                                    <p class="text-gray-700 font-bold mt-2">Budget Per Sector:</p>

                                    <!-- Budget Per Sector Grid Layout -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                                        <div class="bg-green-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">COS</p>
                                            <p class="text-lg font-semibold text-green-600">120,000</p>
                                        </div>
                                        <div class="bg-yellow-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">CLA</p>
                                            <p class="text-lg font-semibold text-yellow-600">120,000</p>
                                        </div>
                                        <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">CAFA</p>
                                            <p class="text-lg font-semibold text-blue-600">120,000</p>
                                        </div>
                                        <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">CIT</p>
                                            <p class="text-lg font-semibold text-blue-600">120,000</p>
                                        </div>
                                        <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">COE</p>
                                            <p class="text-lg font-semibold text-blue-600">120,000</p>
                                        </div>
                                        <div class="bg-yellow-100 p-4 rounded-lg shadow-md">
                                            <p class="text-gray-700 font-bold">CIE</p>
                                            <p class="text-lg font-semibold text-yellow-600">120,000</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>
</body>
</html>