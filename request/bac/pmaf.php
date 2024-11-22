<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Procurement Plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for modal functionality -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php include './partials/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="w-full md:w-3/4 lg:w-3/4 xl:w-3/4 p-6 mt-4 md:mt-0 md:ml-6">
            <h1 class="text-3xl font-semibold mb-6 text-gray-800">Procurement Modality Approval Form</h1>

            <form action="#" method="POST">

                <!-- Project Title Input -->
                <div class="mb-6">
                    <label for="project_title" class="block text-gray-700 font-medium">Project Title:</label>
                    <input type="text" id="project_title" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Checkbox Grid for Modality Options -->
                <div id="checkbox-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="public_bidding" name="modality[]" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500" value="public_bidding">
                        <label for="pfunds_101" class="ml-2 text-gray-700 font-medium">Funds 101</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="emergency_cases" name="modality[]" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500" value="emergency_cases">
                        <label for="fund_164" class="ml-2 text-gray-700 font-medium">Funds 164</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="direct_contracting" name="modality[]" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500" value="direct_contracting">
                        <label for="others" class="ml-2 text-gray-700 font-medium">Others</label>
                        <!-- Plus Button beside "Others" -->
                        <button type="button" id="add-checkbox" class="text-blue-600 hover:text-blue-800 focus:outline-none ml-3">
                            <i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
                
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript to Add Checkboxes Dynamically -->
    <script>
        document.getElementById('add-checkbox').addEventListener('click', function () {
            const container = document.getElementById('checkbox-container');
            const newCheckbox = document.createElement('div');
            newCheckbox.classList.add('flex', 'items-center', 'space-x-2', 'mb-4');

            newCheckbox.innerHTML = `
                <input type="checkbox" name="modality[]" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label class="ml-2 text-gray-700 font-medium">New Modality</label>
            `;

            container.appendChild(newCheckbox);
        });
    </script>
</body>

</html>