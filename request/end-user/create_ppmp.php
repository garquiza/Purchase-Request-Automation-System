<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PPMP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">

    <div class="flex min-h-screen flex-col md:flex-row">
        <?php include './partials/sidebar.php'; ?>

        <div class="w-full max-w-4xl bg-white p-5 rounded-xl shadow-2xl ml-60 mt-20">
            <h1 class="text-3xl font-semibold text-center text-gray-800 mb-8">Create PPMP (PPMP)</h1>

            <form id="addItemForm" class="space-y-10">

                <!-- Department & Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                    <div>
                        <label for="department" class="block text-lg font-medium text-gray-700">Department:</label>
                        <input type="text" class="w-full p-4 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="department" name="department" required>
                    </div>
                    <div>
                        <label for="section" class="block text-lg font-medium text-gray-700">Section:</label>
                        <textarea class="w-full p-4 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="section" name="section" rows="4" required></textarea>
                    </div>
                </div>

                <!-- Item Description & Quantity -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                    <div>
                        <label for="itemDescription" class="block text-lg font-medium text-gray-700">Item Description:</label>
                        <input type="text" class="w-full p-4 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="itemDescription" name="itemDescription" required>
                    </div>
                    <div>
                        <label for="quantity" class="block text-lg font-medium text-gray-700">Quantity:</label>
                        <input type="number" class="w-full p-4 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="quantity" name="quantity" required>
                    </div>
                </div>

                <!-- Unit Cost & Total Cost -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                    <div>
                        <label for="unitCost" class="block text-lg font-medium text-gray-700">Unit Cost:</label>
                        <input type="number" class="w-full p-4 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="unitCost" name="unitCost" required>
                    </div>
                    <div>
                        <label for="totalCost" class="block text-lg font-medium text-gray-700">Total Cost:</label>
                        <input type="number" class="w-full p-4 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="totalCost" name="totalCost" required>
                    </div>
                </div>

                <!-- Purpose -->
                <div class="grid grid-cols-1 gap-8 mt-6">
                    <div>
                        <label for="purpose" class="block text-lg font-medium text-gray-700">Purpose:</label>
                        <input type="text" class="w-full p-4 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition duration-300" id="purpose" name="purpose" required>
                    </div>
                </div>

                <!-- Months Checkboxes -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="jan" name="months[]" value="January" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="jan" class="ml-2 text-lg">January</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="feb" name="months[]" value="February" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="feb" class="ml-2 text-lg">February</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="mar" name="months[]" value="March" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="mar" class="ml-2 text-lg">March</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="apr" name="months[]" value="April" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="apr" class="ml-2 text-lg">April</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="may" name="months[]" value="May" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="may" class="ml-2 text-lg">May</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="jun" name="months[]" value="June" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="jun" class="ml-2 text-lg">June</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="jul" name="months[]" value="July" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="jul" class="ml-2 text-lg">July</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="aug" name="months[]" value="August" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="aug" class="ml-2 text-lg">August</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="sep" name="months[]" value="September" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="sep" class="ml-2 text-lg">September</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="oct" name="months[]" value="October" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="oct" class="ml-2 text-lg">October</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="nov" name="months[]" value="November" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="nov" class="ml-2 text-lg">November</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="dec" name="months[]" value="December" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="dec" class="ml-2 text-lg">December</label>
                    </div>
                </div>

                <div class="flex justify-end mt-12">
                    <button type="submit" class="bg-blue-600 text-white text-lg py-2 px-8 rounded-lg focus:ring-4 focus:ring-blue-500 hover:bg-blue-700 transition duration-300">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
