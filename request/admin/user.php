<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine.js for handling dropdowns, if used -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Page Header -->
            <header class="mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">User Management</h1>
                <p class="text-gray-600">Manage all users and their permissions.</p>
            </header>

            <!-- Summary Cards Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                <div class="p-6 bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg shadow-lg text-white">
                    <p class="text-sm font-medium text-indigo-100">Total Users</p>
                    <h2 class="text-2xl font-bold">2,120</h2>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="w-full max-w-md px-4 mb-6">
                <div class="relative">
                    <input
                        type="text"
                        class="w-full px-4 py-2 pr-10 text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Search for users..." />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M10 2a8 8 0 016.32 12.906l4.387 4.387a1 1 0 01-1.415 1.415l-4.387-4.387A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- User Table -->
            <section class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">User List</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Name</th>
                                <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Email</th>
                                <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Role</th>
                                <th class="px-6 py-3 border-b text-center text-sm font-semibold text-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4 border-b text-gray-700">John Doe</td>
                                <td class="px-6 py-4 border-b text-gray-700">johndoe@example.com</td>
                                <td class="px-6 py-4 border-b text-gray-700">Admin</td>
                                <td class="px-6 py-4 border-b text-center">
                                    <button class="px-3 py-1 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600">Edit</button>
                                    <button class="px-3 py-1 text-sm text-white bg-red-500 rounded hover:bg-red-600">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more user rows as needed -->
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>

</html>