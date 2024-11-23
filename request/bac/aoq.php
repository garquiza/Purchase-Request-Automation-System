<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AOQ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen">

        <?php include './partials/sidebar.php'; ?>

        <div class="flex-grow flex items-center justify-center">
            <form class="w-full max-w-lg p-6 bg-white rounded-lg shadow-lg">
                <h1 class="text-3xl font-bold mb-6 text-gray-800">Abstract of Quotation</h1>

                <div class="mb-4">
                    <label for="project" class="block text-gray-700 font-semibold">Project:</label>
                    <input type="text" id="project" name="project" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Project">
                </div>

                <div class="mb-4">
                    <label for="projectlocation" class="block text-gray-700 font-semibold">Project Location:</label>
                    <input type="text" id="projectlocation" name="projectlocation" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Project Location">
                </div>

                <div class="mb-4">
                    <label for="implementingoffice" class="block text-gray-700 font-semibold">Implementing Office:</label>
                    <input type="text" id="implementingoffice" name="implementingoffice" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Implementing Office">
                </div>

                <div class="mb-4">
                    <label for="budget" class="block text-gray-700 font-semibold">Approved Budget for the Contract:</label>
                    <input type="text" id="budget" name="budget" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Budget">
                </div>

                <div class="flex items-center justify-between mt-6">
                    <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Save</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>