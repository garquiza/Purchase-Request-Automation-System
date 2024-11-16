<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal flex min-h-screen">



        <?php  include './partials/sidebar.php' ?>

        <!-- Main Content Area -->
        <div class="flex-1 p-12">
            <!-- Page Title -->
            <h1 class="text-4xl font-semibold text-gray-800 mb-6">Notifications</h1>

            <!-- Notification Cards -->
            <div class="space-y-6">

                <div class="bg-white shadow-md rounded-lg p-8 flex items-center space-x-8">
                    <div class="w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center">
                        <i class="bi bi-bell"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 font-semibold">Lorem ipsum dolor sit amet</p>
                        <p class="text-sm text-gray-500">Consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <span class="text-sm text-gray-400">2 mins ago</span>
                </div>

                <div class="bg-white shadow-md rounded-lg p-8 flex items-center space-x-8">
                    <div class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 font-semibold">Lorem ipsum dolor sit amet</p>
                        <p class="text-sm text-gray-500">Consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <span class="text-sm text-gray-400">5 mins ago</span>
                </div>

                <div class="bg-white shadow-md rounded-lg p-8 flex items-center space-x-8">
                    <div class="w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center">
                        <i class="bi bi-x-circle"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 font-semibold">Lorem ipsum dolor sit amet</p>
                        <p class="text-sm text-gray-500">Consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <span class="text-sm text-gray-400">10 mins ago</span>
                </div>

                <div class="bg-white shadow-md rounded-lg p-8 flex items-center space-x-8">
                    <div class="w-16 h-16 bg-yellow-500 text-white rounded-full flex items-center justify-center">
                        <i class="bi bi-exclamation-circle"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 font-semibold">Lorem ipsum dolor sit amet</p>
                        <p class="text-sm text-gray-500">Consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <span class="text-sm text-gray-400">20 mins ago</span>
                </div>

            </div>
        </div>

    </div>

    <!-- Sidebar Dropdown JS -->
    <script>
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');

        dropdownButton.addEventListener('click', function () {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
