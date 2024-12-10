<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">

        <?php include './partials/sidebar.php'; ?>

        <div class="flex-1 overflow-y-auto p-6 bg-gray-50">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">User Settings</h1>
            <button id="save"
                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none"><i class="bi bi-person-circle"></i> Switch Account</button><br>

            <br>
            <div class="bg-white shadow-md rounded-lg p-6 space-y-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Profile Information</h2>
                    <form action="#" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" id="first_name" name="first_name" value="John"
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" id="last_name" name="last_name" value="Doe"
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" value="johndoe@example.com"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <div class="mt-4">
                            <label for="text" class="block text-sm font-medium text-gray-700">Position:</label>
                            <input type="text" id="email" name="cos" value="johndoe@example.com"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Update
                                Profile</button>
                        </div>
                    </form>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Change Password</h2>
                    <form action="#" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="current_password" class="block text-sm font-medium text-gray-700">Current
                                    Password</label>
                                <input type="password" id="current_password" name="current_password"
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>
                            <div>
                                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                                <input type="password" id="new_password" name="new_password"
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm New
                                Password</label>
                            <input type="password" id="confirm_password" name="confirm_password"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Change
                                Password</button>
                        </div>
                    </form>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Signature</h2>
                    <p class="text-sm text-gray-500 mb-4">Please provide your signature below:</p>

                    <div class="relative w-full mb-4">
                        <canvas id="signature-pad" class="border border-gray-300 w-full h-48 rounded-md"></canvas>
                    </div>

                    <div class="flex justify-between">
                        <button id="clear"
                            class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none">Clear</button>

                        <button id="save"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none">Save
                            Signature</button>
                    </div>

                    <input type="hidden" id="signature-data" name="signature_data">
                </div>

            </div>
        </div>
    </div>

    <script>
        const canvas = document.getElementById('signature-pad');
        const signaturePad = new SignaturePad(canvas);

        function resizeCanvas() {
            const ratio = window.devicePixelRatio || 1;
            const width = canvas.offsetWidth * ratio;
            const height = canvas.offsetHeight * ratio;

            canvas.width = width;
            canvas.height = height;
            signaturePad.clear();
        }

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        document.getElementById('clear').addEventListener('click', function() {
            signaturePad.clear();
        });

        document.getElementById('save').addEventListener('click', function() {
            if (!signaturePad.isEmpty()) {
                const dataUrl = signaturePad.toDataURL();
                document.getElementById('signature-data').value = dataUrl;
                alert('Signature saved!');
            } else {
                alert('Please provide a signature!');
            }
        });
    </script>

</body>

</html>