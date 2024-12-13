<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice of Award</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen">
        <?php include './partials/sidebar.php'; ?>

        <div class="w-full md:w-3/4 lg:w-3/4 xl:w-3/4 p-6 mt-4 md:mt-0 md:ml-6">
            <h1 class="text-3xl font-semibold mb-6 text-gray-800">Notice of Award</h1>

            <form action="#" method="POST">

                <div class="mb-6">
                    <label for="project_title" class="block text-gray-700 font-medium">Name of the Authorized Representative:</label>
                    <input type="text"  class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="project_title" class="block text-gray-700 font-medium">Designation:</label>
                    <input type="text"  class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="project_title" class="block text-gray-700 font-medium">Company Name:</label>
                    <input type="text" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="project_title" class="block text-gray-700 font-medium">Project Title:</label>
                    <input type="text" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="project_title" class="block text-gray-700 font-medium">Contract Amount in Words:</label>
                    <input type="text" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>


                <div class="mb-6">
                    <label for="project_title" class="block text-gray-700 font-medium">Contract Amount in Figures:</label>
                    <input type="text" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>


                <div class="mb-6">
                    <label for="project_title" class="block text-gray-700 font-medium">PhilGEPS Reference Number:</label>
                    <input type="text" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
               
                <button type="submit" class="bg-blue-600 text-white py-3 px-8 rounded-md shadow-lg hover:bg-blue-700 transition duration-300">Add Signature</button>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-600 text-white py-3 px-8 rounded-md shadow-lg hover:bg-blue-700 transition duration-300">Save</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


</body>

</html>
