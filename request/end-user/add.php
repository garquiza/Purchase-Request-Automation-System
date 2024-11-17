<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PR Form</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Alpine.js for Dropdown Toggle -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">

    <div class="flex min-h-screen flex-col md:flex-row">
        <!-- Sidebar -->
        <?php include './partials/sidebar.php'; ?>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-6">Create Purchase Request (PR)</h1>
        
        <!-- Form starts here -->
        <form id="addItemForm">
            <div class="mb-4">
                <label for="department" class="block text-sm font-medium text-gray-700">Department:</label>
                <input type="text" class="form-control w-full p-2 border border-gray-300 rounded-md" id="department" name="department" required>
            </div>
            <div class="mb-4">
                <label for="section" class="block text-sm font-medium text-gray-700">Section:</label>
                <textarea class="form-control w-full p-2 border border-gray-300 rounded-md" id="section" name="section" rows="3" required></textarea>
            </div>
            <div class="mb-4">
                <label for="itemDescription" class="block text-sm font-medium text-gray-700">Item Description:</label>
                <input type="text" class="form-control w-full p-2 border border-gray-300 rounded-md" id="itemDescription" name="itemDescription" required>
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity:</label>
                <input type="number" class="form-control w-full p-2 border border-gray-300 rounded-md" id="quantity" name="quantity" required>
            </div>
            <div class="mb-4">
                <label for="unitCost" class="block text-sm font-medium text-gray-700">Unit Cost:</label>
                <input type="number" class="form-control w-full p-2 border border-gray-300 rounded-md" id="unitCost" name="unitCost" required>
            </div>
            <div class="mb-4">
                <label for="totalCost" class="block text-sm font-medium text-gray-700">Total Cost:</label>
                <input type="number" class="form-control w-full p-2 border border-gray-300 rounded-md" id="totalCost" name="totalCost" required>
            </div>
            <div class="mb-4">
                <label for="purpose" class="block text-sm font-medium text-gray-700">Purpose:</label>
                <input type="text" class="form-control w-full p-2 border border-gray-300 rounded-md" id="purpose" name="purpose" required>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary px-6 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded-md">Save</button>
            </div>
        </form>
        <!-- Form ends here -->
    </div>

</body>
</html>