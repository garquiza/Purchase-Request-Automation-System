<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen">
        <?php include './partials/sidebar.php'; ?>

        <div class="flex-1 p-10 max-w-5xl ">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Resolution</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 ml-60">

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Name of Supplier:</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-base">
                </div>

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Description of Goods/Service:</label>
                    <textarea rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-base"></textarea>
                </div>

                <div class="col-span-2">
                    <label class="block text-lg font-medium text-gray-700 mb-2">Total Amount in Words and Figures:</label>
                    <textarea rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-base"></textarea>
                </div>

                <h2 class="text-2xl font-semibold mt-6 mb-4 text-gray-800 col-span-2">Whereas:</h2>
                <div class="space-y-4 col-span-2">
                    <div class="space-y-2">
                        <textarea rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-base"></textarea>
                        <div class="flex space-x-4 mt-4">
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg w-full sm:w-auto">
                                ADD TEXT
                            </button>
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg w-full sm:w-auto">
                                ADD TABLE
                            </button>
                        </div>
                    </div>
                </div>

                <h2 class="text-2xl font-semibold mt-6 mb-4 text-gray-800 col-span-2">It is hereby resolved that:</h2>
                <div class="space-y-4 col-span-2">
                    <div class="space-y-2">
                        <textarea rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-base"></textarea>
                        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg w-full sm:w-auto mt-4">
                            ADD TEXT
                        </button>
                    </div>
                </div>

                <div class="mt-8 text-center col-span-2">
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg w-full sm:w-auto">
                        SAVE
                    </button>
                </div>

            </div>
        </div>

    </div>

</body>
</html>
