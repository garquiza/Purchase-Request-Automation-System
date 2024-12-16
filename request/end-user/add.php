<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Purchase Request (PR)</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <?php include './partials/sidebar.php'; ?>
        <div class="flex-1 p-8">


            <div class="w-full max-w-3xl bg-white p-5 rounded-xl shadow-2xl ml-60 mt-10">
                <h1 class="text-3xl font-semibold text-center text-black-800 mb-12">Create Purchase Request (PR)</h1>

                <form id="addItemForm" class="space-y-10">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div>
                            <label for="department" class="block text-lg font-medium text-gray-700">Department:</label>
                            <input type="text" class="w-full p-5 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="department" name="department" required>
                        </div>
                        <div>
                            <label for="section" class="block text-lg font-medium text-gray-700">Section:</label>
                            <textarea class="w-full p-5 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="section" name="section" rows="4" required></textarea>
                        </div>
                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div>
                            <label for="itemDescription" class="block text-lg font-medium text-gray-700">Item Description:</label>
                            <input type="text" class="w-full p-5 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="itemDescription" name="itemDescription" required>
                        </div>
                        <div>
                            <label for="quantity" class="block text-lg font-medium text-gray-700">Quantity:</label>
                            <input type="number" class="w-full p-5 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="quantity" name="quantity" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div>
                            <label for="unitCost" class="block text-lg font-medium text-gray-700">Unit Cost:</label>
                            <input type="number" class="w-full p-5 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="unitCost" name="unitCost" required>
                        </div>
                        <div>
                            <label for="totalCost" class="block text-lg font-medium text-gray-700">Total Cost:</label>
                            <input type="number" class="w-full p-5 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="totalCost" name="totalCost" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-10">
                        <div>
                            <label for="purpose" class="block text-lg font-medium text-gray-700">Purpose:</label>
                            <input type="text" class="w-full p-5 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="purpose" name="purpose" required>
                        </div>
                    </div>

                    <div class="flex justify-end mt-10">
                        <button type="submit" class="bg-blue-600 text-white text-lg py-2 px-8 rounded-lg focus:ring-4 focus:ring-blue-500 hover:bg-blue-700 transition duration-300">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>