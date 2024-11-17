<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PPMP</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS for Form Styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">

    <div class="flex min-h-screen flex-col md:flex-row">
        <?php include './partials/sidebar.php'; ?>

        <div class="w-full md:w-3/4 lg:w-3/4 xl:w-3/4 p-6 mt-4 md:mt-0 md:ml-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Create PPMP</h1>

            <div class="max-w-lg mx-auto p-6 bg-white border rounded-lg shadow-lg">
                <form id="addItemForm">
                    <div class="mb-3">
                        <label for="department" class="form-label">Department:</label>
                        <input type="text" class="form-control" id="department" name="department" required>
                    </div>
                    <div class="mb-3">
                        <label for="section" class="form-label">Year:</label>
                        <textarea class="form-control" id="section" name="section" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="itemDescription" class="form-label">Project Title:</label>
                        <input type="text" class="form-control" id="itemDescription" name="itemDescription" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Code:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="unitCost" class="form-label">General Description:</label>
                        <input type="number" class="form-control" id="unitCost" name="unitCost" required>
                    </div>
                    <div class="mb-3">
                        <label for="totalCost" class="form-label">Quantity Size:</label>
                        <input type="number" class="form-control" id="totalCost" name="totalCost" required>
                    </div>
                    <div class="mb-3">
                        <label for="purpose" class="form-label">Estimated Budget:</label>
                        <input type="text" class="form-control" id="purpose" name="purpose" required>
                    </div>

                    <!-- Schedule / Milestone of Activities -->
                    <h2 class="text-2xl font-bold mb-6 text-center">Schedule / Milestone of Activities</h2>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="jan" name="months[]" value="January" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="jan" class="ml-2 text-lg">January</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="feb" name="months[]" value="February" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="feb" class="ml-2 text-lg">February</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="mar" name="months[]" value="March" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="mar" class="ml-2 text-lg">March</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="apr" name="months[]" value="April" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="apr" class="ml-2 text-lg">April</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="may" name="months[]" value="May" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="may" class="ml-2 text-lg">May</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="jun" name="months[]" value="June" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="jun" class="ml-2 text-lg">June</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="jul" name="months[]" value="July" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="jul" class="ml-2 text-lg">July</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="aug" name="months[]" value="August" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="aug" class="ml-2 text-lg">August</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="sep" name="months[]" value="September" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="sep" class="ml-2 text-lg">September</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="oct" name="months[]" value="October" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="oct" class="ml-2 text-lg">October</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="nov" name="months[]" value="November" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="nov" class="ml-2 text-lg">November</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="dec" name="months[]" value="December" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="dec" class="ml-2 text-lg">December</label>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Create PPMP</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
